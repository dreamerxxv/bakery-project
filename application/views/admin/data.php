<div class="container-fluid">
<button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-3" id="btn" data-bs-toggle="modal" data-bs-target="#tambah_barang"><i class="fas fa-download fa-plus"></i> Tambah Barang</button>

<table class="table table-bordered">
    <tr>
        <th>NO</th>
        <th>Name</th>
        <th>Detail</th>
        <th>Category</th>
        <th>Price</th>
        <th>Stock</th>
        <th colspan="4">Action</th>
    </tr>

    <?php $no = 1; foreach ($barang as $brg) : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $brg->nama_brg ?></td>
            <td><?= $brg->keterangan ?></td>
            <td><?= $brg->kategori ?></td>
            <td>Rp. <?= $brg->harga ?></td>
            <td><?= $brg->stok ?></td>
            <td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td>
            <td><?php echo anchor('admin/data/edit/' .$brg->id, '<div class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
            <td><?php echo anchor('admin/data/hapus/' .$brg->id, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
        </tr>
    <?php endforeach?>
</table>
</div>

<div class="modal fade" id="tambah_barang" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
      </div>
      <div class="modal-body">

      <table class="table table-bordered table-striped">
      <form method="post" action="<?php echo base_url(). 'admin/data/tambah_aksi'; ?>" enctype="multipart/form-data">

      <div class="form-row">
      <div class="form-group col-md-4">
            <label for="nomor" class="col-form-label">Name</label>
            <input type="text" class="form-control" id="progress" name="nama_brg">
        </div>

        <div class="form-group col-md-4">
            <label for="nomor" class="col-form-label">Detail</label>
            <input type="text" class="form-control" id="progress" name="keterangan">
        </div>

        <div class="form-group col-md-4">
            <label for="nomor" class="col-form-label">Category</label>
            <select name="kategori" id="inputState" class="form-control">
                <option value="bread">Bread</option>
                <option value="pastry">Pastry</option>
                <option value="cookies">Cookies</option>
                <option value="doughnuts">Doughnuts</option>
                <option value="pudding">Pudding</option>
            </select>
        </div>

        <div class="form-group col-md-4">
            <label for="nomor" class="col-form-label">Price</label>
            <input type="text" class="form-control" id="progress" name="harga">
        </div>

        <div class="form-group col-md-4">
            <label for="nomor" class="col-form-label">Stock</label>
            <input type="text" class="form-control" id="progress" name="stok">
        </div>
        
        <div class="form-group col-md-4">
            <label for="nomor" class="col-form-file">Picture of Product</label>
            <input type="file" class="form-control" id="progress" name="gambar" size="20">
        </div>

        <div class="modal-footer">
          <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-info">Simpan</button>
        </div>
      </div>
    </form>
      </table>
        

      </div>
    </div>
  </div>

  <!-- JavaScript Bundle with Popper -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
