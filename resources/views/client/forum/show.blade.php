@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          @if(session('msg'))
          <div class="alert alert-success">
            {{session('msg')}}
          </div>
          @elseif (session('redmsg'))
          <div class="alert alert-danger">
            {{session('redmsg')}}
          </div>
          @endif

            <div class="card border-success">
              <div class="card-body">
                  <h4 class="card-title">{{$forum->judul}}</h4>
                  <hr class="border-success">
                  <div class="card-text">
                    <div class="row justify-content-between">
                      <div class="col">
                        <p>oleh {{$forum->user->name}}</p>
                        <p class="lead">{!!$forum->konten!!}</p>
                      </div>
                      <div class="col-md-auto text-right">
                        <p>{{$forum->updated_at->format('d, M y')}}</p>
                      </div>
                    </div>

                  </div>
                  <div class="row">
                    <div class="col-md-auto">
                      <p><a href="{{url('/forum')}}" class="btn btn-sm btn-outline-primary"><< Daftar Topik</a></p>
                    </div>
                    @if ($forum->owner())
                    <div class="col-md-auto">

                    <a href="/forum/{{$forum->id}}/edit" class="btn btn-sm btn-outline-warning">Edit Topik</a>
                    </div>
                    <div class="col-md-auto">
                    <form class="" action="/forum/{{$forum->id}}" method="post">
                      {{ csrf_field() }}

                      <!-- ngasih tau kalo ini form DELETE -->
                      <input type="hidden" name="_method" value="DELETE">
                      <!-- input ini aja -->

                      <button type="submit" class="btn btn-sm btn-outline-danger">Hapus Topik</button>
                    </form>
                    </div>
                    @endif
                </div>
              </div>

          </div> <br>
          <div class="row justify-content-center">
            <div class="col">
              <div class="card card-body border-secondary">
                @if(session('komenmsg'))
                <div class="alert alert-success">
                  {{session('komenmsg')}}
                </div>
                @elseif (session('komenredmsg'))
                <div class="alert alert-danger">
                  {{session('komenredmsg')}}
                </div>
                @endif
                <form class="" action="/forum-comment/{{$forum->id}}" method="post">
                  <div class="form-group">
                    <label for="komen">Form Komentar :</label>
                    <textarea class="form-control" name="komen" rows="4" cols="15" placeholder="berikan komentar.."></textarea>
                  </div>
                  {{ csrf_field() }}
                  <button type="submit" class="btn btn-sm btn-outline-secondary btn-block" name="submit">Post</button>
                </form>
              </div>
            </div>
          </div> <br>

        </div>
        <div class="col-md-4">
          <div class="card border-warning"> <br>
            <div id="listkomentar" class="row justify-content-center">
              <div class="col-md-10">
                <ul class="list-group">
                  <div class="row">
                    <div class="col"> <hr> </div>
                    <div class="col-auto text-center"><h5>Komentar</h5></div>
                    <div class="col"> <hr> </div>
                  </div>
                  @if(session('commentmsg'))
                  <div class="alert alert-success">
                    {{session('commentmsg')}}
                  </div>
                  @elseif (session('commentredmsg'))
                  <div class="alert alert-danger">
                    {{session('commentredmsg')}}
                  </div>
                  @endif
                  @if (is_array($forum->comment) || is_object($forum->comment))
                  @foreach($comments as $comment)
                  <li class="list-group-item list-group-item-">
                    <div class="d-flex w-100 justify-content-between">
                      <small>{{$comment->user->UsersIdentity->nama}}</small>
                      <small>
                        {{$comment->created_at->diffForHumans()}}
                      </small>
                    </div>
                    <div class="d-flex w-100 justify-content-between">
                      <p class="mb-1">"{{$comment->konten}}"</p>
                      @if ($comment->owner())
                      <!-- <button type="submit" class="close"> -->
                      <form class="" action="/forum-comment/{{$comment->id}}" method="post">
                        {{ csrf_field() }}
                        <!-- ngasih tau kalo ini form DELETE -->
                        <input type="hidden" name="_method" value="DELETE">
                        <!-- input ini aja -->
                        <button type="submit" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="right" title="delete">
                          <i class="material-icons" style="font-size:8pt">clear</i>
                        </button>
                      </form>
                      @endif
                    </div>
                  </li>
                  @endforeach
                  @endif
                  {{$comments->links()}}
                </ul>
              </div>
            </div> <br>
          </div>
        </div>
    </div>
    <br>
</div>
@endsection
