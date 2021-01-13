<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Produits Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('produit/add'); ?>" class="btn btn-success btn-sm">Nouveau produit</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Pro Id</th>
						<th>Categorie Sid</th>
						<th>Designation</th>
						<th>NatureProduit</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($produits as $p){ ?>
                    <tr>
						<td><?php echo $p['pro_id']; ?></td>
						<td><?php echo $p['categorie_sid']; ?></td>
						<td><?php echo $p['designation']; ?></td>
						<td><?php echo $p['natureProduit']; ?></td>
						<td>
                            <a href="<?php echo site_url('produit/edit/'.$p['pro_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('produit/remove/'.$p['pro_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
