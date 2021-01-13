<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Chauffeur Add</h3>
            </div>
            <?php echo form_open('chauffeur/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="matricule" class="control-label"><span class="text-danger">*</span>Matricule</label>
						<div class="form-group">
							<input type="text" name="matricule" value="<?php echo $this->input->post('matricule'); ?>" class="form-control" id="matricule" />
							<span class="text-danger"><?php echo form_error('matricule');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nom_complet" class="control-label"><span class="text-danger">*</span>Nom Complet</label>
						<div class="form-group">
							<input type="text" name="nom_complet" value="<?php echo $this->input->post('nom_complet'); ?>" class="form-control" id="nom_complet" />
							<span class="text-danger"><?php echo form_error('nom_complet');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="contact" class="control-label">Contact</label>
						<div class="form-group">
							<input type="text" name="contact" value="<?php echo $this->input->post('contact'); ?>" class="form-control" id="contact" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Sauvegarder les donnees
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
