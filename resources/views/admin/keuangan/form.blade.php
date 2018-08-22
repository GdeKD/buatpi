@extends('layouts.dashboard')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <br>
        <div class="card-body">
          <h3 class="card-title text-center">Laporan Keuangan</h3>
          <hr>
          <p class="card-subtitle text-center">Form Unggah Laporan Keuangan RT.</p>
          <div class="row justify-content-center">
            @if (session('msg'))
            <div class="alert alert-success">
              {{ session('msg') }}
            </div>
            @elseif (session('redmsg'))
            <div class="alert alert-danger">
              {{session('redmsg')}}
            </div>
            @endif

            <!-- <a href="{{ asset('storage/merdeka!!_180801_0028.jpg') }} " target="_blank"> liat foto</a> -->
          </div>

          <!-- <div class="row justify-content-center"> -->
          @if (count($errors)>0)
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>
                {{ $error }}
              </li>
              @endforeach
            </ul>
          </div>
          @endif
            <form class="" action="/admin/keuangan/upload" method="post" enctype="multipart/form-data">
              <div class="form-group">
                Laporan Tahun :
                <input type="text" name="tahun" class="form-control" placeholder="" value="{{$tahun}}" readonly>
              </div>
              <div class="form-group">
                Periode :
                <select class="form-control" name="periode">
                  <option value="Triwulan 1 Jan-Mar">Triwulan 1, Jan-Mar</option>
                  <option value="Triwulan 2 Apr-Jun">Triwulan 2, Apr-Jun</option>
                  <option value="Triwulan 3 Jul-Sep">Triwulan 3, Jul-Sep</option>
                  <option value="Triwulan 4 Okt-Des">Triwulan 4, Okt-Des</option>
                </select>
              </div>
              {{ csrf_field() }}
              <!-- <div class="form-group"> -->
              Files : <br>
              <!-- <label for="files">Files :</label><br> -->
              <input class="form-control-file" type="file" name="file">
              <!-- </div> -->
              <div class="form-group">
                keterangan :
                <textarea id="WYSIWYG" name="keterangan" class="form-control" rows="6" cols="80" placeholder="(optional)">{{old('keterangan')}}</textarea>
              </div>
              <button type="submit" class="btn btn-default btn-block btn-outline-success active">unggah Laporan</button>
            </form>
          <!-- </div> -->

        </div>
      </div>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card card-body"><br>
        <h3 class="card-title text-center">Daftar berkas laporan</h3><hr>
        @if (session('list-msg'))
        <div class="alert alert-success">
          {{ session('list-msg') }}
        </div>
        @elseif (session('list-redmsg'))
        <div class="alert alert-danger">
          {{session('list-redmsg')}}
        </div>
        @endif

        <div class="row justify-content-center">
          <table class="table table-hover" style="width: 80%;">
            <caption>Daftar laporan keuangan</caption>
            <tr class="text-center">
              <th>Nama Laporan</th>
              <th>Filepath</th>
              <th>Keterangan</th>
            </tr>
            @foreach ($list as $daftar)
            <tbody>
              <tr>
                <td>{{$daftar->judul}}</a></td>
                <td>{{$daftar->filepath}}</td>
                <td>{!!$daftar->keterangan!!}</td>
                <td>
                </td>
                <td>
                  <form class="" action="/admin/keuangan/{{$daftar->id}}" method="post">
                    {{ csrf_field() }}

                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-outline-danger btn-sm active">delete</button>
                  </form>
                </td>
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
@endsection
