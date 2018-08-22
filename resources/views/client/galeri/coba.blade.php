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
            <a href="/galeri/show/{{$albums->id}}" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$albums->judul}}</h5>
                <small>{{$albums->created_at->diffForHumans()}}</small>
              </div>
              <picture>
                @foreach($photos as $photo)
                <img class="img-thumbnail d-block rounded" src="{{$photo->filepath}}" alt="">
                @endforeach
              </picture>
              <p class="mb-1"></p>
              <small>diunggah oleh {{$albums->user->name}}.</small>
            </a>
            <!-- <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
            <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
            <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
            <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a> -->
          </div>

        </div>
        @yield('show')
    </div>
@endsection
