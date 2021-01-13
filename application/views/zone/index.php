<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Zones Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('zone/add'); ?>" class="btn btn-success btn-sm">Nouvelle zone</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Zone Id</th>
						<th>Abonne Sid</th>
						<th>Designation</th>
						<th>Commune</th>
						<th>Quartier</th>
						<th>Avenue</th>
						<th>Numero</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($zones as $z){ ?>
                    <tr>
						<td><?php echo $z['zone_id']; ?></td>
						<td><?php echo $z['abonne_sid']; ?></td>
						<td><?php echo $z['designation']; ?></td>
						<td><?php echo $z['commune']; ?></td>
						<td><?php echo $z['quartier']; ?></td>
						<td><?php echo $z['avenue']; ?></td>
						<td><?php echo $z['numero']; ?></td>
						<td>
                            <a href="<?php echo site_url('zone/edit/'.$z['zone_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('zone/remove/'.$z['zone_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
