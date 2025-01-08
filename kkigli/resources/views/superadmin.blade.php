@extends('layouts.app')

@section('content')
    <!-- Menambahkan link untuk Bootstrap Icons langsung di sini -->
    <head>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    </head>

    <div class="container">
        <h1 class="h3 mb-4 text-center">Super Admin Dashboard</h1>
        <div class="row justify-content-center">
            <!-- Card untuk Pengguna -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0" style="border-radius: 10px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">
                            <i class="bi bi-person-lines-fill me-2"></i> Total Pengguna
                        </h5>
                        <p class="display-6">{{ $users->count() }}</p>
                        <!-- Tombol untuk bergulir ke tabel pengguna -->
                        <a href="#users-table" class="btn btn-primary rounded-pill px-4 py-2">
                            <i class="bi bi-eye me-2"></i> Lihat Pengguna
                        </a>
                    </div>
                </div>
            </div>
            <!-- Card untuk Pelanggan -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0" style="border-radius: 10px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">
                            <i class="bi bi-person-check-fill me-2"></i> Total Pelanggan
                        </h5>
                        <p class="display-6">{{ $products->count() }}</p>
                        <!-- Tombol untuk bergulir ke tabel pelanggan -->
                        <a href="#products-table" class="btn btn-success rounded-pill px-4 py-2">
                            <i class="bi bi-eye me-2"></i> Lihat Pelanggan
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel Daftar Pengguna -->
        <div class="card mt-4" id="users-table" style="border-radius: 10px;">
            <div class="card-body">
                <h5 class="card-title mb-4">Daftar Pengguna</h5>
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash-fill"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Tabel Daftar Pelanggan -->
        <div class="card mt-4" id="products-table" style="border-radius: 10px;">
            <div class="card-body">
                <h5 class="card-title mb-4">Daftar Pelanggan</h5>
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
                                <td>{{ $product->masa_berlaku }}</td>
                                <td>{{ $product->masa_habis }}</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash-fill"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
