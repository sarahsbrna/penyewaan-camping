<div class="mb-3">
    <label for="nama_penyewa" class="form-label">Nama Penyewa</label>
    <input type="text" class="form-control" id="nama_penyewa" name="nama_penyewa" value="{{ $penyewaan->nama_penyewa ?? old('nama_penyewa') }}" required>
</div>

<div class="mb-3">
    <label for="nama_alat" class="form-label">Nama Alat</label>
    <input type="text" class="form-control" id="nama_alat" name="nama_alat" value="{{ $penyewaan->nama_alat ?? old('nama_alat') }}" required>
</div>

<div class="mb-3">
    <label for="tanggal_sewa" class="form-label">Tanggal Sewa</label>
    <input type="date" class="form-control" id="tanggal_sewa" name="tanggal_sewa" value="{{ $penyewaan->tanggal_sewa ?? old('tanggal_sewa') }}" required>
</div>

<div class="mb-3">
    <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
    <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" value="{{ $penyewaan->tanggal_kembali ?? old('tanggal_kembali') }}" required>
</div>

<div class="mb-3">
    <label for="jumlah_unit" class="form-label">Jumlah Unit</label>
    <input type="number" class="form-control" id="jumlah_unit" name="jumlah_unit" value="{{ $penyewaan->jumlah_unit ?? old('jumlah_unit') }}" required>
</div>

<div class="mb-3">
    <label for="harga_per_hari" class="form-label">Harga per Hari</label>
    <input type="number" class="form-control" id="harga_per_hari" name="harga_per_hari" value="{{ $penyewaan->harga_per_hari ?? old('harga_per_hari') }}" required>
</div>

<div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <select class="form-control" id="status" name="status" required>
        <option value="">Pilih Status</option>
        @foreach(['dipinjam', 'dikembalikan', 'terlambat'] as $status)
            <option value="{{ $status}}" @selected(old('status', $penyewaan->status ?? '') == $status)>{{ ucfirst($status) }}</option>
        @endforeach
    </select>
</div>