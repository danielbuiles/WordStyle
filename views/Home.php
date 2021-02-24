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
    <link rel="stylesheet" href="../css//form-validation.css">
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
            <form class="needs-validation" novalidate>
              <div class="row g-3">
                
                <div class="col-12">
                  <label for="username" class="form-label">Nombre o Palabra</label>
                  <div class="input-group has-validation">
                    <input type="text" class="form-control" id="username" placeholder="Username" required>
                  <div class="invalid-feedback">
                      Your username is required.
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="state" class="form-label">No.Estylo</label>
                  <select class="form-select" id="state" required>
                    <option value="">Choose...</option>
                    <option>California</option>
                  </select>
                </div>

                <div class="col-md-3">
                  <label for="zip" class="form-label">Color de fondo</label>
                  <input type="text" class="form-control" id="zip" placeholder="" required>
                  
                </div>

                <div class="col-md-3">
                  <label for="zip" class="form-label">Color de letra</label>
                  <input type="text" class="form-control" id="zip" placeholder="" required>
                  
                </div>

              </div>
            
              <hr class="my-4">
              <div class="Button-b">
                <button class="w-100 btn btn-primary btn-lg" type="submit">Ver!</button>
              </div>
            </form>
          </div>
        </div>
      </main>
    </div>
    <footer class="my-5 pt-5 text-muted text-center text-small">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
      <p class="mb-1">&copy; 2021–2021 Daniel Group</p>
    </footer>
  </body>
</html>