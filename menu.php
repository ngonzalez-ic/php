

    <nav class="navbar navbar-expand-md navbar navbar-dark bg-primary
    fixed-top">
      <a class="navbar-brand" href="#">Chat </a>
      

      <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarsExampleDefault">
               <form action="deslogear.php" class="form-inline my-2 my-lg-0">
          <input name ="usuario" readonly class="form-control mr-sm-2" type="text"  aria-label="Search" value="
          <?php
             echo $_SESSION['usuario'];
            ?>">
          </div>
      <a href="./foto.php" class="btn btn-primary" >Perfil</a>
      <a href="./deslogear.php" class="btn btn-primary" >Salir</a>
      </div>
   </form>
      </div>
    </nav>