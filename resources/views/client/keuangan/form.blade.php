@extends('layouts.dashboard')

@section('content')
<div class="container">
  <div class="row justify-content-center">

        <div class="card w-75">
          <br>
          <div class="card-body">
            <h3 class="card-title text-center">Laporan Keuangan</h3>
            <hr>
            <p class="card-subtitle text-center">Form Unggah Laporan Keuangan RT.</p>
            <div class="row justify-content-center">
              @if (session('msg'))
              <div class="alert alert-success">
                {{ session('msg') }}
              </div>
              @elseif (session('redmsg'))
              <div class="alert alert-danger">
                {{session('redmsg')}}
              </div>
              @endif

              <!-- <a href="{{ asset('storage/merdeka!!_180801_0028.jpg') }} " target="_blank"> liat foto</a> -->
            </div>

            <div class="row justify-content-center">
              <form class="" action="/admin/keuangan/upload" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  Judul Laporan :
                  <input type="text" name="title" class="form-control" placeholder="Judul" value="{{old('title')}}">
                </div>
                <div class="form-group">
                  Tahun : {{$tahun}}. Periode :
                  <select class="form-control" name="periode">
                    <option value="Triwulan 1, Jan-Mar">Triwulan 1, Jan-Mar</option>
                    <option value="Triwulan 2, Apr-Jun">Triwulan 2, Apr-Jun</option>
                    <option value="Triwulan 4, Okt-Des">Triwulan 4, Okt-Des</option>
                    <option value="Triwulan 3, Jul-Sep">Triwulan 3, Jul-Sep</option>
                  </select>
                </div>
                {{ csrf_field() }}
                <!-- <div class="form-group"> -->
                  Files : <br>
                  <!-- <label for="files">Files :</label><br> -->
                  <input class="form-control" type="file" name="file">
                <!-- </div> -->
                <div class="form-group">
                  keterangan :
                  <textarea id="WYSIWYG" name="keterangan" class="form-control" rows="6" cols="80" placeholder="(optional)">{{old('keterangan')}}</textarea>
                </div>
                <button type="submit" class="btn btn-default btn-block btn-outline-primary">unggah Laporan</button>
              </form>
            </div>

          </div>
        </div>

    </div>
</div>
@endsection
