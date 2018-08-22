@extends('layouts.app')

@section('content')
<!-- <div class="container"> -->
    <div class="row justify-content">
        <div class="col">
            <div class="card border-info">
                <h2 class="card-header  text-white bg-info">Berita Terbaru</h2>
                <div class="card-body">
                    @if (session('msg'))
                        <div class="alert alert-success">
                            {{ session('msg') }}
                        </div>
                    @elseif (session('redmsg'))
                        <div class="alert alert-danger">
                          {{session('redmsg')}}
                    </div>
                    @endif

                    @foreach ($announcements as $announcement)
                    <div class="row">
                      <div class="col">
                        <div class="card border-secondary">
                          <div class="card-body">
                            <p style="text-align:right">
                              @if($announcement->baru())
                              <span class="badge badge-info">Berita Baru!</span>
                              @elseif($announcement->diubah())
                              <span class="badge badge-warning">Berita diperbarui!</span>
                              @endif
                              {{$announcement->updated_at->diffForHumans()}}
                            </p>
                            <h4  class="card-title text-center" >{{$announcement->judul}}</h4>
                            <p class="lead">{!!$announcement->konten!!}</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        @if(session('komenmsg'.$announcement->id))
                        <div class="alert alert-success">
                          {{session('komenmsg'.$announcement->id)}}
                          <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button> -->
                        </div>
                        @elseif (session('komenredmsg'))
                        <div class="alert alert-danger">
                          {{session('komenredmsg')}}
                        </div>
                        @endif
                        <form  id="formkomen" class="" action="/berita-comment/{{$announcement->id}}" method="post">
                            <label for="komen">Berikan Komentar :</label>
                            <textarea class="form-control" name="komen" rows="2" cols="15" placeholder="ketik komentar.."></textarea>
                          {{ csrf_field() }}
                          <button type="submit" class="btn btn-sm btn-outline-secondary btn-block" name="submit">komentari</button>
                        </form> <br>
                        <div class="card card-body border-danger"><span class="text-center">Komentar</span> <hr>
                          @if (is_array($announcement->comments) || is_object($announcement->comments))
                          @foreach($announcement->comments as $last)
                            <div class="d-flex w-100 justify-content-between">
                              <small>{{$last->user->UsersIdentity->nama}}</small>
                              <small>
                                {{$last->created_at->diffForHumans()}}
                              </small>
                            </div>
                            <small>
                              {{$last->konten}}
                            </small> <hr>
                            @if ($loop->index == 5)
                            <small class="text-center">
                              <a href="#">lihat {{$loop->remaining}} lainnya</a>
                            </small>
                            @endif
                          @endforeach
                          @endif
                        </div>
                      </div>
                    </div>
                    <hr class="border-info">
                    @endforeach
                    {{ $announcements->links() }}
                </div>
            </div>
        </div>
    </div>
<!-- </div> -->
@endsection
