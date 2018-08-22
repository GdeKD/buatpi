@extends('layouts.dashboard')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title text-center">Galeri</h3>
          <hr>
          <p class="card-subtitle text-center">Form pembuatan konten galeri.</p>
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
          <form class="" action="/admin/galeri/upload" method="post" enctype="multipart/form-data">
            <div class="form-group">
              Nama album :
              <input type="text" name="title" class="form-control" placeholder="Nama album untuk judul dalam galeri" value="{{old('title')}}">
            </div>

            {{ csrf_field() }}
            Files : <br>
            <input type="file" name="files[]" multiple>
            <div class="form-group">
              Deskripsi :
              <textarea id="" name="deskripsi" class="form-control" rows="4" cols="80" placeholder="(optional)">{{old('konten')}}</textarea>
            </div>
            <button type="submit" class="btn btn-block btn-outline-primary ">Buat Album Foto</button>
          </form>

        </div>
      </div>

    </div>
  </div>
</div>
@endsection
