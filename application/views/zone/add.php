<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Zone Add</h3>
            </div>
            <?php echo form_open('zone/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="abonne_sid" class="control-label"><span class="text-danger">*</span>Abonne</label>
						<div class="form-group">
							<select name="abonne_sid" class="form-control">
								<option value="">select abonne</option>
								<?php
								foreach($all_abonnes as $abonne)
								{
									$selected = ($abonne['abo_id'] == $this->input->post('abonne_sid')) ? ' selected="selected"' : "";

									echo '<option value="'.$abonne['abo_id'].'" '.$selected.'>'.$abonne['raisonSociale'].'</option>';
								}
								?>
							</select>
							<span class="text-danger"><?php echo form_error('abonne_sid');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="designation" class="control-label"><span class="text-danger">*</span>Designation</label>
						<div class="form-group">
							<input type="text" name="designation" value="<?php echo $this->input->post('designation'); ?>" class="form-control" id="designation" />
							<span class="text-danger"><?php echo form_error('designation');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="commune" class="control-label">Commune</label>
						<div class="form-group">
							<input type="text" name="commune" value="<?php echo $this->input->post('commune'); ?>" class="form-control" id="commune" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="quartier" class="control-label">Quartier</label>
						<div class="form-group">
							<input type="text" name="quartier" value="<?php echo $this->input->post('quartier'); ?>" class="form-control" id="quartier" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="avenue" class="control-label">Avenue</label>
						<div class="form-group">
							<input type="text" name="avenue" value="<?php echo $this->input->post('avenue'); ?>" class="form-control" id="avenue" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="numero" class="control-label">Numero</label>
						<div class="form-group">
							<input type="text" name="numero" value="<?php echo $this->input->post('numero'); ?>" class="form-control" id="numero" />
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
