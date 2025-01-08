@extends('layouts.app')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

<div class="container">
    <!-- Tampilkan Pesan Sukses -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Data Pelanggan</h1>
        <a href="{{ route('dashboard') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Tambah Pelanggan
        </a>
    </div>

    <!-- Statistik dan Pencarian -->
    <div class="row mb-4">
        <div class="col-md-3 col-6 mb-3">
            <div class="card text-center shadow border-0" style="border-radius: 10px; background-color: #007bff; color: #fff;">
                <div class="card-body">
                    <h5 class="card-title d-flex align-items-center justify-content-center">
                        <i class="bi bi-people me-2"></i> Total Pelanggan
                    </h5>
                    <p class="card-text display-6">{{ $products->count() }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-3">
            <div class="card text-center shadow border-0" style="border-radius: 10px; background-color: #28a745; color: #fff;">
                <div class="card-body">
                    <h5 class="card-title d-flex align-items-center justify-content-center">
                        <i class="bi bi-person-check me-2"></i> Pelanggan Aktif
                    </h5>
                    <p class="card-text display-6">{{ $products->where('masa_habis', '>', now())->count() }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-3">
            <div class="card text-center shadow border-0" style="border-radius: 10px; background-color: #dc3545; color: #fff;">
                <div class="card-body">
                    <h5 class="card-title d-flex align-items-center justify-content-center">
                        <i class="bi bi-person-x me-2"></i> Kadaluarsa
                    </h5>
                    <p class="card-text display-6">{{ $products->where('masa_habis', '<=', now())->count() }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-12">
            <div class="card border-0 shadow" style="border-radius: 10px;">
                <div class="card-body">
                    <h5 class="card-title mb-3">Cari Pelanggan</h5>
                    <form action="{{ route('products.index') }}" method="GET">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Cari nama pelanggan..." value="{{ request('search') }}">
                            <button class="btn btn-primary" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabel Data Pelanggan -->
    @if ($products->isEmpty())
        <div class="alert alert-warning text-center">
            Tidak ada data pelanggan. Tambahkan data melalui halaman lain.
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Tempat Tinggal</th>
                        <th scope="col">Layanan</th>
                        <th scope="col">Masa Berlaku</th>
                        <th scope="col">Masa Habis</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->nama }}</td>
                        <td>{{ $product->tempat_tinggal }}</td>
                        <td>{{ $product->layanan }}</td>
                        <td>{{ \Carbon\Carbon::parse($product->masa_berlaku)->format('d M Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($product->masa_habis)->format('d M Y') }}</td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm me-2">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
