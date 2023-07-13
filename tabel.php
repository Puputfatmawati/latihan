
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Penjualan</title>
</head>
<body>
<div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Penjualan</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add.php">Input</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tabel.php">Tampil</a>
                    </li>
                </ul>
                </nav>
        </nav>
        
            <!-- As a heading -->
        <div class="card mt-3">
            <div class="card-header bg-primary">
                <h3 class="fs-7 fw-bold mt-3 text-center ">Tabel Buku</h3>
            </div>
        </div>

        
        <table class="table table-striped table-responsive">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                include 'koneksi.php';
                $dataku = mysqli_query($koneksi, "SELECT * FROM input");
                $no = 1;
                foreach ($dataku as $data) {
                    echo "<tr?>";
                    echo    "<td>".$no."</td>
                            <td>".$data['nama']."</td>
                            <td>".$data['alamat']."</td>
                            <td>".$data['nama_barang']."</td>
                            <td>".$data['harga']."</td>
                            <td>".$data['jumlah']."</td>
                            <td>".$data['total']."</td>
                            <td>
                                <a href='#'>edit</a>;
                                <a href='#'>Hapus</a>;
                            <td>";
                    echo "</tr>";
                    $no++;
                }

                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
