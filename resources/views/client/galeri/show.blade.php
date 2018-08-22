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
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                @foreach($photos as $photo)
                <img class="d-block w-100" src="{{asset($photo->filepath)}}" alt="">
                <div class="carousel-caption d-none d-md-block">
                  <h5></h5>
                  <p></p>
                </div>
              </div>
              <div class="carousel-item">
              @endforeach
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="d-flex w-100 justify-content-between">
            <p>--</p>
            <small>{{$album->created_at->diffForHumans()}}</small>
          </div>
          <h5 class="mb-1">{{$album->judul}}</h5>
          <p justify class="mb-1">"{{$album->deskripsi}}"</p>
          <small>diunggah oleh {{$album->user->name}}.</small>
          <p class="text-right">--</p>
        </div>
    </div>
@endsection
