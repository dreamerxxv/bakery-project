<div class="container-fluid">
    <div class="row">

    <?php foreach ($doughnuts as $brg) : ?>
        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <img src="<?= base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top mb-2" alt="">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase">
                                                <?= $brg->nama_brg?></div>
                                                <small><?= $brg->keterangan?></small>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= $brg->harga?>
                                                <?php echo anchor('dashboard/keranjang/'.$brg->id, '<button class="btn btn-info" type="button">
                                                   <i class="fas fa-dollar-sign fa-1x text-primary-300"></i>
                                                </button>') ?> 
                                                <?php echo anchor('dashboard/detail/'.$brg->id, '<button class="btn btn-info" type="button">
                                                <i class="fas fa-edit fa-1x text-primary-300"></i>
                                             </button>') ?>
                                        </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

    <?php endforeach?>
    </div>
</div>