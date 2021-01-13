<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Charroi Edit</h3>
            </div>
			<?php echo form_open('charroi/edit/'.$charroi['cha_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="etatDisponibilite" class="control-label">EtatDisponibilite</label>
						<div class="form-group">
							<select name="etatDisponibilite" class="form-control">
								<option value="">select</option>
								<?php
								$etatDisponibilite_values = array(
									'disponible'=>'Disponible',
									'occupee'=>'Non disponible',
								);

								foreach($etatDisponibilite_values as $value => $display_text)
								{
									$selected = ($value == $charroi['etatDisponibilite']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								}
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="designation" class="control-label"><span class="text-danger">*</span>Designation</label>
						<div class="form-group">
							<input type="text" name="designation" value="<?php echo ($this->input->post('designation') ? $this->input->post('designation') : $charroi['designation']); ?>" class="form-control" id="designation" />
							<span class="text-danger"><?php echo form_error('designation');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="poids" class="control-label">Poids</label>
						<div class="form-group">
							<input type="text" name="poids" value="<?php echo ($this->input->post('poids') ? $this->input->post('poids') : $charroi['poids']); ?>" class="form-control" id="poids" />
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
