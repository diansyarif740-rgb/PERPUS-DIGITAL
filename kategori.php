<div class="w-100">
    <h1 class="mt-4">Kategori Buku</h1>

    <div class="mb-3 clearfix">
        <a href="?page=kategori_tambah" class="btn btn-primary">Tambah Data</a>
    </div>

    <div class="clearfix">
        <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM kategori");
                while ($d = mysqli_fetch_array($data)) :
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['kategori']; ?></td> <td>
                        <a href="?page=kategori_edit&id=<?php echo $d['id_kategori']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="?page=kategori_hapus&id=<?php echo $d['id_kategori']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table> 
                </div>
</div>