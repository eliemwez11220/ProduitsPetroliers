<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Creation compte client gratuitement</h3>
              	<p>Veuillez saisir les informations necessaires pour creer gratuitement votre compte client
              	pour vous permettre de faire tranquilement vos achats dans notre librairie</p>
            </div>
            <?php echo form_open('internaute/creerCompteClient'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					
					<div class="col-md-6">
						<label for="asset_fullname" class="control-label"><span class="text-danger">*</span>Votre Nom Complet</label>
						<div class="form-group">
							<input type="text" name="asset_fullname" value="<?php echo $this->input->post('asset_fullname'); ?>" class="form-control" id="asset_fullname" />
							<span class="text-danger"><?php echo form_error('asset_fullname');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="asset_username" class="control-label"><span class="text-danger">*</span>Creer votre Pseudo Utilisateur</label>
						<div class="form-group">
							<input type="text" name="asset_username" value="<?php echo $this->input->post('asset_username'); ?>" class="form-control" id="asset_username" />
							<span class="text-danger"><?php echo form_error('asset_username');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="asset_email" class="control-label"><span class="text-danger">*</span>Votre Adresse Email</label>
						<div class="form-group">
							<input type="text" name="asset_email" value="<?php echo $this->input->post('asset_email'); ?>" class="form-control" id="asset_email" />
							<span class="text-danger"><?php echo form_error('asset_email');?></span>
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="asset_sexe" class="control-label"><span class="text-danger">*</span>Genre client</label>
						<div class="form-group">
							<select name="asset_sexe" class="form-control">
								<option value="">Selectionnez sexe</option>
								<?php 
								$asset_fonction_values = array(
									'masculin'=>'Homme',
									'feminin'=>'Femme',
								);

								foreach($asset_fonction_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('asset_sexe')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="asset_phone" class="control-label">Votre Numero de telephone</label>
						<div class="form-group">
							<input type="text" name="asset_phone" value="<?php echo $this->input->post('asset_phone'); ?>" class="form-control" id="asset_phone" />
							<span class="text-danger"><?php echo form_error('asset_phone');?></span>
						</div>
					</div>
				
					
					<div class="col-md-6">
						<label for="ville_client" class="control-label">Votre ville de residence</label>
						<div class="form-group">
							<input type="text" name="ville_client" value="<?php echo $this->input->post('ville_client'); ?>" class="form-control" id="ville_client" />
						</div>
					</div>

					<div class="col-md-6">
						<label for="code_postal" class="control-label">Code postal de votre ville de residence</label>
						<div class="form-group">
							<input type="text" name="code_postal" value="<?php echo $this->input->post('code_postal'); ?>" class="form-control" id="code_postal" />
						</div>
					</div>

					<div class="col-md-6">
						<label for="asset_password" class="control-label"><span class="text-danger">*</span>Creer un Mot de passe</label>
						<div class="form-group">
							<input type="text" name="asset_password" value="<?php echo $this->input->post('asset_password'); ?>" class="form-control" id="asset_password" />
							<span class="text-danger"><?php echo form_error('asset_password');?></span>
						</div>
					</div>

					<div class="col-md-6">
						<label for="password_confirm" class="control-label"><span class="text-danger">*</span>Confirmer le Mot de passe</label>
						<div class="form-group">
							<input type="text" name="password_confirm" value="<?php echo $this->input->post('password_confirm'); ?>" class="form-control" id="password_confirm" />
							<span class="text-danger"><?php echo form_error('password_confirm');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Sauvegarder et creer mon compte client
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>