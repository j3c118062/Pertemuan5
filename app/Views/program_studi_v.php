<section>
        <div class="container">
            <h2>Program Studi</h2>
            <p>
            <a href="" class="btn btn-Primary btn-sm">
                <i class="fa fa-plus"></i> Tambah
            </a>
            </p>
            <table class="table table-striped table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Aksi</th>
                        <th>Kode</th>
                        <th>Program Studi</th>
                        <th>Kode</th>
                    </tr>
                </thead>
                <tbody>
                
                <?php foreach ($dataProdi as $row) ; ?>
                    <tr>
                        <th>
                            <a href="" class="btn btn-warning btn-sm">
                            <i class="fa fa-pencil"></a>Ubah
                            </a>
                            <a href="" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></a>Hapus
                            </a>
                        </th>
                        <td><?php echo $row->kode_prodi; ?></td>
                        <td>Manajemen Informatika</td>
                        <td>Sofi Indriasari</td>
                    </tr>
                <?php endforeach; ?>

                </tbody>
            
            </table>
        </div>
    </section>