        <?php
          if(count($joyeria)==0){
             
		?>
          <h1>No hay coincidencias</h1>
		<?php
		   }
		?>
			<div class="container">
				<div class="row">
					<?php
						foreach($joyeria as $joya)
						{
					?>	
						<div class="col-sm">
							<div class="card text-dark bg-light my-2" style="width: 18rem;">
								<img src="<?= $joya['imagen'] ?>" class="card-img-top" width="300" height="300">
								<div class="card-body">
									<h5 class="card-title"><?= $joya['nombre'] ?></h5>
									<p class="card-text"><?= '$' . $joya['precio'] ?></p>
									<center>
									<a href="/joyeria.php?j=<?= $joya['id'] ?>" class="btn btn-outline-primary"><img src="images/menu.png" /></a>
									<a type="button" class="btn btn-outline-danger" href="http://example2.com/eliminar.php?id=<?= $joya['id'] ?>"><img src="images/eliminar.png" /></a> 
									<a type="button" class="btn btn-outline-success" href="http://example2.com/editarproducto.php?id=<?= $joya['id'] ?>"><img src="images/editar.png" /></a>    
									</center>
								</div>
							</div>
						</div>	
					<?php
						}
					?>
				</div>
			</div>			
	    </body>
    </html>      	

