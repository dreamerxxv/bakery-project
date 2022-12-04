<div class="container-fluid">
    <h4>Cart</h4>

    <table class="table table-bordered table-stripped table-hover">
        <tr>
            <th>NO</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
        </tr>

        <?php $no=1; foreach ($this->cart->contents() as $items) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $items['name']; ?></td>
                <td><?php echo $items['qty']; ?></td>
                <td>Rp. <?php echo number_format($items['price'], 0,',','.') ?></td>
                <td>Rp. <?php echo number_format($items['subtotal'], 0,',','.') ?></td>
            </tr>
        <?php endforeach; ?>

            <tr>
                <td colspan="4"></td>
                <td align="right">Rp. <?php echo number_format($this->cart->total(), 0,',','.') ?></td>
            </tr>
    </table>

    <div>
        <a href="<?php echo base_url('dashboard/hapus_cart') ?>"><div class="btn btn-sm btn-danger">Delete</div></a>
        <a href="<?php echo base_url('dashboard/pembayaran') ?>"><div class="btn btn-sm btn-success">Buy</div></a>
        <a href="<?php echo base_url('dashboard/index') ?>"><div class="btn btn-sm btn-primary">Shopping</div></a>
    </div>
</div>