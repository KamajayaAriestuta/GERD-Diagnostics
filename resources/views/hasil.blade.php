@extends('index')

@section('title', 'Hasil Diagnosis')
@section ('content')
<table class="table table-striped">
    <tbody>
      <tr>
        <td>Nama</td>
        <td>{{ $data->nama }}</td>
      </tr>
      <tr>
        <td>Usia</td>
        <td>{{ $data->umur }}</td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>{{ $data->kelamin }}</td>
      </tr>
      <tr>
        <td>Hasil Diagnosis</td>
        <td>{{ $data->hasil_diagnosis }}</td>
      </tr>
      <tr>
        <td>Nilai CF Gerd Akut</td>
        <td>{{ $data->GERD_akut }}</td>
      </tr>
      <tr>
        <td>Nilai CF Gerd Kronis</td>
        <td>{{ $data->GERD_kronis }}</td>
      </tr>
    </tbody>
  </table>
@endsection