<body>
          <center>  
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="<?= $y['imagen'] ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $y['nombre'] ?></h5>
                            <p class="card-text"><?= $y['descrip'] ?></p>
                            <p class="card-text">Stock: <?= $y['stock'] ?></p>
                            <a type="button" class="btn btn-outline-danger" href="http://example2.com/eliminar.php?id=<?= $y['id'] ?>"><img src="images/eliminar.png" /></a> 
                            <a type="button" class="btn btn-outline-success" href="http://example2.com/editarproducto.php?id=<?= $joya['id'] ?>"><img src="images/editar.png" /></a> 
                        </div>
                        </div>
                    </div>
                 </div>
           </center> 
       </body>
    </html>