<div class="container-fluid">
    <h4>Invoice Product</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>ID</th>
            <th>Costumer Name</th>
            <th>Address</th>
            <th>Date</th>
            <th>Date Line</th>
            <th>Action</th>
        </tr>

        <?php foreach ($invoice as $inv) : ?>
            <tr>
                <td><?php echo $inv->id ?></td>
                <td><?php echo $inv->nama ?></td>
                <td><?php echo $inv->alamat ?></td>
                <td><?php echo $inv->tgl_pesan ?></td>
                <td><?php echo $inv->batas_bayar ?></td>
                <td><?php echo anchor('admin/invoice/detail/'.$inv->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
            </tr>
        <?php endforeach; ?>    
    </table>
</div>