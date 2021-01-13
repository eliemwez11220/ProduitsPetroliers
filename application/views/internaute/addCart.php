<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Mon panier - Ligne achat livres</h3>
            </div>
			<?php echo form_open('internaute/addCart/'.$livre['liv_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					
					<div class="col-md-6">
						<label for="client_sid" class="control-label">Votre code client</label>
						<div class="form-group">
							<input type="text" name="client_sid" value="<?php echo ($this->input->post('client_sid') ? $this->input->post('client_sid') : $this->session->id); ?>" class="form-control" id="client_sid" readonly />
							<span class="text-danger"><?php echo form_error('client_sid');?></span>
						</div>
					</div>

					<div class="col-md-6">
						<label for="fullname" class="control-label">Votre nom client</label>
						<div class="form-group">
							<input type="text" name="fullname" value="<?php echo ($this->input->post('fullname') ? $this->input->post('fullname') : $this->session->fullname); ?>" class="form-control" id="fullname" readonly />
							<span class="text-danger"><?php echo form_error('fullname');?></span>
						</div>
					</div>


					<div class="col-md-3">
						<label for="livre_sid" class="control-label">Code Livre choisi</label>
						<div class="form-group">
							<input type="text" name="livre_sid" value="<?php echo ($this->input->post('livre_sid') ? $this->input->post('livre_sid') : $livre['liv_id']); ?>" class="form-control" id="livre_sid" readonly/>
							<span class="text-danger"><?php echo form_error('livre_sid');?></span>
						</div>
					</div>

					<div class="col-md-3">
						<label for="num_inventaire" class="control-label">Numero Inventaire Livre choisi</label>
						<div class="form-group">
							<input type="text" name="num_inventaire" value="<?php echo ($this->input->post('num_inventaire') ? $this->input->post('num_inventaire') : $livre['num_inventaire']); ?>" class="form-control" id="num_inventaire" readonly/>
							<span class="text-danger"><?php echo form_error('num_inventaire');?></span>
						</div>
					</div>

					<div class="col-md-4">
						<label for="prix_livre" class="control-label">Prix Livre</label>
						<div class="form-group">
							<input type="text" name="prix_livre" value="<?php echo ($this->input->post('prix_livre') ? $this->input->post('prix_livre') : $livre['prix_livre']); ?>" class="form-control" id="prix_livre" readonly/>
						</div>
					</div>
					<div class="col-md-2">
						<label for="devise_prix" class="control-label">Devise Prix </label>
						<div class="form-group">
							<input type="text" name="devise_prix" value="<?php echo ($this->input->post('devise_prix') ? $this->input->post('devise_prix') : $livre['devise_prix']); ?>" class="form-control" id="devise_prix" readonly/>
						</div>
					</div>
					<div class="col-md-3">
						<label for="qte_livre" class="control-label"><span class="text-danger">*</span>Saisissez la quantite du Livre</label>
						<div class="form-group">
							<input type="text" name="qte_livre" value="<?php echo ($this->input->post('qte_livre')); ?>" class="form-control" id="qte_livre" autofocus />
							<span class="text-danger"><?php echo form_error('qte_livre');?></span>
						</div>
					</div>
					<div class="col-md-9">
						<label for="observation" class="control-label">Observation sur le livre</label>
						<div class="form-group">
							<input type="text" name="observation" value="<?php echo ($this->input->post('observation') ? $this->input->post('observation') : $livre['observation']); ?>" class="form-control" id="observation" readonly/>

						
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Valider ma commande
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>