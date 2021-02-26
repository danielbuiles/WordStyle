<?php 
session_start();
$RegularExpresion="/^#[0-9|A-Z][0-9|A-Z][0-9|A-Z][0-9|A-Z][0-9|A-Z][0-9|A-Z]/";
if (isset($_SESSION['Text'])) 
{
  header("location:index.php");
}
else 
{
  if (isset($_POST["Btn_Enviar"])) 
  {
    $Text=$_POST['Username'];
    $Style=$_POST['NoEstilo'];
    $Color_Fondo=$_POST['ClFondo'];
    $Color_Letra=$_POST['ClLetra'];

    if (strlen($Text)>10 or !preg_match($RegularExpresion,$Color_Fondo) or !preg_match($RegularExpresion,$Color_Letra)) 
    {}
    else
    {
      session_start();
      $_SESSION['Text']=$Text;
      $_SESSION['Style']=$Style;
      $_SESSION['Cl_Fondo']=$Color_Fondo;
      $_SESSION['Cl_Letra']=$Color_Letra;
      header("location:index.php");
    }
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Playlabras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css//normalize.css">
    <link rel="stylesheet" href="../css//form-validations.css">
  </head>
  <body class="bg-light">
    <div class="container">
      <main>
        <div class="py-5 text-center">
          <img class="d-block mx-auto mb-4" src="../img//cubitos.png" alt="" width="72" height="57">
          <h2>Palabra Styles</h2>
          <p class="lead">Coloca cualquier palabra y mira que animaciones chulas hay para ella.</p>
        </div>
        <div class="row g-3">
          <div class="col-md-7 col-lg-8">
            <form class="needs-validation" method="POST">
              <div class="row g-3">
                
                <div class="col-12">
                  <label for="username" class="form-label">Nombre o Palabra</label>
                  <div class="input-group has-validation">
                    <input type="text" class="form-control" id="username" placeholder="Username" required name="Username" value="<?php if(isset($Text)) echo($Text);?>">
                  </div>
                  <?php if(isset($Text)){?>
                     <?php if(strlen($Text)>10) {?>
                        <p class="Error" name="err_Nombre">* Su palabra es muy Larga</p>
                      <?php }?>
                  <?php }?>
                </div>

                <div class="col-md-4">
                  <label for="state" class="form-label">No.Estylo</label>
                  <select class="form-select" id="state" name="NoEstilo" required>
                    <option value=""></option>
                    <option value="0">Plano</option>
                    <option value="0.2">Oblicuo</option>
                    <option value="1">Lateral</option>
                    <option value="3.8">Rollo</option>
                  </select>
                </div>

                <div class="col-md-3">
                  <label for="zip" class="form-label">Color de fondo</label>
                  <input type="text" class="form-control" id="zip" placeholder="#000" name="ClFondo" required value="<?php if(isset($Color_Fondo)) echo($Color_Fondo);?>">
                  <?php if(isset($Color_Fondo)){?>
                      <?php if(!preg_match($RegularExpresion,$Color_Fondo)) {?>
                        <p class="Error" name="err_Fondo">* Ejemplo:#7E5E67</p>
                      <?php }?>
                  <?php }?>
                </div>

                <div class="col-md-3">
                  <label for="zip" class="form-label">Color de letra</label>
                  <input type="text" class="form-control" id="zip" placeholder="#000" name="ClLetra" required value="<?php if(isset($Color_Letra)) echo($Color_Letra);?>">
                  <?php if(isset($Color_Letra)){?>
                      <?php if(!preg_match($RegularExpresion,$Color_Letra)) {?>
                        <p class="Error" name="err_Letra">* Ejemplo:#7E5E67</p>
                      <?php }?>
                  <?php }?>
                </div>

              </div>
              
              <hr class="my-4">
              <div class="Button-b">
                <button class="w-100 btn btn-primary btn-lg" type="submit" name="Btn_Enviar">Ver!</button>
              </div>
              <a onclick="ventana()"  class="A_Paleta">PALETA DE COLORES HTML</a>
            </form>
          </div>
        </div>
      </main>
    </div>
    <footer class="my-5 pt-5 text-muted text-center text-small">
    <script language="javascript">
      function ventana()
      {
      window.open("https://htmlcolorcodes.com/es/","Nueva ventana");
      }
    </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
      <p class="mb-1">&copy; 2021–2021 Daniel Group</p>
    </footer>
  </body>
</html>