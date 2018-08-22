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
            <h4>Daftar Laporan Keuangan RT</h4>
            @foreach($balances as $balance)
            <a href="/keuangan/download/{{$balance->id}}" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$balance->judul}}</h5>
                <small>{{$balance->created_at->diffForHumans()}}</small>
              </div>
              <p class="mb-1">{!!$balance->keterangan!!}</p>
              <small>diunggah oleh {{$balance->user->name}}.</small>
            </a>
            @endforeach
            <!-- <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
            <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
            <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
            <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a> -->
          </div>
          {{$balances->links()}}

        </div>
        @yield('show')
    </div>
@endsection
