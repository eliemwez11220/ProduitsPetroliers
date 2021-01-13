<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Mes Achats Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('internaute/mesAchatsLivres'); ?>" class="btn btn-primary btn-sm" onclick="print();">Imprimer mes achats</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Livre Sid</th>
						<th>Date Achat</th>
						<th>Qte Livre</th>
						<th>Prix Livre</th>
						<th>Prix Total</th>
						
                    </tr>
                    <?php foreach($achats as $a){ ?>
                    <tr>
						<td><?php echo $a['achat_id']; ?></td>
						<td><?php echo $a['client_sid']; ?></td>
						<td><?php echo $a['livre_sid']; ?></td>
						<td><?php echo $a['date_achat']; ?></td>
						<td><?php echo $a['qte_livre']; ?></td>
						<td><?php echo $a['prix_livre']; ?><?php echo $a['devise_prix']; ?></td>
						<td><?php echo $a['prix_total']; ?><?php echo $a['devise_prix']; ?></td>
						
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
