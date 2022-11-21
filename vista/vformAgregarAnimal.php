
             <form action="c_insertarAnimal.php?id=<?php echo $_GET['name'] ?>" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="foto" id="foto" placeholder="foto del animal" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nombre_C" class="form-control" id="nombre_C" placeholder="Nombre Científico" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion" required>
                </div>
              </div>
              
              <div class="text-center mt-2"><button type="submit">Send Animal</button></div>
            </form>
