<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Produit Add</h3>
            </div>
            <?php echo form_open('produit/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="categorie_sid" class="control-label"><span class="text-danger">*</span>Category</label>
						<div class="form-group">
							<select name="categorie_sid" class="form-control">
								<option value="">select category</option>
								<?php
								foreach($all_categories as $category)
								{
									$selected = ($category['cat_id'] == $this->input->post('categorie_sid')) ? ' selected="selected"' : "";

									echo '<option value="'.$category['cat_id'].'" '.$selected.'>'.$category['designation'].'</option>';
								}
								?>
							</select>
							<span class="text-danger"><?php echo form_error('categorie_sid');?></span>
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
						<label for="natureProduit" class="control-label">NatureProduit</label>
						<div class="form-group">
							<input type="text" name="natureProduit" value="<?php echo $this->input->post('natureProduit'); ?>" class="form-control" id="natureProduit" />
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
