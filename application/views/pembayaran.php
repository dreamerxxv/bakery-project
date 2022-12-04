<div class="container-fluid">
    <div class="row">

        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php $grand_total = 0;
                if($keranjang = $this->cart->contents()){
                    foreach ($keranjang as $item){
                        $grand_total = $grand_total + $item['subtotal'];
                    }

                    echo "Total : Rp. ".number_format($grand_total, 0,',','.');
                ?>
            </div> <br><br>

            <h3>Input Address and Payments</h3>

            <form method="post" action="<?php echo base_url(). 'dashboard/proses_buy'; ?> ">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="nama" placeholder="your name" class="form-control">
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="alamat" placeholder="your address" class="form-control">
                </div>

                <div class="form-group">
                    <label>Cellphone</label>
                    <input type="text" name="no_telp" placeholder="your number" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nomor" class="col-form-label">Deliver</label>
                    <select select name="kategori" id="inputState" class="form-control">
                        <option value="">JNE</option>
                        <option value="">Si Cepat</option>
                        <option value="">J&T</option>
                        <option value="">Ninja Expres</option>
                        <option value="">Gojek</option>
                        <option value="">Grab</option>
                    </select>
                </div>

                <div class="form-group">
                    <label label for="nomor" class="col-form-label">Payments</label>
                    <select select name="kategori" id="inputState" class="form-control">
                        <option value="">Gopay</option>
                        <option value="">OVO</option>
                        <option value="">Dana</option>
                        <option value="">LinkAja</option>
                        <option value="">Transfer Bank</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary">Check Out</button>

            </form>

            <?php }else{
                echo "Your Cart is Empty"; 
                } ?>
        </div>
        <div class="col-md-2"></div>

    </div>
</div>