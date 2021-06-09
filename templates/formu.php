    <div class="container">
		<form method="post" action="http://example2.com/creaproducto.php">
			<div class="mb-3">
				<label class="form-label">Nombre del producto</label>
				<input name="nombre" class="form-control form-control-lg" type="text" placeholder="Escribe el nombre del producto" aria-label=".form-control-lg example">
			</div>
			<div class="mb-3">
				<label class="form-label">Precio</label>
				<input name="precio" class="form-control form-control-lg" type="number" step="0.01" placeholder="Precio del producto" aria-label="default input example">
			</div>
			<div class="mb-3">
				<label class="form-label">Descripción</label>
				<textarea name="descrip" class="form-control form-control-lg" type="textarea" placeholder="Describe tu producto" aria-label=".form-control-lg example"></textarea>
			</div>
			<div class="mb-3">
				<label class="form-label">Stock</label>
				<input name="stock" class="form-control form-control-lg" type="number" placeholder="Productos en existencia" aria-label="default input example">
			</div>
			<div class="mb-3">
				<label class="form-label">Ruta de imagen</label>
				<input name="imagen" class="form-control form-control-lg" type="text" placeholder="Ruta de imagen" aria-label="default input example">
			</div>
			<button type="submit" class="btn btn-outline-primary">Añadir</button>
			<a type="button" class="btn btn-outline-danger" href="http://example2.com">Cancelar</a>
		</form>
	</div>	
  </body>
</html>