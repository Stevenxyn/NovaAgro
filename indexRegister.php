    <?php include("db.php")?>
    <?php include("includes/header.php")?>
    <?php include("includes/footer.php")?>

    <!--Barra -->
    <div class="container-fluid">
        <div class="row bg-dark text-white justify-content-center p-4">
            <div class="col-12">
                <p class="h3">Nova Agro 
                   Registro de Productos</p>
               
            </div>
         </div>
    <div><a href="landingPage.html"><img src="https://www.acsilat.org/images/boton_regresar.png" width="100px" style="float: right"></div></a></div>
        </div>


    <div class="container">
        <!--Datos Cliente-->

        <form action="save_client.php" method="POST">

            <div class="row py-5">
                <h3 class="pb-3 col-12" >Formato toma de datos personales cliente</h3>
                <br>
                <div class="col-6 ">
                    <label class="exampleInputEmail1">Nombre Cliente: </label>
                    <input type="text" class="form-control"  placeholder="Nombre del cliente"
                    name="nombre_cliente" require >
                </div>
                <div class="col-6 pb-3">
                    <label class="exampleInputEmail1">Direccion Residencia: </label>
                    <input type="" class="form-control"  placeholder="Direccion de la residencia"
                    name="direccion_cliente">
                </div>
                <div class="col-6 pb-3">
                    <label class="exampleInputEmail1">Telefono Cliente: </label>
                    <input type="number" class="form-control"  placeholder="Nombre del cliente"
                    name="telefono_cliente">
                </div>
                <div class="col-6 pb-3">
                    <label class="exampleInputEmail1">Cedula Cliente: </label>
                    <input type="number" class="form-control"  placeholder="Cedula del cliente"
                    name="cedula_cliente">
                </div>
                <div class="col-6 pb-3">
                    <label class="exampleInputEmail1">Metodo Pago: </label>
                    <input type="text" class="form-control"  placeholder="Metodo del pago"
                    name="metodo_pago">
                </div>
                <div class="col-6 pb-3">
                    <label class="exampleInputEmail1">Hora de llegada y fecha: </label>
                    <input type="datetime-local" class="form-control" name="fecha_llegada">
                </div>

                <button type="submit" class="btn btn-outline-primary btn-lg btn-block" name="save_client">Guardar Cliente</button>

            </div>
        </form>

        <h3>Lista Cliente </h3>
        <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre Cliente</th>
            <th>Direccion Cliente</th>
            <th>Telefono cliente</th>
            <th>Cedula Cliente</th>
            <th>Metodo Pago</th>
            <th>Hora y fecha llegada</th>
            <th>Actualizar</th>
          </tr>
        </thead>
        <tbody>

      <!--Realizamos la consulta a la BDD de los datos almacenados previamente-->
          <?php
          
          //Seleccionamos la bdd junto a la consulta
          $query = "SELECT * FROM cliente";
          $result_clientes = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_clientes)) { ?>
          <tr>
          <!--Hace el recorrido del while y va pintando en la tabla cada dato en su fila correspondiente-->
            <td><?php echo $row['nombre_cliente']; ?></td>
            <td><?php echo $row['direccion_cliente']; ?></td>
            <td><?php echo $row['telefono_cliente']; ?></td>
            <td><?php echo $row['cedula_cliente']; ?></td>
            <td><?php echo $row['metodo_pago']; ?></td>
            <td><?php echo $row['fecha_llegada']; ?></td>
            <td>
            <!--Llamamos edit con su identificador que es la llame primaria para que unicamente afecte a esa-->
              <a href="edit_client.php?id=<?php echo $row['id_compra']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <!--Llamamos igualmente a eliminar para que busque el identificador y lo elimine-->
              <a href="delete_client.php?id=<?php echo $row['id_compra']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
     </div>

       <hr><br><br><br>


        <form action="save_product.php" method="POST">
            <div class="row">
                <h3 class="pb-3 col-12">Toma de productos cliente</h3>

                <div class="col-6 pb-3">
                    <label class="exampleInputEmail1">ID Producto: </label>
                    <input type="number" class="form-control"  placeholder="Identificador del producto" 
                    name="id_producto">
                </div>
                <div class="col-6 pb-3">
                    <label class="exampleInputEmail1">Nombre Producto: </label>
                    <input type="text" class="form-control"  placeholder="Nombre del producto"
                    name="nombre_producto">
                </div>
                <div class="col-6 pb-3">
                    <label class="exampleInputEmail1">Cantidad producto </label>
                    <input type="text" class="form-control"  placeholder="Cantidad del producto" " step="2" min="0"
                    name="cantidad_producto">
                </div>
                <div class="col-6 pb-3">
                    <label class="exampleInputEmail1">Precio Producto por Kilogramo: </label>
                    <input type="text" class="form-control"  placeholder="Cedula del cliente"
                    name="precio_producto">
                </div>
                <div class="col-12 pb-3">
                    <label class="exampleInputEmail1">Cedula Cliente: </label>
                    <input type="text" class="form-control"  placeholder="Cedula del cliente"
                    name="cedula_cliente">
                </div>
          

                <button type="submit" class="btn btn-outline-primary btn-lg btn-block" name="save_product">Guardar Producto</button>
            </div>
        </form>



        <div class="col-12 pt-3">
        <h3>Lista Productos</h3>

      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Id producto</th>
            <th>Nombre Producto</th>
            <th>Cantidad producto</th>
            <th>Precio Producto</th>
            <th>Cedula Cliente</th>
            <th>Actualizar</th>
          </tr>
        </thead>
        <tbody>

      <!--Realizamos la consulta a la BDD de los datos almacenados previamente-->
          <?php
          //Seleccionamos la bdd junto a la consulta
          $query = "SELECT * FROM productos";
          $result_clientes = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_clientes)) { ?>
          <tr>
          <!--Hace el recorrido del while y va pintando en la tabla cada dato en su fila correspondiente-->
            <td><?php echo $row['id_producto']; ?></td>
            <td><?php echo $row['nombre_producto']; ?></td>
            <td><?php echo $row['cantidad_producto']; ?></td>
            <td><?php echo $row['precio_producto']; ?></td>
            <td><?php echo $row['cedula_cliente']; ?></td>
 
            <td>
            <!--Llamamos edit con su identificador que es la llame primaria para que unicamente afecte a esa-->
              <a href="edit_product.php?id=<?php echo $row['id_producto']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <!--Llamamos igualmente a eliminar para que busque el identificador y lo elimine-->
              <a href="delete_product.php?id=<?php echo $row['id_producto']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      </div>

        <br><br><br><br><br><br><br><br><br><br>
    </div>

