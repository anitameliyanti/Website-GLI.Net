@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Produk</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Tambah Produk</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Tempat Tinggal</th>
                <th>Layanan</th>
                <th>Masa Berlaku</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->nama }}</td>
                <td>{{ $product->tempat_tinggal }}</td>
                <td>{{ $product->layanan }}</td>
                <td>{{ $product->masa_berlaku }}</td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection