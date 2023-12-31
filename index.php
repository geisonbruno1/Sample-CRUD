<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/styles.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Cadastro</title>
  </head>
  <body>
      <div class = "container">
          <div class = "row" >
              <div class = "col" >
                  <h1>Cadastro</h1>
                  <form action = "cadastro-script.php" method = "POST">
                   <div class="form-group">
                      <label for="Nome">Nome completo</label>
                      <input type="text" class="form-control" name="nome">
                    </div>
                    <div class="form-group">
                      <label for="endereco">Endereço</label>
                      <input type="text" class="form-control"  name="endereco"> 
                    </div>
                    <div class="form-group">
                      <label for="telefone">Telefone</label>
                      <input type="text" class="form-control"  name="telefone"> 
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control"  name="email"> 
                    </div>
                    <div class="form-group">
                      <label for="data">Data Nascimento</label>
                      <input type="date" class="form-control"  name="data_nascimento"> 
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-sucess"> 
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>