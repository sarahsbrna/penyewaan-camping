@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Welcome to Camping Booking</h1>
    <h1>Daftar Penyewaan</h1>

    <a href="{{ route('penyewaan.create') }}" class="btn btn-primary">Tambah Penyewaan</a>
    <a  href="{{ route('penyewaan.trash') }}" class="btn btn-primary">Riwayat Penyewaan Dihapus</a>

    @if(@session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Penyewa</th>
                <th>Nama Alat</th>
                <th>Tanggal Sewa</th>
                <th>Tanggal Kembali</th>
                <th>Jumlah Unit</th>
                <th>Harga per Hari</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penyewaans as $penyewaan)
            <tr>
                <td>{{ $penyewaan->nama_penyewa }}</td>
                <td>{{ $penyewaan->nama_alat }}</td>
                <td>{{ $penyewaan->tanggal_sewa }}</td>
                <td>{{ $penyewaan->tanggal_kembali }}</td>
                <td>{{ $penyewaan->jumlah_unit }}</td>
                <td>{{ number_format($penyewaan->harga_per_hari, 0, ',', '.') }}</td>
                <td>{{ ucfirst($penyewaan->status) }}</td>
                <td>
                    <a href="{{ route('penyewaan.edit', $penyewaan->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('penyewaan.destroy', $penyewaan->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach  
        </tbody>
    </table>

    <div class="d-flex justify-content-end">
        {{ $penyewaans->links() }}
    </div>
</div>
@endsection