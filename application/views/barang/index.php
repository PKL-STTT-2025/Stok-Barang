<div class="container mt-4">
    <h2>Data Stok Barang</h2>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Satuan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($barang as $b): ?>
                <tr>
                    <td><?= $b->nama_barang ?></td>
                    <td><?= $b->stok ?></td>
                    <td><?= $b->satuan ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <h5 class="mt-4">Tambah Barang Baru</h5>
    <form action="<?= base_url('barang/tambah_barang'); ?>" method="post">
        <input type="text" name="nama_barang" class="form-control mb-2" placeholder="Nama Barang" required>
        <input type="number" name="stok" class="form-control mb-2" placeholder="Stok Awal" min="0" required>
        <input type="text" name="satuan" class="form-control mb-2" placeholder="Satuan (pcs, box, dll)" required>
        <button type="submit" class="btn btn-info">Tambah Barang Baru</button>
    </form>

    <hr>
    <h4>Tambah Barang Keluar</h4>
    <form action="<?= base_url('barang/tambah_keluar') ?>" method="post" class="form-inline">
        <select name="id_barang" class="form-control mr-2">
            <?php foreach ($barang as $b): ?>
                <option value="<?= $b->id ?>"><?= $b->nama_barang ?></option>
            <?php endforeach; ?>
        </select>
        <input type="number" name="jumlah" class="form-control mr-2" placeholder="Jumlah">
        <button type="submit" class="btn btn-danger">Tambah Keluar</button>
    </form>
</div>
 





    

