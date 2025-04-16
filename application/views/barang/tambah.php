<?php
$judul = "Form Tambah Data Barang";
$this->load->view('templates/header', ['judul' => $judul]);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header text-bg-light">
                    <h5 class="card-title mb-0">Form Tambah Data Barang</h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('barang/tambah'); ?>" method="post">
                        <div class="mb-3">
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <input type="text" name="nama_barang" id="nama_barang" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="number" name="stok" id="stok" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                        <a href="<?= base_url('barang'); ?>" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>
