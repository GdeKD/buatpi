<?php

namespace App\Http\Controllers;

use Auth;
use Carbon;
use App\Galeri;
use App\GaleriSingle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index(){
      $albums = Galeri::latest()->paginate(3);
      // foreach ($albums as $album) {
      //   foreach ($album->photos as $photo) {
      //     dd($photo->filepath);
      //   }
      // }
      return view('client.galeri.index',compact('albums'));
    }

    public function show($id)
    {
      $photos = GaleriSingle::where('galeri_id',$id)->get();
      $album = Galeri::with('photos')->where('id',$id)->first();
      // dd($album->judul);
      if(empty($photos))
      abort(404,'message');
      return view('client.galeri.show',compact('photos','album'));
    }

    public function isValid()
    {
      $this->validate($request, [
        // 'title' => 'required|string|max:30',
        'files.*' => 'required|mimes:jpeg,jpg,png|max:2500'
      ]);
    }

    public function StoreAlbum($request, $judul)
    {
      Galeri::create([
        'judul' => $judul,
        'deskripsi' => $request->deskripsi,
        'user_id' =>auth::user()->id
      ]);
    }

    public function upload(Request $request)
    {

      $files = [];
      $dirPath = str_slug($request->title,'-');
      $judul = $request->title;
      // if($files->isValid())
      if (is_array($request->file('files')) || is_object($request->file('files'))){
          if( galeri::where('judul',$request->title)->first()!=null)
          $judul = $request->title.'-'.Carbon::now()->format('d-m-Y');
          // dd($dirPath);
          Storage::disk('galeri')->makeDirectory($dirPath);
          $galeri = Galeri::create([
            'judul' => $judul,
            'dir_name' => $dirPath,
            'deskripsi' => $request->deskripsi,
            'user_id' =>auth::user()->id
          ]);

          foreach ($request->file('files') as $file) {
            if ($file->isValid()) {
              // save information to variable
              // next will be saved to database
              $path = $file->store('public/galeri/'.$dirPath);
              $callPath = str_replace('public','storage',$path);

              $files[] = [
                  'filepath' => $callPath,
                  'filestore' => $path,
                  'galeri_id' => $galeri->id,
                  'created_at' => $now = Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => $now,
              ];
            }
        }
        //input ke db dengan insert jadi perhatiin data yang masuk.
        GaleriSingle::insert($files);
      }
      return redirect()
          ->back()
          ->with('msg','Total '.count($request->file('files')).' berkas berhasil diunggah.');
    }

    public function destroy($id){
      $galeri = Galeri::findOrFail($id);
      Storage::deleteDirectory($galeri->dir_name);
      // Storage::disk('s3')->delete('folder_path/file_name.jpg');
      $galeri->delete();
    }
}
