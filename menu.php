

    <nav class="navbar navbar-expand-md navbar navbar-dark bg-primary
    fixed-top">
      <a class="navbar-brand" href="#">Chat </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarsExampleDefault">
               <form action="deslogear.php" class="form-inline my-2 my-lg-0">
          <input name ="usuario" readonly class="form-control mr-sm-2" type="text"  aria-label="Search" value="
          <?php
             echo $_SESSION['usuario'];
            ?>">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name ="Perfil" onclick="href='\php\listarSesion.php'">Perfil</button>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name ="Salir">Salir</button>
        </form>
      </div>
    </nav>