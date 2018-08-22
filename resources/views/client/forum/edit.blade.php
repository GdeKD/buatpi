@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-primary">
                <div class="card-header border-primary" ><h2 style="text-align: center"><u>Ubah Topik Diskusi</u></h2>
                <p class="card-subtitle badge badge-info">
                  Mohon gunakan bahasa yang sopan.
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
                  <form class="" action="/forum/{{$forum->id}}" method="post">
                    <div class="form-group">
                      <label for="title">Judul Diskusi</label>
                      <input type="text" name="title" class="form-control" placeholder="tulis judul di sini"
                      value="{{(old('title')) ? old('title') : $forum->judul}}">
                    </div>
                    <div class="form-group">
                      <label for="konten">Isi Diskusi</label>
                      <textarea id="WYSIWYG" name="konten" class="form-control" rows="8" cols="80">
                        {{(old('konten')) ? old('konten') : $forum->konten}}
                      </textarea>
                    </div>

                    {{ csrf_field() }}

                    <input type="hidden" name="_method" value="PUT">

                    <button type="submit" class="btn btn-default btn-block btn-outline-primary">Tampilkan perubahan</button>
                  </form>
                  <!-- Form -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
