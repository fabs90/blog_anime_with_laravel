@extends('layout')
@section('title', 'Kelas')

@section('konten')
<div class="container">
    <div class="row text-center">
            <h1 class="pt-5">List Kelas</h1>
            <h3 class="mb-2">Mencoba Database Seeding</h3>

            <table class="mt-2">
                <tr>
                    <th>No</th>
                    <th>Kelas</th>
                    <th>jurusan</th>
                </tr>
                <tbody>
                    @foreach ($kelas as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$data['kelas']}}</td>
                            <td>{{$data['jurusan']}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>
    @endsection