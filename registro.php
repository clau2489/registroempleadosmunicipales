<!DOCTYPE html>
<html lang="en">

<!-- Head --> 
<?php include("layout/head.php"); ?>

<?php include("layout/nav.php"); ?>

<body id="page-top">

  <!-- About -->
  <section class="content-section" id="about">
    <div class="container">
      <div class="row"> 
        <div class="offset-md-3 col-md-6 p2 text-center">
          <img src="assets/img/mmpverde.png" width="200px;">
          <br><br>
          <br>
          <h5>Por favor, complete el siguiente formulario con sus datos personales y el área al que corresponde.</h5>       
        </div>
      </div>
      <div class="row">
        <div class="offset-md-3 col-md-6 p2 alert alert-success">
          <form action="guardardatos.php" method="post">
            <div class="form-group">
              <label>Apellido/s: </label>
              <input type="text" class="form-control" id="apellido" name="apellido" required style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
            </div>
            <div class="form-group">
              <label>Nombres: </label>
              <input type="text" class="form-control" id="nombre" name="nombre" required style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
            </div>
            <div class="form-group">
              <label>Número de Documento: </label>
              <input type="number" class="form-control" id="documento" name="documento" min="1" max="99999999" required>
            </div>
            <div class="form-group">
              <label>Número de CUIL: </label>
              <input type="number" class="form-control" id="cuil" name="cuil" min="1" max="99999999999" required>
            </div>
            <div class="form-group">
              <label>Numero de Celular: (sin 0 y 15)</label>
              <input type="number" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="form-group">
              <label>Dirección de correo electrónico: </label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>                         
            <div class="form-group">
              <label>Dirección: </label>
              <input type="text" class="form-control" id="direccion" name="direccion" required style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
            </div>
            <div class="form-group">
              <label>Altura: </label>
              <input type="text" class="form-control" id="direccion" name="direccion" required style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
            </div>            
            <div class="form-group">
              <label>Barrio: </label>
              <select class="form-control" id="barrio" name="barrio">
                <option>Seleccionar..</option>
                  <?php
                  include("config/db.php");
                  include("config/conexion.php");
                  $id = $_GET['id'];
                  $consulta=mysqli_query($con,"select * from barrios order by nombre_barrio");
                  while($campo=mysqli_fetch_array($consulta)){
                  ?>                
                  <option value="<?php echo utf8_encode($campo[1])?>"><?php echo utf8_encode($campo[1])?></option>
                  <?php
                  }
                  ?>
              </select>
            </div>
            <div class="form-group">
              <label>Localidad: </label>
              <select class="form-control" id="localidad" name="localidad">
                <option>Seleccionar..</option>
                <option value="Marcos Paz">Marcos Paz</option>
                <option value="Merlo">Merlo</option>
                <option value="Gral. Las Heras">Gral. Las Heras</option>
                <option value="Moreno">Moreno</option>
                <option value="Luján">Luján</option>
                <option value="Gral. Rodriguez">Gral. Rodriguez</option>
                <option value="Ituzaingo">Ituzaingo</option>
                <option value="Castelar">Castelar</option>
                <option value="Morón">Morón</option>
              </select>
            </div>
            <div class="form-group">
              <label>Area de Trabajo: </label>
              <select class="form-control" id="area" name="area">
                <option>Seleccionar..</option>
                  <?php
                  include("config/db.php");
                  include("config/conexion.php");
                  $id = $_GET['id'];
                  $consulta=mysqli_query($con,"select * from areasdetrabajo order by nombre_area");
                  while($campo=mysqli_fetch_array($consulta)){
                  ?>                
                  <option value="<?php echo utf8_encode($campo[1])?>"><?php echo utf8_encode($campo[1])?></option>
                  <?php
                  }
                  ?>
              </select>
            </div>            
            <br>
            <input type="submit" class="btn btn-success btn-block" value="Confirmar los datos">
          </form>
        </div>
      </div>
    </div>
  </section> 
  <div class="text-center">
    <a href="index.php"><i class="fa fa-arrow-circle-left" style="font-size: 40px; color: green"></i></a>
  </div>
  <br><br><br><br>
  
  <?php include("layout/footer.php"); ?>
  <?php include("layout/script.php"); ?>

</body>

</html>