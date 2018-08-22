@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- <div class="col-md-8"> -->
            <div class="card w-75">
              <br>
                <!-- <h2 class="card-header" style="text-align: center">{{ __('Form Pembuatan Berita') }}</h2> -->
                <!-- <hr> -->
                <div class="card-body">
                  <h3 class="card-title text-center">Form Pembuatan Berita</h3>
                  <hr>
                  <!-- Form -->
                  @if (count($errors)>0)
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                      <li>
                        {{ $error }}
                      </li>
                      @endforeach
                    </ul>
                  </div>
                  @endif
                  <form class="" action="/admin/berita" method="post">
                    <div class="form-group">
                      <b>Judul Berita</b>
                      <!-- <label for="title">Judul Berita</label> -->
                      <input type="text" name="title" class="form-control" placeholder="tulis judul di sini" value="{{old('title')}}">
                    </div>
                    <div class="form-group">
                      <b>Isi Berita</b>
                      <!-- <label for="konten">Isi Berita</label> -->
                      <textarea id="WYSIWYG" name="konten" class="form-control" rows="8" cols="80">{{old('konten')}}</textarea>
                    </div>

                    {{ csrf_field() }}

                    <button type="submit" class="btn btn-default btn-block btn-outline-primary">Tampilkan Berita</button>
                  </form>
                  <!-- Form -->
                </div>
            </div>
        <!-- </div> -->
    </div>
</div>
@endsection
