<div class="container-fluid">
    <h3> <i class="fas fa-edit"></i> Edit Data Barang</h3>

    <?php foreach($barang as $brg) : ?>
        <form method="post" action="<?php echo base_url(). 'admin/data/update' ?>">

        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>">
        </div>

        <div class="form-group">
            <label for="">Detail</label>
            <input type="hidden" name="id" class="form-control" value="<?php echo $brg->id ?>">
            <input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
        </div>

        <div class="form-group">
            <label for="">Category</label>
            <input type="text" name="kategori" class="form-control" value="<?php echo $brg->kategori ?>">
        </div>

        <div class="form-group">
            <label for="">Price</label>
            <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
        </div>

        <div class="form-group">
            <label for="">Stock</label>
            <input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
        </div>

        <button type="submit" class="btn btn-primary btn-sm mt-3">Save</button>

        <?php endforeach?>
</div>