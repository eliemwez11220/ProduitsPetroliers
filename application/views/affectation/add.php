<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Affectation Add</h3>
            </div>
            <?php echo form_open('affectation/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="chauffeur_sid" class="control-label"><span class="text-danger">*</span>Chauffeur</label>
						<div class="form-group">
							<select name="chauffeur_sid" class="form-control">
								<option value="">select chauffeur</option>
								<?php
								foreach($all_chauffeurs as $chauffeur)
								{
									$selected = ($chauffeur['cha_id'] == $this->input->post('chauffeur_sid')) ? ' selected="selected"' : "";

									echo '<option value="'.$chauffeur['cha_id'].'" '.$selected.'>'.$chauffeur['nom_complet'].'</option>';
								}
								?>
							</select>
							<span class="text-danger"><?php echo form_error('chauffeur_sid');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="charroi_sid" class="control-label"><span class="text-danger">*</span>Charroi</label>
						<div class="form-group">
							<select name="charroi_sid" class="form-control">
								<option value="">select charroi</option>
								<?php
								foreach($all_charrois as $charroi)
								{
									$selected = ($charroi['cha_id'] == $this->input->post('charroi_sid')) ? ' selected="selected"' : "";

									echo '<option value="'.$charroi['cha_id'].'" '.$selected.'>'.$charroi['designation'].'</option>';
								}
								?>
							</select>
							<span class="text-danger"><?php echo form_error('charroi_sid');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dateAffec" class="control-label">DateAffec</label>
						<div class="form-group">
							<input type="text" name="dateAffec" value="<?php echo $this->input->post('dateAffec'); ?>" class="has-datepicker form-control" id="dateAffec" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="observation" class="control-label">Observation</label>
						<div class="form-group">
							<textarea name="observation" class="form-control" id="observation"><?php echo $this->input->post('observation'); ?></textarea>
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
