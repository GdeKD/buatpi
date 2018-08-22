<?php

namespace App\Http\Controllers;

use DB;
use PDF;
use Auth;
use Carbon;
use App\User;
use App\Http\Requests;
use App\UsersIdentity;
use App\SuratPengantar;
use Illuminate\Http\Request;

class SuratPengantarController extends Controller
{
    public function list()
    {
      $surat = SuratPengantar::Latest()->paginate(10);
      return view ('admin.Surat.List',compact('surat'));
    }

    public function showSubmitForm(){
      $user = UsersIdentity::findOrFail(Auth::user()->user_nik);

      // coba
        // $citizens = Auth::UsersIdentity()->nama;
        // $identity = $citizens->UsersIdentity()->nama;
        // view()->share('citizens',$citizens);

      return view('client.SuratPengantar.formPengajuan',compact('user'));
    }


    public function showpdfview(Request $request){
      $users = UsersIdentity::findOrFail(Auth::user()->user_nik);
      $bulan = Carbon::now()->format('m');
      $tahun = Carbon::now()->format('Y');
      $konfirmasi = SuratPengantar::whereMonth('created_at',$bulan)->count();
      if ($konfirmasi != 0) {
        $konfirmasi = SuratPengantar::whereMonth('created_at',$bulan)->get();
        $last = collect($konfirmasi)->last();
        $urutan = $last->urutan +1;
      }
      else {
        $urutan = 1;
      }
        return view('client.SuratPengantar.SuratPDF',compact('users','bulan','tahun','urutan','request'));
    }

    /**
     * Store a newly created resource in storage and sent a download respone.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function print(Request $request)
    {
      $users = UsersIdentity::findOrFail(Auth::user()->user_nik);
      $bulan = Carbon::now()->format('m');
      $tahun = Carbon::now()->format('Y');
      $konfirmasi = SuratPengantar::whereMonth('created_at',$bulan)->count();
      if ($konfirmasi != 0) {
        $konfirmasi = SuratPengantar::whereMonth('created_at',$bulan)->get();
        $last = collect($konfirmasi)->last();
        $urutan = $last->urutan +1;
      }
      else {
        $urutan = 1;
      }

          $Surat = SuratPengantar::create([
            'pemohon' => $users->nama,
            'user_id' => Auth::user()->id,
            'urutan' => $urutan,
            'tujuan' => $request->keperluan
          ]);
        // if($request->has('download')) {
        	// pass view file
            $pdf = PDF::loadView('client.SuratPengantar.SuratPDF',compact('users','bulan','tahun','urutan','request'))->setPaper('a4');
            //change the orientation and paper size
            // PDF::loadHTML($html)->setPaper('a4')->setOrientation('landscape')->setOption('margin-bottom', 0)->save('myfile.pdf')
            // PDF::loadView('client.SuratPengantar.viewhtml')->setPaper('a4')->setOption('margin-bottom', 0);
            // download pdf
            return $pdf->download('SuratPengantar'.$urutan.'ASP012013'.$bulan.$tahun.'.pdf');
        // }
        return view('client.SuratPengantar.SuratPDF',compact('users','bulan','tahun','urutan','request'))
          ->with('msg', 'Silahkan print Surat dan legarlisir kepada pengurus RT dan RW')
        ;
    }

    public function destroy($id)
    {
        $surat=SuratPengantar::findOrFail($id);
          $surat->delete();

        return redirect()->back()->with('redmsg','Berita dihapus.');
    }

}
