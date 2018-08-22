@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <a href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a>
      <table class="table table-bordered">
        <thead>
          <th>Name</th>
          <th>Email</th>
        </thead>
        <tbody>
          @foreach ($users as $key => $value)
          <tr>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>
@endsection
