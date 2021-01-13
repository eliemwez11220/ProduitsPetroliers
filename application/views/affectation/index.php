<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Affectations Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('affectation/add'); ?>" class="btn btn-success btn-sm">Nouvelle affectation</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Affec Id</th>
						<th>Chauffeur Sid</th>
						<th>Charroi Sid</th>
						<th>DateAffec</th>
						<th>Observation</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($affectations as $a){ ?>
                    <tr>
						<td><?php echo $a['affec_id']; ?></td>
						<td><?php echo $a['chauffeur_sid']; ?></td>
						<td><?php echo $a['charroi_sid']; ?></td>
						<td><?php echo $a['dateAffec']; ?></td>
						<td><?php echo $a['observation']; ?></td>
						<td>
                            <a href="<?php echo site_url('affectation/edit/'.$a['affec_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('affectation/remove/'.$a['affec_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
