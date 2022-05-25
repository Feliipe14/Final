<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiendita cool</title>
    <!-- <link rel="stylesheet" href="css/normalize.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="tienda.css">
    
</head>
<body>

<header>
    <div class="logo">
      <img src="logo.png" alt="logo">
      
    </div>

<ul class="menu">
        <li><a href="welcome.php">Inicio</a></li>
        <li><a href="contacto.php">Contacto</a></li>
        <li><a href="somos.php">Quienes somos</a></li>
        <li class="cerrar"><a href="logout.php">Cerrar sesion</a></li>
      </ul>
  </header>

   
      <br>
<h1>TIENDA</h1>
    <div class="titulo">
<h1 class="subtitulo">ZOOLAND</h1>
    </div>







    <main class="contenedor">
        

        <div class="grid">
            <div class="producto">
                <a href="#">
                    <img class="producto__imagen" src="img/1.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Chunky Snacks</p>
                        <p class="producto__precio">$14.000 COP</p>
                    </div>
                </a>
                <form class="formulario">
                    <input class="formulario__campo" type="number" placeholder="Cantidad" min="1">
                    <a href="https://api.whatsapp.com/send?phone=+573026174051&text=Hola, quiero comprar Chunky Snacks" class="formulario__submit" value="Pedir">Pedir</a>
                </form>

             </div>  <!--.producto-->
             <div class="producto">
                <a href="#">
                    <img class="producto__imagen" src="img/2.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Agility Gold</p>
                        <p class="producto__precio">$30.000 COP</p>
                    </div>
                </a>
                <form class="formulario">
                    <input class="formulario__campo" type="number" placeholder="Cantidad" min="1">
                    <a href="https://api.whatsapp.com/send?phone=+573026174051&text=Hola, quiero comprar Agility Gold" class="formulario__submit" value="Pedir">Pedir</a>
                </form>
                
             </div>  <!--.producto-->
             <div class="producto">
                <a href="#">
                    <img class="producto__imagen" src="img/3.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Nexgard Spectra</p>
                        <p class="producto__precio">$59.270 COP</p>
                    </div>
                </a>
                <form class="formulario">
                    <input class="formulario__campo" type="number" placeholder="Cantidad" min="1">
                    <a href="https://api.whatsapp.com/send?phone=+573026174051&text=Hola, quiero pedir Nexgard Spectre" class="formulario__submit" value="Pedir">Pedir</a>
                </form>
                
             </div>  <!--.producto-->

        </div>  <!--.producto-->
            
    </main>


</body>
</html>
