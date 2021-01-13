<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Client Edit</h3>
            </div>
			<?php echo form_open('client/edit/'.$client['cli_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nom_client" class="control-label"><span class="text-danger">*</span>Nom Client</label>
						<div class="form-group">
							<input type="text" name="nom_client" value="<?php echo ($this->input->post('nom_client') ? $this->input->post('nom_client') : $client['nom_client']); ?>" class="form-control" id="nom_client" />
							<span class="text-danger"><?php echo form_error('nom_client');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="phone_client" class="control-label"><span class="text-danger">*</span>Phone Client</label>
						<div class="form-group">
							<input type="text" name="phone_client" value="<?php echo ($this->input->post('phone_client') ? $this->input->post('phone_client') : $client['phone_client']); ?>" class="form-control" id="phone_client" />
							<span class="text-danger"><?php echo form_error('phone_client');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email_client" class="control-label"><span class="text-danger">*</span>Email Client</label>
						<div class="form-group">
							<input type="text" name="email_client" value="<?php echo ($this->input->post('email_client') ? $this->input->post('email_client') : $client['email_client']); ?>" class="form-control" id="email_client" />
							<span class="text-danger"><?php echo form_error('email_client');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ville_client" class="control-label">Ville Client</label>
						<div class="form-group">
							<input type="text" name="ville_client" value="<?php echo ($this->input->post('ville_client') ? $this->input->post('ville_client') : $client['ville_client']); ?>" class="form-control" id="ville_client" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="code_postal" class="control-label">Code Postal</label>
						<div class="form-group">
							<input type="text" name="code_postal" value="<?php echo ($this->input->post('code_postal') ? $this->input->post('code_postal') : $client['code_postal']); ?>" class="form-control" id="code_postal" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_ajout" class="control-label">Date Ajout</label>
						<div class="form-group">
							<input type="text" name="date_ajout" value="<?php echo ($this->input->post('date_ajout') ? $this->input->post('date_ajout') : $client['date_ajout']); ?>" class="has-datetimepicker form-control" id="date_ajout" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>