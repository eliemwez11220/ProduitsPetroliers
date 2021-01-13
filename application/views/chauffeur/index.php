<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Chauffeurs Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('chauffeur/add'); ?>" class="btn btn-success btn-sm">Nouveau chauffeur</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Cha Id</th>
						<th>Matricule</th>
						<th>Nom Complet</th>
						<th>Contact</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($chauffeurs as $c){ ?>
                    <tr>
						<td><?php echo $c['cha_id']; ?></td>
						<td><?php echo $c['matricule']; ?></td>
						<td><?php echo $c['nom_complet']; ?></td>
						<td><?php echo $c['contact']; ?></td>
						<td>
                            <a href="<?php echo site_url('chauffeur/edit/'.$c['cha_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('chauffeur/remove/'.$c['cha_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
