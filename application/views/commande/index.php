<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Commandes Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('commande/add'); ?>" class="btn btn-success btn-sm">Nouvelle commande</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Com Id</th>
						<th>Abonne Sid</th>
						<th>Produit Sid</th>
						<th>Zone Sid</th>
						<th>Charroi Sid</th>
						<th>NumRef</th>
						<th>DateCom</th>
						<th>QteCom</th>
						<th>Observation</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($commandes as $c){ ?>
                    <tr>
						<td><?php echo $c['com_id']; ?></td>
						<td><?php echo $c['abonne_sid']; ?></td>
						<td><?php echo $c['produit_sid']; ?></td>
						<td><?php echo $c['zone_sid']; ?></td>
						<td><?php echo $c['charroi_sid']; ?></td>
						<td><?php echo $c['numRef']; ?></td>
						<td><?php echo $c['dateCom']; ?></td>
						<td><?php echo $c['qteCom']; ?></td>
						<td><?php echo $c['observation']; ?></td>
						<td>
                            <a href="<?php echo site_url('commande/edit/'.$c['com_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('commande/remove/'.$c['com_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
