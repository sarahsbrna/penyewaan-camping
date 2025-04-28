@extends('layouts.app')

@section('content')
    <div class="container">
       <h1>Riwayat Penyewaan Dihapus</h1>

        <a href="{{ route('penyewaan.index') }}" class="btn btn-primary">Kembali ke Daftar Penyewaan</a>

        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Penyewa</th>
                    <th>Nama Alat</th>
                    <th>Tanggal Sewa</th>
                    <th>Tanggal Kembali</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($penyewaans as $p)
                <tr>
                    <td>{{ $p->nama_penyewa }}</td>
                    <td>{{ $p->nama_alat }}</td>
                    <td>{{ $p->tanggal_sewa }}</td>
                    <td>{{ $p->tanggal_kembali }}</td>
                    <td>
                        <a href="{{ route('penyewaan.restore', $p->id) }}" class="btn btn-success">Restore</a>
                    </td>
                    @endforeach
                </tbody>
            </table>

            <div class="d-flex justify-content-end">
                {{ $penyewaans->links() }}
            </div>
    </div>
@endsection  
