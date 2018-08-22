@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col">
          @if (session('msg'))
              <div class="alert alert-success">
                  {{ session('msg') }}
              </div>
          @elseif (session('redmsg'))
              <div class="alert alert-danger">
                {{session('redmsg')}}
          </div>
          @endif

          <div class="list-group">
            <h4>Daftar Album Foto</h4>
            @foreach($albums as $album)
            <a href="/galeri/show/{{$album->id}}" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$album->judul}}</h5>
                <small>{{$album->created_at->diffForHumans()}}</small>
              </div>
              <picture>
                @foreach($album->photos as $foto)
                <img src="{{$foto->filepath}}" class="img-thumbnail" alt="" width="200" height="200">
                @endforeach
              </picture>
              <p class="mb-1">{{$album->deskripsi}}</p>
              <small>diunggah oleh {{$album->user->name}}.</small>
            </a>
            @endforeach
            <!-- <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
            <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
            <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
            <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a> -->
          </div>
          {{$albums->links()}}

              <!-- <div class="card card-body">
                <a href="/galeri/show/{{$album->id}}">
                  {{$album->judul}}
                </a>
              </div> -->
        </div>
        @yield('show')
    </div>
@endsection
