
@extends('admin.layouts.App')
@section('container')
<center>
    <h1 style="font-family: Abhaya Libre ExtraBold">Data Konsultasi Pasien</h1><hr>
</center>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Email</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Usia</th>
                                    <th scope="col">Berat Badan</th>
                                    <th scope="col">Tinggibadan</th>
                                    <th scope="col">Golongan darah</th>
                                    <th scope="col">keluhan</th>
                                    <th scope="col">Solusi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($consultations as $consultation)
                                <tr>
                                    <td>{{ $consultation->username}}</td>
                                    <td>{{ $consultation->jenis_kelamin }}</td>
                                    <td>{{ $consultation->usia}}</td>
                                    <td>{{ $consultation->berat_badan}}</td>
                                    <td>{{ $consultation->tinggi_badan}}</td>
                                    <td>{{ $consultation->gol_darah}}</td>
                                    <td>{{ $consultation->keluhan}}</td>
                                    <td>{{ $consultation->solusi}}</td>
                                    <!-- <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('consultation.destroy', $consultation->id) }}" method="POST">
                                            <a href="{{ route('consultation.edit', $consultation->id) }}" class="btn btn-sm btn-primary">Beri Jawaban</a>
                                             @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button> -->
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    Data saran belum Tersedia.
                                </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $consultations ->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection