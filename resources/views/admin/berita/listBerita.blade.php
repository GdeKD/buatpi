@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">

              <h2 class="card-header">Daftar Berita</h2>

                <div class="card-body">
                  <p class="card-subtitle">Klik judul berita untuk melihat isi atau menghapus berita.</p><br>

                    @if (session('msg'))
                        <div class="alert alert-success">
                            {{ session('msg') }}
                        </div>
                    @elseif (session('redmsg'))
                        <div class="alert alert-danger">
                          {{session('redmsg')}}
                    </div>
                    @endif

                    <table class="table table-hover" style="width: 80%;">
                      <caption>Daftar pemberitahuan resmi</caption>
                      <thead class="text-center">
                        <tr>
                          <th>Judul Berita</th>
                          <th>Tanggal publiskasi</th>
                          <th>Pemublikasi</th>
                        </tr>
                      </thead>
                      @foreach ($announcements as $announcement)
                      <tbody>
                        <tr>
                          <td><a href="{{$announcement->slug}}">{{$announcement->judul}}</a></td>
                          <td class="text-center">{{$announcement->updated_at->format('d-m-Y H:i:s')}}/{{$announcement->updated_at->diffForHumans()}}</td>
                          <td>{{$announcement->user->name}}</td>
                          @if($announcement->owner())
                            <td>
                              <a href="/admin/berita/{{$announcement->id}}/edit" class="btn btn-outline-warning btn-sm">edit</a>
                            </td>
                            <!-- <td>
                              <form class="" action="/{{$announcement->id}}" method="post">
                                {{ csrf_field() }}

                                <input type="hidden" name="_method" value="DELETE">

                                <button type="submit" class="btn btn-outline-danger btn-sm">delete</button>
                              </form>
                            </td> -->
                      @endif
                        </tr>
                      </tbody>

                    @endforeach
                    {{ $announcements->links() }}
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
