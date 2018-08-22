@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Nampilkan data sesuai keperluan surat pengantar -->
      <div class="card card-body">

        <div class="col-auto">
          @if (session('msg'))
              <div class="alert alert-success">
                  {{ session('msg') }}
              </div>
          @elseif (session('redmsg'))
              <div class="alert alert-danger">
                {{session('redmsg')}}
          </div>
          @endif
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
                  : {{ strtoupper($user->agama) }} <br>
                </td>
              </tr>
              <tr>
                <td>
                  NIK/No. KTP
                </td>
                <td>
                  : {{$user->nik}} <br>
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

      </div>
      <br>
    <!-- Form untuk baris maksud/tujuan surat pengantar -->
      <form class="form-block" action="/surat/store" method="post"  target="_blank">
        <div class="form-group">
          <label for="keperluan">Alasan pengajuan</label>
          <!-- <input type="text" name="keperluan" class="form-control" placeholder="Mohon diisi sesuai keperluan sebenarnya" value="{{old('keperluan')}}"> -->
          <select class="form-control" name="keperluan">
            <option value="Penerbitan Kartu Tanda Penduduk">Penerbitan KTP</option>
            <option value="Penerbitan Kartu Keluarga">Penerbitan KK</option>
            <option value="Pembuatan Surat Pindah">Pembuatan Surat Pindah</option>
            <option value="pembuatan Surat Keterangan Catatan Kepolisian (SKCK)">pembuatan Surat Keterangan Catatan Kepolisian (SKCK)</option>
            <option value="Keterangan Domisili Tempat Tinggal">Keterangan Domisili Tempat Tinggal</option>
            <option value="Keterangan Domisili Tempat Usaha">Keterangan Domisili Tempat Usaha</option>
            <option value="Nikah, Talak, Cerai, Rujuk (NTCR)">Nikah, Talak, Cerai, Rujuk (NTCR)</option>
            <option value="Keterangan Kelahiran">Keterangan Kelahiran</option>
            <option value="Keterangan Kematian">Keterangan Kematian</option>
          </select>
        </div>

        {{ csrf_field() }}
        <p class="row justify-content-center">
          <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Ajukan Surat Pengantar
          </button>
        </p>
        <div class="collapse" id="collapseExample">
          <div class="card card-body">
            <p>Anda yakin untuk mengajukan surat? Surat tidak sah tanpa tanda tangan pengurus RT.</p>
            Perhatikan kembali alasan pengajuan Surat Pengantar. Teks diatas akan dicetak sebagai isi baris Maksud/Tujuan pada Surat Pengantar.
            <div class="row justify-content-center">
              <div class="col-auto">
                <button type="submit" class="btn btn-default btn-outline-success" formaction="/surat/preview" formmethod="post">Preview</button>
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-default btn-outline-primary" >Konfirmasi</button>
              </div>
            </div>
          </div>
        </div>
      </form>
</div>
@endsection
