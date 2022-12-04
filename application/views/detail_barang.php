<div class="container-fluid">

    <div class="card">
        <h5 class="card-header">Detail Product</h5>
        <div class="card-body">

            <?php foreach ($barang as $brg) : ?>
                
               <div class="row">
                   <div class="col-md-4">
                       <img src="<?php echo base_url().'/uploads/'.$brg->gambar?>" alt="" class="card-img-top">
                   </div>
                             
                   <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <td>Product Name</td>
                            <td><strong><?php echo $brg->nama_brg ?></strong></td>
                            <td>Detail</td>
                            <td><strong><?php echo $brg->keterangan ?></strong></td>
                            <td>Category</td>
                            <td><strong><?php echo $brg->kategori ?></strong></td>
                            <td>Stock</td>
                            <td><strong><?php echo $brg->stok ?></strong></td>
                            <td>Price</td>
                            <td><strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format($brg->harga)?></div></strong></td>
                        </tr>
                    </table>

                    <?php echo anchor('dashboard/keranjang/'.$brg->id, '<button class="btn btn-info" type="button">
                                                   <i class="fas fa-dollar-sign fa-1x text-primary-300"></i>
                                                </button>') ?> 
                    <?php echo anchor('dashboard/index/', '<button class="btn btn-dander" type="button">
                                                   Back
                                                </button>') ?> 
                   </div>

                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>