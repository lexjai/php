<?php foreach($aElementos as $item){ ?>
<form action="c_cambiarZoo.php?id=<?php echo $_GET['id'] ?>" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="ciudad" value="<?php echo $item['ciudad'] ?>" class="form-control" id="ciudad" placeholder="Ciudad" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="nombre" value="<?php echo $item['nombre'] ?>" id="nombre" placeholder="Nombre del zoo" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="direccion" value="<?php echo $item['direccion'] ?>" class="form-control" id="direccion" placeholder="direccion" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="pais" value="<?php echo $item['pais'] ?>" id="pais" placeholder="Pais" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="descripcion" value="<?php echo $item['descripcion'] ?>" id="descripcion" placeholder="Descripcion" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="foto" value="<?php echo $item['foto'] ?>" id="foto" placeholder="foto" value="https://loremflickr.com/320/240/" required>
              </div>
              <div class="text-center mt-2"><button type="submit">Edit Zoo</button></div>
</form>
<?php }?>