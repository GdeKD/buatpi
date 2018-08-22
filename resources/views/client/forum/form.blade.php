@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-primary">
                <div class="card-header border-primary" ><h2 style="text-align: center"><u>Buat Topik Diskusi</u></h2>
                <p class="card-subtitle">Silahkan membuat topik diskusi yang anda ingin ungkapkan kepada sesama warga.
                  <br>Mohon untuk menggunakan bahasa yang sopan.
                </p>
                </div>

                <div class="card-body">
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
                  <!-- Form -->
                  <form class="" action="/forum" method="post">
                    <div class="form-group">
                      <label for="title">Judul Diskusi</label>
                      <input type="text" name="title" class="form-control" placeholder="tulis judul di sini" value="{{old('title')}}">
                    </div>
                    <div class="form-group">
                      <label for="konten">Isi Diskusi</label>
                      <textarea id="WYSIWYG" name="konten" class="form-control" rows="8" cols="80">{{old('konten')}}</textarea>
                    </div>

                    {{ csrf_field() }}

                    <button type="submit" class="btn btn-default btn-block btn-outline-primary">Tampilkan Topik Diskusi Ini</button>
                  </form>
                  <!-- Form -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
