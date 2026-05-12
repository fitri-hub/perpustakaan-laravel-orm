<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

    <style>
        body{
            background-color:#f4f6f9;
        }

        .sidebar{
            width:250px;
            height:100vh;
            background:#0d1b2a;
            position:fixed;
            color:white;
            padding:20px;
        }

        .sidebar h2{
            margin-bottom:40px;
        }

        .sidebar a{
            display:block;
            color:white;
            text-decoration:none;
            padding:12px;
            margin-bottom:10px;
            border-radius:10px;
            transition:0.3s;
        }

        .sidebar a:hover{
            background:#1b263b;
        }
        .sidebar .active{
            background:#1b263b;
        }

        .content{
            margin-left:270px;
            padding:30px;
        }

        .card-box{
            background:white;
            padding:25px;
            border-radius:15px;
            box-shadow:0 2px 10px rgba(0,0,0,0.1);
        }

        .table thead{
            background:#0d6efd;
            color:white;
        }

        .navbar-custom{
            background:white;
            padding:15px 30px;
            border-radius:15px;
            margin-bottom:20px;
            box-shadow:0 2px 10px rgba(0,0,0,0.1);
        }

        .btn-custom{
            border-radius:10px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">

        <h2>
            <i class="fa-solid fa-book"></i>
            Perpustakaan
        </h2>

        <a href="/buku">
            <i class="fa-solid fa-house"></i>
            Dashboard
        </a>

        <a href="/buku" class="active">
            <i class="fa-solid fa-book-open"></i>
            Data Buku
        </a>

        <a href="#">
            <i class="fa-solid fa-users"></i>
            Anggota
        </a>

        <a href="#">
            <i class="fa-solid fa-circle-info"></i>
            Tentang
        </a>

    </div>

    <!-- Content -->
    <div class="content">

        <!-- Navbar -->
        <div class="navbar-custom d-flex justify-content-between align-items-center">

            <h3>Dashboard Perpustakaan</h3>

            <!-- Tombol Tambah -->
            <a href="/tambah-buku" class="btn btn-primary btn-custom">
                <i class="fa-solid fa-plus"></i>
                Tambah Buku
            </a>

        </div>

        <!-- Card -->
        <div class="card-box">

            <div class="d-flex justify-content-between mb-3">

                <h4>Daftar Buku</h4>

                <input type="text"
                class="form-control w-25"
                placeholder="Cari buku...">

            </div>

            <table class="table table-bordered table-hover">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Tahun</th>
                        <th width="120">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($dataBuku as $buku)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $buku->judul }}</td>

                        <td>{{ $buku->penulis }}</td>

                        <td>{{ $buku->tahun }}</td>

                        <td>

                            <!-- Tombol Edit -->
                            <a href="/edit-buku/{{ $buku->id }}"
                            class="btn btn-warning btn-sm">

                                <i class="fa-solid fa-pen"></i>

                            </a>

                            <!-- Tombol Hapus -->
                            <a href="/hapus-buku/{{ $buku->id }}"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus buku ini?')">

                                <i class="fa-solid fa-trash"></i>

                            </a>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</body>
</html>