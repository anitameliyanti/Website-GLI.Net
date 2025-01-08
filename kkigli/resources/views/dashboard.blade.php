<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
    <a href="{{ route('home') }}" class="btn btn-secondary mb-4">
    <i class="bi bi-arrow-left"></i> Back to Home
</a>

        <!-- Form Tambah Produk -->
        <div class="card mb-4">
            <div class="card-header">Tambah Data Pelanggan</div>
            <div class="card-body">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="tempat_tinggal" class="form-label">Tempat Tinggal</label>
                        <input type="text" name="tempat_tinggal" id="tempat_tinggal" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="layanan" class="form-label">Layanan</label>
                        <select name="layanan" id="layanan" class="form-control" required>
                            <option value="" disabled selected>Pilih Layanan</option>
                            <option value="INTERMEDIATE">INTERMEDIATE</option>
                            <option value="BISNIS">BISNIS</option>
                            <option value="PRO">PRO</option>
                            <option value="PLATINUM">PLATINUM</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="masa_berlaku" class="form-label">Masa Berlaku</label>
                        <input type="date" name="masa_berlaku" id="masa_berlaku" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="masa_habis" class="form-label">Masa Habis</label>
                        <input type="date" name="masa_habis" id="masa_habis" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
