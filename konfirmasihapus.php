<!-- Tabel Data -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <a href="tambahrenungan.php" class="btn btn-primary">Tambah Data</a>
        <form class="form-inline" method="POST" action="">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" name="search" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Ayat Alkitab</th>
                        <th>Tanggal</th>
                        <th>Isi Renungan</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>
                <?php 
                include('../koneksi.php');
                $i = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM renungan");
                while($d = mysqli_fetch_array($data)) {
                ?>
                <tbody>
                    <tr>
                        <td> <?php echo $i++; ?> </td>
                        <td> <?php echo $d['id_renungan']; ?> </td>
                        <td> <?php echo $d['judul']; ?> </td>
                        <td> <?php echo $d['ayat']; ?> </td>
                        <td> <?php echo $d['tanggal']; ?> </td>
                        <td> <?php echo $d['isi']; ?> </td>
                        <td class='text-center' width='100'>
                            <a href='renungan_edit.php?kode=<?php echo $d['id_renungan']; ?>' class='btn btn-success'>Edit</a>
                        </td>
                        <td class='text-center' width='100'>
                            <!-- Tombol untuk membuka modal konfirmasi -->
                            <button class='btn btn-danger' onclick="showDeleteModal('<?php echo $d['id_renungan']; ?>')">Hapus</button>
                        </td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a id="confirmDeleteBtn" href="#" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript untuk Modal Hapus -->
<script>
    function showDeleteModal(id) {
        // Set URL dengan ID data untuk dihapus
        document.getElementById('confirmDeleteBtn').href = 'Hapus_renungan.php?kode=' + id;
        
        // Tampilkan modal
        $('#deleteModal').modal('show');
    }
</script>