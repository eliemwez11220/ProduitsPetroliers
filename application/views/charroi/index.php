<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Charrois Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('charroi/add'); ?>" class="btn btn-success btn-sm">Nouveau charroi</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Cha Id</th>
						<th>EtatDisponibilite</th>
						<th>Designation</th>
						<th>Poids</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($charrois as $c){ ?>
                    <tr>
						<td><?php echo $c['cha_id']; ?></td>
						<td><?php echo $c['etatDisponibilite']; ?></td>
						<td><?php echo $c['designation']; ?></td>
						<td><?php echo $c['poids']; ?></td>
						<td>
                            <a href="<?php echo site_url('charroi/edit/'.$c['cha_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('charroi/remove/'.$c['cha_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
