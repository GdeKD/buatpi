@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <!-- nampilin create kalo login -->
        @if (Route::has('login'))
          <div class="card border-danger card-body">
            <h3 class="card-title">Masukan Topik Diskusi</h3>
            <p class="card-text">Untuk memasukan Topik Diskusi anda harus masuk dengan akun situs ini</p>
            @auth
              <a href="{{ url('/forum/create') }}" class="btn btn-danger">Buat Topik Diskusi</a>
            @else
              <a class="btn btn-danger" href="{{ route('login') }}">{{ __('Login') }}</a>
            @endauth
          </div>
        @endif
      </div>
        <div class="col">
            <div class="card border-primary">
                <div class="card-header border-primary bg-primary">

                  <h2>
                    <u>Forum Warga</u>
                  </h2>

                </div>

                @if (session('msg'))
                <div class="alert alert-success">
                  {{ session('msg') }}
                </div>
                @elseif (session('redmsg'))
                <div class="alert alert-danger">
                  {{session('redmsg')}}
                </div>
                @endif
                <div class="card-body ">

                    @foreach ($forums as $forum)
                    <div class="row justify-content-between">
                      <div class="col-md-auto">
                        <h4 class="card-title">{{$forum->judul}}</h4>
                      </div>
                      <div class="col-md-auto">
                        <p>{{$forum->updated_at->diffForHumans()}}</p>
                      </div>
                    </div>
                      <div class="row justify-content-between">
                        <div class="col-md-auto">
                          <p>diunggah oleh {{$forum->user['name']}}</p>
                        </div>
                        <div class="col-md-auto">
                          <a href="forum/{{$forum->slug}}" class=" text-right btn btn-primary btn-sm">Lihat selengkapnya</a>
                        </div>
                      </div>
                      <hr>
                    @endforeach
                    {{ $forums->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
