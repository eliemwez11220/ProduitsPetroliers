<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Commande Add</h3>
            </div>
            <?php echo form_open('commande/add'); ?>
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
						<label for="produit_sid" class="control-label"><span class="text-danger">*</span>Produit</label>
						<div class="form-group">
							<select name="produit_sid" class="form-control">
								<option value="">select produit</option>
								<?php
								foreach($all_produits as $produit)
								{
									$selected = ($produit['pro_id'] == $this->input->post('produit_sid')) ? ' selected="selected"' : "";

									echo '<option value="'.$produit['pro_id'].'" '.$selected.'>'.$produit['designation'].'</option>';
								}
								?>
							</select>
							<span class="text-danger"><?php echo form_error('produit_sid');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="zone_sid" class="control-label"><span class="text-danger">*</span>Zone</label>
						<div class="form-group">
							<select name="zone_sid" class="form-control">
								<option value="">select zone</option>
								<?php
								foreach($all_zones as $zone)
								{
									$selected = ($zone['zone_id'] == $this->input->post('zone_sid')) ? ' selected="selected"' : "";

									echo '<option value="'.$zone['zone_id'].'" '.$selected.'>'.$zone['designation'].'</option>';
								}
								?>
							</select>
							<span class="text-danger"><?php echo form_error('zone_sid');?></span>
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
						<label for="numRef" class="control-label"><span class="text-danger">*</span>NumRef</label>
						<div class="form-group">
							<input type="text" name="numRef" value="<?php echo $this->input->post('numRef'); ?>" class="form-control" id="numRef" />
							<span class="text-danger"><?php echo form_error('numRef');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dateCom" class="control-label">DateCom</label>
						<div class="form-group">
							<input type="text" name="dateCom" value="<?php echo $this->input->post('dateCom'); ?>" class="has-datepicker form-control" id="dateCom" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="qteCom" class="control-label"><span class="text-danger">*</span>QteCom</label>
						<div class="form-group">
							<input type="text" name="qteCom" value="<?php echo $this->input->post('qteCom'); ?>" class="form-control" id="qteCom" />
							<span class="text-danger"><?php echo form_error('qteCom');?></span>
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
