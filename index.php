<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP PHP</title>

    <!-- Boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Estilos propios -->
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    
    <header> </header>
  
        <!-- Boostrap 5.1 Component NavBar With a brand name shown on the left and toggler on the right -->
        <nav class="navbar navbar-expand-lg sticky-top navbar-dark" style="background-color: #3e3f3f;">
          <div class="container-fluid">
            <a class="navbar-brand ms-5" href="#">
              <img src="img/codoacodo.png" alt="logo" width="100">
              Conf Bs As
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ms-auto me-5">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">La conferencia</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Los oradores</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">El lugar y la fecha</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Conviértete en orador</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#tickets" style="color: #0fb871;">Comprar tickets</a>
                    </li>
                </ul>
            </div>
          </div>
        </nav>
    
  
   <main id="img_fondo">
    <div class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner" id="carouselPricipio">
        <div class="carousel-item active">
          <img src="img/ba1.jpg" class="d-block w-100" alt="palacioAguas">
        </div>
        <div class="carousel-item">
          <img src="img/ba2.jpg" class="d-block w-100" alt="bar">
        </div>
        <div class="carousel-item">
          <img src="img/ba3.jpg" class="d-block w-100" alt="obelisco">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </main>

  <div class="container-fluid">
  <div id="texto_img_fondo">
    <h4>Conf Bs As</h4>
    <p>Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el conocimiento y experiencia de los expertos que están creando el futuro de Internet.Ven a conocer a mienbros del evento, a otros estudiantes de Codo a Codo y los oradores de primer nivel que tenemos para ti. Te esperamos! </p>
    <button type="button" class="btn btn-outline-light">Quiero ser orador</button>
    <button type="button" class="btn btn-success"><a href="#tickets" style="color: #f5f8f7; text-decoration:none;"> Comprar tickets </a></button>
    
</div>
</div>


<div class="container-fluid">
<div class="text-center">
<p>
    conoce a los
</p>
<h3>ORADORES</h3>

</div>

<div class="row row-cols-1 row-cols-md-3 g-4 mx-auto tarjetas mb-3">
    <div class="col">
      <div class="card">
        <img src="img/steve.jpg" class="card-img-top" alt="Steve Jobs">
        <div class="card-body">
            <span class="badge bg-warning text-dark">Javascript</span>
            <span class="badge bg-success">React</span>
          <h5 class="card-title">Steve Jobs</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum esse laborum laboriosam velit eum architecto ratione.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="img/bill.jpg" class="card-img-top" alt="Bill Gates">
        <div class="card-body">
            <span class="badge bg-warning text-dark">Javascript</span>
            <span class="badge bg-success">React</span>
          <h5 class="card-title">Bill Gates</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum esse laborum laboriosam velit eum architecto ratione.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="img/ada.jpeg" class="card-img-top" alt="Ada Lovelace">
        <div class="card-body">
            <span class="badge bg-secondary">Negocios</span>
            <span class="badge bg-danger">Startups</span>
          <h5 class="card-title">Ada Lovelace</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum esse laborum laboriosam velit eum architecto ratione.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row mb-3 g-1 mx-auto">
    <div class="col-6">
      <img src="img/honolulu.jpg" alt="costa" id="honolulu">
    </div>
    <div class="col-6" style="background-color: #292c28;">
      <div class="mt-3 p-2 text-white">
        <h3>Bs As - Octubre</h3>
      <p>Buenos Aires es la provincia y localidad más grande del estado de Argentina, en los Estados unidos, Honolulu es la más sureña de entre las principales ciudades estadounidenses. Aunque el nombre de Honolulu se refiere al área urbana en la costa sureste de la isla de Oahu, la ciudad y el condado de Honolulu han formado una ciudad condado consolidada que cubre toda la ciudad (aproximadamente 600 km2 de superficie).</p>
      <button type="button" class="btn btn-outline-light">Conocé más</button>
    </div>
  </div>
  </div>

<!-- 
  <div class="row row-cols-2 g-1 mb-3">
    <div class="col">
      <img src="img/honolulu.jpg" alt="costa" id="honolulu">
    </div>
    <div class="col" style="background-color: #292c28;">
      <div class="mt-3 p-2 text-white">
        <h3>Bs As - Octubre</h3>
      <p>Buenos Aires es la provincia y localidad más grande del estado de Argentina, en los Estados unidos, Honolulu es la más sureña de entre las principales ciudades estadounidenses. Aunque el nombre de Honolulu se refiere al área urbana en la costa sureste de la isla de Oahu, la ciudad y el condado de Honolulu han formado una ciudad condado consolidada que cubre toda la ciudad (aproximadamente 600 km2 de superficie).</p>
      <button type="button" class="btn btn-outline-light">Conocé más</button>
    </div>
  </div>
  </div>
 -->
  <div class="text-center">
<p>
  CONVIÉRTETE EN UN
</p>
<h3>ORADOR</h3>
<p>
    Anótate como orador para una charla ignite. Cuéntanos de qué quieres hablar!
</p>

</div>


<div class="row mb-5">
  <div class="col-6 mx-auto">
    <form method= "post">
      <div class="row">
      <div class="input-group mb-3 col">
          <input type="text" class="form-control" placeholder="Nombre" name= "nombre" aria-label="Nombre" aria-describedby="basic-addon1">
        </div>
        
        <div class="input-group mb-3 col">
          <input type="text" class="form-control" placeholder="Apellido" name= "apellido"aria-label="Apellido" aria-describedby="basic-addon2">
        </div>
      </div>
        
        <div class="input-group mb-3">
          <textarea class="form-control" aria-label="With textarea" placeholder="Sobre qué quieres hablar?" name= "tema"></textarea>
        </div>
        <div class="form-text mb-3">Recuerda incluir un título para tu charla.</div>

        <button type="submit" class="btn btn-succes col-12 mb-3" name= "enviar" style="background-color: #6ea150; color: #f7faf6;">Enviar</button>
      </form>

      <?php
        include("registrar.php");
      ?>
    
      </div>
    </div>

    <div class="row mb-2">
      <div class="col-6 mx-auto">
    <div class="row row-cols-1 row-cols-md-3 g-1 mb-3 text-center">
      <div class="col">
        <div class="card border-primary h-100">
          <div class="card-body">
            <h5 class="card-title mb-3">Estudiante</h5>
            <h6 class="card-subtitle mb-3 text-muted">Tienen un descuento</h6>
            <h5 class="card-title mb-3">80%</h5>
            <h6 class="card-subtitle text-muted mb-3">*presentar documentación</h6>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card border-success h-100">
          <div class="card-body">
            <h5 class="card-title mb-3 ">Trainee</h5>
            <h6 class="card-subtitle mb-3 text-muted">Tienen un descuento</h6>
            <h5 class="card-title mb-3 ">50%</h5>
            <h6 class="card-subtitle text-muted mb-3 ">*presentar documentación</h6>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card border-warning h-100">
          <div class="card-body">
            <h5 class="card-title mb-3 ">Junior</h5>
            <h6 class="card-subtitle mb-3 text-muted">Tienen un descuento</h6>
            <h5 class="card-title mb-3 ">15%</h5>
            <h6 class="card-subtitle text-muted mb-3 ">*presentar documentación</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    <div class="text-center">
      <p>
          VENTA
      </p>
      <h3>VALOR DEL TICKET $200</h3>
      
      </div>
      
      
      <div class="row" id="tickets">
        <div class="col-6 mx-auto">
          <form>
            <div class="row">
            <div class="input-group mb-3 col">
                <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1">
              </div>
              
              <div class="input-group mb-3 col">
                <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido" aria-describedby="basic-addon2">
              </div>
            </div>
           
              
              <div class="input-group mb-3">
                
              <input type="email" class="form-control" id="email" placeholder="Correo" name="email">
            </div>

          
               
              <div class="row">
                <div class="col mb-3">
                  
                  
                  <label for="cantidad" class="form-label">Cantidad</label>
                    <input type="text" id="inputCantidad" class="form-control" placeholder="cantidad" aria-label="Cantidad" aria-describedby="basic-addon1">
                  </div>
                   
                <div class="col mb-3">
                  <label for="categoria" class="form-label">Categoría</label>
                  <select id="inputCategoria" class="form-select" aria-label="Categoria">
                    <option selected value="estudiante">Estudiante</option>
                    <option value="trainee">Trainee</option>
                    <option value="junior">Junior</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6 mx-auto mb-3">
              
              <p id="total" style="background-color: #add1fa;">Total a Pagar:$</p>
            </div>
          </div> 

          
            

              <div class="row">
                <div class="col-6 mx-auto mb-3">

                  <div class="row">

                <div class="mb-3 col-6 mx-auto">
                  <button type="reset" class="btn btn-succes mb-3 col-12" style="background-color: #6ea150; color: #f7faf6;">Borrar</button>
              </div>
              
              <div class="mb-3 col-6 mx-auto">
                <button type="button" id="resumen" class="btn btn-succes mb-3 col-12" style="background-color: #6ea150; color: #f7faf6;" onclick="calculo()">Resumen</button>
              </div>
            
          </div>
        </div>
      </div>
            
            </form>
          
            </div>
          
          
          </div>   
        </div>    

<footer>

  <div class="container">
    <div class="row my-3">
      <div class="col">
        Preguntas frecuentes
      </div>
      <div class="col">
        Contáctanos
      </div>
      <div class="col">
        Prensa
      </div>
      <div class="col">
        Conferencias
      </div>
      <div class="col">
        Prensa
      </div>
      <div class="col">
        Términos y condiciones
      </div>
      <div class="col">
        Estudiantes
      </div>
    
  </div>
</footer>


    </div>
    

</div>
</div>

 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="script.js"></script>

</body>
</html>