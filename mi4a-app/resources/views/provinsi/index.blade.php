@extends('layout.master')
@section('judul_halaman', 'Halaman Provinsi')

@section('content')
    <h2>Provinsi</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Provinsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($provinsi as $item)
            <tr>
                <td>{{ $item['nama_provinsi'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection