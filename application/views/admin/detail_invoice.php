<div class="container-fluid">
    <h4>Detaiil Pesanan <div class="btn btn-sm btn-success">Nomor Invoice <?php echo $invoice->id ?></div></h4>

    <table class="table tabkle-bordered table-hover table-stripped">
        <tr>
            <th>NO</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price per Each</th>
            <th>Total</th>
        </tr>

        <?php 
        $total = 0;
        foreach ($pesanan as $psn) :
            $subtotal = $psn->jumlah * $psn->harga;
            $total += $subtotal;
        ?>

        <tr>
            <td><?php echo $psn->id_brg?></td>
            <td><?php echo $psn->nama_brg?></td>
            <td><?php echo $psn->jumlah?></td>
            <td><?php echo $psn->harga?></td>
            <td><?php echo number_format($subtotal)?></td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td colspan="4" align="right">Grand Total</td>
            <td align="right">Rp. <?php echo number_format($total, 0,',','.')?></td>
        </tr>
    </table>

    <a href="<?php echo base_url('admin/invoice/index')?>"><div class="btn btn-dm btn-primary">Back</div></a>
</div>