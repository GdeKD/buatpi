@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card w-100">

              <h2 class="card-header">Daftar Warga</h2>

                <div class="card-body">
                  <p class="card-subtitle">Pengubahan data warga saat ini belum tersedia.</p><br>

                    @if (session('msg'))
                        <div class="alert alert-success">
                            {{ session('msg') }}
                        </div>
                    @elseif (session('redmsg'))
                        <div class="alert alert-danger">
                          {{session('redmsg')}}
                    </div>
                    @endif
                    <div class="table-responsive">
                      <table class="table table-hover" >
                        <!-- border="1" style="width: 100%; border-color: #000000;" -->
                        <caption>Daftar warga</caption>
                        <thead class="thead-dark">
                          <tr style=" text-align: center;">
                            <th>NIK</th>
                            <th>NKK</th>
                            <th>Nama Lengkap</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Agama</th>
                            <th>Jenis Kel.</th>
                            <th>Alamat</th>
                          </tr>
                        </thead>
                        @foreach ($list as $daftar)
                        <tbody>
                          <tr>
                            <td style=" text-align: center;"><a>{{$daftar->nik}}</a></td>
                            <td style=" text-align: center;">{{$daftar->nkk}}</td>
                            <td style=" text-align: center;">{{$daftar->nama}}</td>
                            <td>{{$daftar->tempat_lahir}}</td>
                            <td>{{$daftar->tanggal_lahir->format('d-m-Y')}}</td>
                            <td style=" text-align: center;">{{$daftar->agama}}</td>
                            <td style=" text-align: center;">{{$daftar->j_kelamin}}</td>
                            <td>{{$daftar->alamat}}</td>
                          </tr>
                        </tbody>

                        @endforeach
                        {{ $list->links() }}
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
