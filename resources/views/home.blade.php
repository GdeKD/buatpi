@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="alert alert-danger">
            Kontak pengurus RT bila ada kesalahan data.
          </div>
            <div class="card border-info">
              <div class="card-header border-info">
                <h5 style="color: #0097A7">
                  <u>
                    Informasi Identitas Warga
                  </u>
                </h5>
              </div>
                <!-- <div class="card-header">Dashboard</div> -->

                <div class="card-body">
                  <div class="col-auto">
                    <table>
                        <tbody>
                        <tr>
                          <td>
                            Nama
                          </td>
                          <td>
                            : {{ strtoupper($user->nama) }}
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Tempat/Tgl. Lahir
                          </td>
                          <td>
                            : {{ strtoupper($user->tempat_lahir) }}, {{$user->tanggal_lahir->format('d-m-Y')}}
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Jenis Kelamin
                          </td>
                          <td>
                            :
                            @if ($user->j_kelamin == 'p')
                            PEREMPUAN
                            @else
                            LAKI-LAKI
                            @endif
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Agama
                          </td>
                          <td>
                            : {{ strtoupper($user->agama) }}
                          </td>
                        </tr>
                        <tr>
                          <td>
                            NIK/No. KTP
                          </td>
                          <td>
                            : {{$user->nik}}
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Alamat
                          </td>
                          <td>
                            : {{strtoupper($user->alamat) }} RT/RW. 012/013.
                            MEKARSARI. CIMANGGIS. DEPOK.
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="col">
                  </div>

                    <!-- @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
