@extends('master')
@section('konten')
<body>
    <div class="container mt-6">
        <br>
        {{-- @if(isset($data))
            <h2 class="mb-4">Update Barang</h2>
            <form action="{{ route('editdata', $data->id) }}" method="post" enctype="multipart/form-data">
            @method('POST')
        @else
            <h2 class="mb-4">Tambah Barang</h2>
            <form action="{{ route('insertBarang') }}" method="post" enctype="multipart/form-data">
        @endif --}}

        <form action="{{ route('insertBarang') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama">Nama Barang</label>
                    <input type="text" class="form-control" id="NamaBarang" name="NamaBarang" value="{{ $data->NamaBarang ?? old('NamaBarang') }}" placeholder="Nama Barang">
                </div>

                <div class="form-group">
                    <label for="Satuan">Satuan</label>
                    <select class="form-control" id="Satuan" name="Satuan">
                        <option selected="">Pilih satuan</option>
                        <option value="Pcs" {{ ($data->Satuan ?? old('Satuan')) == 'Pcs' ? 'selected' : '' }}>Pcs</option>
                        <option value="Dus" {{ ($data->Satuan ?? old('Satuan')) == 'Dus' ? 'selected' : '' }}>Dus</option>
                        <option value="Bungkus" {{ ($data->Satuan ?? old('Satuan')) == 'Bungkus' ? 'selected' : '' }}>Bungkus</option>
                        <option value="Lusin" {{ ($data->Satuan ?? old('Satuan')) == 'Lusin' ? 'selected' : '' }}>Lusin</option>                        
                    </select>
                </div>

                <div class="form-group">
                    <label for="HargaSatuan">Harga Satuan</label>
                    <input type="text" class="form-control" id="HargaSatuan" name="HargaSatuan" value="{{ $data->HargaSatuan ?? old('HargaSatuan') }}" placeholder="Harga Satuan">

                <div class="form-group">
                    <label for="Stok">Stok</label>
                    <input type="text" class="form-control" id="Stok" name="Stok" value="{{ $data->Stok ?? old('Stok') }}" placeholder="Stok">

                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </div>
            
        </form>
        {{-- <a type="submit" href="{{ route('riwayat-pekerjaan') }}" class="btn btn-secondary mt-3">Prev</a> --}}

    </div>

    <!-- Bootstrap JS, jQuery, Popper.js, etc. scripts -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('#formTambahPengangguran');
        if (form) {
            // Simpan data form saat halaman dimuat
            const formData = new FormData(form);
            formData.forEach((value, key) => {
                sessionStorage.setItem(key, value);
            });
        }
    });
</script>


</body>
@endsection