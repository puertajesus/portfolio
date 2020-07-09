<nav class="navbar navbar-expand-md navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php echo $pg == "inicio" ? "active " : "";?> ">
                        <a class="nav-link " href="index.php" title="Inicio"> Inicio</a> 
                    </li>
                    <li class="nav-item <?php echo $pg == "sobremi" ? "active " : "";?>  ">
                        <a class="nav-link " href="sobre-mi.php" title="Sobre mí">Sobre mí</a>
                    </li>
                    <li class="nav-item  <?php echo $pg == "proyectos" ? "active " : "";?> ">
                        <a class="nav-link " href="proyectos.php"title="Proyectos" >Proyectos</a>
                    </li>
                    <li class="nav-item <?php echo $pg == "contacto" ? "active " : "";?> ">
                        <a class="nav-link " href="contacto.php"title="Contacto"  >Contacto</a>
                    </li>
                </ul>

            </div>
</nav>