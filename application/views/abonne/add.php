<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Abonne Add</h3>
            </div>
            <?php echo form_open('abonne/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="raisonSociale" class="control-label"><span class="text-danger">*</span>RaisonSociale</label>
						<div class="form-group">
							<input type="text" name="raisonSociale" value="<?php echo $this->input->post('raisonSociale'); ?>" class="form-control" id="raisonSociale" />
							<span class="text-danger"><?php echo form_error('raisonSociale');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nationalite" class="control-label"><span class="text-danger">*</span>Nationalite</label>
						<div class="form-group">
							<input type="text" name="nationalite" value="<?php echo $this->input->post('nationalite'); ?>" class="form-control" id="nationalite" />
							<span class="text-danger"><?php echo form_error('nationalite');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomResponsable" class="control-label"><span class="text-danger">*</span>NomResponsable</label>
						<div class="form-group">
							<input type="text" name="nomResponsable" value="<?php echo $this->input->post('nomResponsable'); ?>" class="form-control" id="nomResponsable" />
							<span class="text-danger"><?php echo form_error('nomResponsable');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="contact" class="control-label"><span class="text-danger">*</span>Contact</label>
						<div class="form-group">
							<input type="text" name="contact" value="<?php echo $this->input->post('contact'); ?>" class="form-control" id="contact" />
							<span class="text-danger"><?php echo form_error('contact');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="adresse" class="control-label">Adresse</label>
						<div class="form-group">
							<textarea name="adresse" class="form-control" id="adresse"><?php echo $this->input->post('adresse'); ?></textarea>
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
