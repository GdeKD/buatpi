<?php

namespace App\Http\Controllers;

use Auth;
use Carbon;
use App\FinancialReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KeuanganController extends Controller
{
  public function index()
  {
    $balances = FinancialReport::latest()->paginate(8);
    return view('client.keuangan.index',compact('balances'));
  }

  public function list()
  {
    $list = FinancialReport::latest()->paginate(5);
    $tahun = Carbon::now()->format('Y');
    return view('admin.keuangan.form',compact('tahun','list'));
  }

  public function download($id)
  {
    $balance = FinancialReport::where('id', $id)->first();
    // dd($balance->filepath);
    return response()->download($balance->filepath);
    // return Storage::download(asset($balance->filepath));
  }

  public function isValid($request)
  {
    $this->validate($request, [
      'keterangan' => 'string|max:100',
      'file' => 'required|mimes:xlsx,xls|max:250000'
    ]);
  }

  public function upload(Request $request)
  {
    $tahun = Carbon::now()->format('Y');
    $judul = $tahun.' '.$request->periode;
    $dirPath = str_slug($judul,'-');
        if( FinancialReport::where('judul',$judul)->first()!=null){
          $judul = $judul.'-'.Carbon::now()->format('d-m-Y');
          $dirPath = $dirPath.'-'.Carbon::now()->format('d-m-Y');
        }
        // dd($coba);
        if ($this->isValid($request)) {
            $path = $request->file->storeAs('/',$dirPath.'.xlsx','keuangan');
            $callPath = 'storage/keuangan/'.$dirPath.'.xlsx';

            FinancialReport::create([
              'judul' => $judul,
              'keterangan' => $request->keterangan,
              'user_id' =>auth::user()->id,
              'filestore' => $path,
              'filepath' => $callPath
            ]);
      }
      else return redirect()->back()->with('redmsg','file tidak valid!');
      // }
    return redirect()
        ->back()
        ->with('msg','berkas berhasil diunggah.');
  }

  public function destroy($id)
  {
    $report = FinancialReport::findOrFail($id);
    $hapus = Storage::disk('keuangan')->delete($report->filestore);
    $report->delete();

    return redirect()->back()->with('redmsg', 'Laporan telah dihapus.');
  }
}
