<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Achat Edit</h3>
            </div>
			<?php echo form_open('achat/edit/'.$achat['achat_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="client_sid" class="control-label"><span class="text-danger">*</span>Client</label>
						<div class="form-group">
							<select name="client_sid" class="form-control">
								<option value="">select client</option>
								<?php 
								foreach($all_clients as $client)
								{
									$selected = ($client['cli_id'] == $achat['client_sid']) ? ' selected="selected"' : "";

									echo '<option value="'.$client['cli_id'].'" '.$selected.'>'.$client['nom_client'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('client_sid');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="livre_sid" class="control-label"><span class="text-danger">*</span>Livre</label>
						<div class="form-group">
							<select name="livre_sid" class="form-control">
								<option value="">select livre</option>
								<?php 
								foreach($all_livres as $livre)
								{
									$selected = ($livre['liv_id'] == $achat['livre_sid']) ? ' selected="selected"' : "";

									echo '<option value="'.$livre['liv_id'].'" '.$selected.'>'.$livre['num_inventaire'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('livre_sid');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_achat" class="control-label">Date Achat</label>
						<div class="form-group">
							<input type="text" name="date_achat" value="<?php echo ($this->input->post('date_achat') ? $this->input->post('date_achat') : $achat['date_achat']); ?>" class="has-datetimepicker form-control" id="date_achat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="qte_livre" class="control-label"><span class="text-danger">*</span>Qte Livre</label>
						<div class="form-group">
							<input type="text" name="qte_livre" value="<?php echo ($this->input->post('qte_livre') ? $this->input->post('qte_livre') : $achat['qte_livre']); ?>" class="form-control" id="qte_livre" />
							<span class="text-danger"><?php echo form_error('qte_livre');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="prix_livre" class="control-label">Prix Livre</label>
						<div class="form-group">
							<input type="text" name="prix_livre" value="<?php echo ($this->input->post('prix_livre') ? $this->input->post('prix_livre') : $achat['prix_livre']); ?>" class="form-control" id="prix_livre" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="prix_total" class="control-label">Prix Total</label>
						<div class="form-group">
							<input type="text" name="prix_total" value="<?php echo ($this->input->post('prix_total') ? $this->input->post('prix_total') : $achat['prix_total']); ?>" class="form-control" id="prix_total" />
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