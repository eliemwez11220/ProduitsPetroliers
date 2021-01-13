<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Abonnes Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('abonne/add'); ?>" class="btn btn-success btn-sm">Nouveau</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Abo Id</th>
						<th>RaisonSociale</th>
						<th>Nationalite</th>
						<th>NomResponsable</th>
						<th>Contact</th>
						<th>Adresse</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($abonnes as $a){ ?>
                    <tr>
						<td><?php echo $a['abo_id']; ?></td>
						<td><?php echo $a['raisonSociale']; ?></td>
						<td><?php echo $a['nationalite']; ?></td>
						<td><?php echo $a['nomResponsable']; ?></td>
						<td><?php echo $a['contact']; ?></td>
						<td><?php echo $a['adresse']; ?></td>
						<td>
                            <a href="<?php echo site_url('abonne/edit/'.$a['abo_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('abonne/remove/'.$a['abo_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
