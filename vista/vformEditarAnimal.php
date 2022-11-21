
<?php foreach($aElementos as $item){ ?>
<form action="c_cambiarAnimal.php?id=<?php echo $_GET['editar'] ?>" method="post" role="form" class="php-email-form">
<div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="nombre" value="<?php echo $item['nombre'] ?>" id="nombre" placeholder="Nombre del zoo" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                   
                  <input type="text" class="form-control" name="nombre_c" value="<?php echo $item['nombre_cientifico'] ?>" id="pais" placeholder="Pais" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                <div class="img-fluid">
                    <img class="w-50" src="<?php echo $item['foto'] ?>" alt="">

                    </div>
                  <input type="text" name="foto" value="<?php echo $item['foto'] ?>" class="form-control" id="direccion" placeholder="direccion" required>
                </div>
                
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="descripcion" value="<?php echo $item['descripcion'] ?>" id="descripcion" placeholder="Descripcion" required>
              </div>
              <div class="form-group mt-3">
              <select name="zoo" class="w-100 p-2 " id="zoo">

              <?php foreach($aElementosZoo as $valor){ ?>
                  <option value="<?php echo $valor['id']?>" <?php if($valor['id']==$item['zoo_id']) echo "selected" ?> > <?php echo $valor['nombre'] ?></option>
                <?php } ?>
              </select>  
              </div>
             
              <div class="text-center mt-2"><button type="submit">Edit Animal</button></div>
</form>
<?php }?>