@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">

              <h2 class="card-header">Record Permintaan Surat Pengantar</h2>

                <div class="card-body">
                  <!-- <p class="card-subtitle">Klik judul berita untuk melihat isi atau menghapus berita.</p><br> -->
                    @if (session('msg'))
                        <div class="alert alert-success">
                            {{ session('msg') }}
                        </div>
                    @elseif (session('redmsg'))
                        <div class="alert alert-danger">
                          {{session('redmsg')}}
                    </div>
                    @endif
                    <div class="row justify-content-center">
                      <table class="table table-hover" style="width: 80%;">
                        <caption>Daftar data pengajuan surat pengantar</caption>
                        <tr class="text-center">
                          <th>Pemohon</th>
                          <th>No. Surat</th>
                          <th>Maksud/Tujuan</th>
                        </tr>
                        @foreach ($surat as $satuan)
                        <tbody>
                          <tr>
                            <td>{{$satuan->pemohon}}</a></td>
                            <td class="text-center">{{$satuan->urutan}}/A/SP/012/013/{{$satuan->created_at->format('m/Y')}}
                            </td>
                            <td>{{$satuan->tujuan}}</td>
                            <td>
                            </td>
                            <td class="text-center">
                              <form class="" action="surat/{{$satuan->id}}" method="post">
                                {{ csrf_field() }}

                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-outline-danger btn-sm active">delete</button>
                              </form>
                            </td>
                          </tr>
                        </tbody>

                        @endforeach
                        {{ $surat->links() }}
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
