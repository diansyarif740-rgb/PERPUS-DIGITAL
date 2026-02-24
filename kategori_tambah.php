<div class="container-fluid">
    <!-- page heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Kategori</h1>

            <form action="" method="POST">

                <?php
                if (isset($_POST['simpan'])) {
                    $kategori =strtolower($_POST['kategori']);
                    $cek =mysqli_query($koneksi, "SELECT * FROM kategori WHERE LOWER(kategori)='$kategori'");
                    $check = mysqli_num_rows($cek);
                    if ($check > 0) {
                        echo "Data yang dimasukan sama";
                    }else{
                    $query = mysqli_query($koneksi, 
                    "INSERT INTO kategori (kategori) VALUES ('$kategori')");
                       if ($query) {
                                echo '<script>alert("Data Berhasil Ditambah"); location.href="index.php?page=kategori";</script>';
                              } else {                       
                            echo '<script<"Tambah data berhasil"); </script';
                          }
                        }
                    }
                
                ?>

                <!-- Form Group -->
                <div class="form-group row align-items-center">
    <label class="col-sm-4 col-form-label text-right">kategor</label>
    <div class="col-sm-5">
        <input type="text" name="kategori" class="form-control" placeholder="Masukkan nama kategori" required>
    </div>
</div>
                <!-- Button Area -->
                <div class="form-group row">
    <div class="col-sm-5 offset-sm-4 d-flex">
        <button type="submit" name="simpan" class="btn btn-primary mr-2">
            Simpan
        </button>

        <button type="reset" class="btn btn-secondary mr-2">
            Reset
        </button>

        <a href="?page=kategori" class="btn btn-danger">
            Kembali
        </a>
    </div>
</div>
 