<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#f4f6f9;">

<div class="container mt-5">

    <div class="card shadow p-4">

        <h2 class="mb-4">Edit Buku</h2>

        <form action="/update-buku/{{ $buku->id }}" method="POST">

            @csrf

            <div class="mb-3">
                <label>Judul Buku</label>

                <input type="text"
                name="judul"
                class="form-control"
                value="{{ $buku->judul }}"
                required>
            </div>

            <div class="mb-3">
                <label>Penulis</label>

                <input type="text"
                name="penulis"
                class="form-control"
                value="{{ $buku->penulis }}"
                required>
            </div>

            <div class="mb-3">
                <label>Tahun</label>

                <input type="number"
                name="tahun"
                class="form-control"
                value="{{ $buku->tahun }}"
                required>
            </div>

            <button type="submit" class="btn btn-primary">
                Update Buku
            </button>

            <a href="/buku" class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>

</div>

</body>
</html>