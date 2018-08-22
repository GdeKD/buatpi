@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <br>
                <div class="card-header" style="text-align: center">{{ __('Form Ubah Berita') }}</div>
                <hr>
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
                  <form class="" action="/admin/berita/{{$announcement->id}}" method="post">
                    <div class="form-group">
                      <label for="title">Judul Berita</label>
                      <input type="text" name="title" class="form-control" placeholder="tulis judul di sini"
                      value="{{(old('title'))? old('title') : $announcement->judul}}">
                    </div>
                    <div class="form-group">
                      <label for="konten">Isi Berita</label>
                      <textarea id="WYSIWYG" name="konten" class="form-control" rows="8" cols="80">
                        {{(old('konten'))? old('konten') : $announcement->konten}}
                      </textarea>
                    </div>

                    {{ csrf_field() }}

                    <!-- Ngasih tau form update -->
                    <input type="hidden" name="_method" value="PUT">

                    <button type="submit" class="btn btn-default btn-block btn-outline-warning">Perbarui Berita</button>
                  </form>
                  <!-- Form -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
