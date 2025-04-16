<?php $this->load->view('templates/header', ['judul' => 'Barang Keluar']); ?>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header text-bg-light">
                    <h5 class="card-title mb-0">Form Barang Keluar</h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('barang/tambah_keluar'); ?>" method="post">
                        <div class="mb-3">
                            <label for="id_barang" class="form-label">Pilih Barang</label>
                            <select name="id_barang" id="id_barang" class="form-select select2" required>
                                <option value="">-- Pilih Barang --</option>
                                <?php foreach ($barang as $b) : ?>
                                    <option value="<?= $b->id; ?>">
                                        <?= $b->nama_barang; ?> (Stok: <?= $b->stok; ?>)
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah Keluar</label>
                            <input type="number" name="jumlah" id="jumlah" class="form-control" min="1" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="<?= base_url('barang'); ?>" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




