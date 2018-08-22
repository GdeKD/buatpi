@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- <div class="col-md-10"> -->
            <div class="card w-75">
              <br>
                <div class="card-body">
                  <h3 class="card-title text-center">{{ $announcement->judul }}</h3> <hr>
                  <p>{!! $announcement->konten !!}</p> <hr>
                  @if($announcement->owner())
                  <div class="row justify-content-center">
                    <div class="col-auto">
                      <a href="/admin/berita/{{$announcement->id}}/edit" class="btn btn-outline-warning btn-sm btn-active">edit</a>
                    </div>
                    <div class="col-auto">
                      <form class="" action="{{$announcement->id}}" method="post">
                        {{ csrf_field() }}

                        <!-- ngasih tau kalo ini form delete -->
                        <input type="hidden" name="_method" value="DELETE">

                        <button class="btn btn-outline-danger btn-sm" type="button" data-toggle="collapse" data-target="#collapseDelete" aria-expanded="false" aria-controls="collapseExample">
                          delete
                        </button>

                        <div class="collapse" id="collapseDelete">
                          <div class="card card-body">
                            Yakin Hapus Berita Ini?
                            <div class="row justify-content-center">
                              <div class="col-auto">
                                <button type="submit" class="btn btn-outline-danger btn-sm" active>delete</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  @endif

                </div>
            </div>
        <!-- </div> -->
    </div>
</div>
@endsection
