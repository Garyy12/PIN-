<?php
  require 'scripts/funciones.php';
  if(! haIniciadoSesion() )
  {
  	header('Location: index.html');
  }
  conectar();
  $categorias = getCategoriasPorUser();
?>   
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago Electronico</title>
    <link rel="stylesheet" href="css/estilotar_cre.css">
   
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>

<body>
    
		<header>
			<div class="container-hero">
				<div class="container hero">
					<div class="customer-support">
						<i class="fa-solid fa-headset"></i>
						<div class="content-customer-support">
							<span class="text">Soporte al cliente</span>
							<span class="number">123-456-7890</span>
						</div>
					</div>

					<div class="container-logo">
						
						<h1 class="logo"><a href="/">Plataforma Indigena Nacional</a></h1>
					</div>

					<div class="container-user">
						<i class="fa-solid fa-user"></i>
						<i class="fa-solid fa-basket-shopping"></i>
						<div class="content-shopping-cart">
							<span class="text">Carrito</span>
							<span class="number">(0)</span>
						</div>
					</div>
				</div>
			</div>

			<div class="container-navbar">
				<nav class="navbar container">
					<i class="fa-solid fa-bars"></i>
					<ul class="menu">
						<li><a href="#">Inicio</a></li>
						<li><a href="#">Más</a></li>
						<li><a href="#">Blog</a></li>
					</ul>

					<form class="search-form">
						<input type="search" placeholder="Buscar..." />
						<button class="btn-search">
							<i class="fa-solid fa-magnifying-glass"></i>
						</button>
					</form>
				</nav>
			</div>
		</header>
        <br>
        <h1 class="heading-1">Ingresa tus datos para la compra </h1>
    <div class="wrapper">
        <h2>Metodo de pago</h2>
        <form action="" method="post">
            <!--Account Information Start-->
            <h4>Datos</h4>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" placeholder="Nombre Completo" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input_box">
                    <input type="text" placeholder="Nombre Tarjeta" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="email" placeholder="Correo Electronico" required class="name">
                    <i class="fa fa-envelope icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" placeholder="Direcccion" required class="name">
                    <i class="fa fa-map-marker icon" aria-hidden="true"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" placeholder="Ciudad" required class="name">
                    <i class="fa fa-institution icon"></i>
                </div>
            </div>
            <!--Account Information End-->


            <!--DOB & Gender Start-->
            <div class="input_group">
                <div class="input_box">
                    <h4>Fecha nacimiento</h4>
                    <input type="text" placeholder="DD" required class="dob">
                    <input type="text" placeholder="MM" required class="dob">
                    <input type="text" placeholder="YYYY" required class="dob">
                </div>
                <div class="input_box">
                    <h4>Genero</h4>
                    <input type="radio" name="gender" class="radio" id="b1" checked>
                    <label for="b1">Masculino</label>
                    <input type="radio" name="gender" class="radio" id="b2">
                    <label for="b2">Femenino</label>
                </div>
            </div>
            <!--DOB & Gender End-->


            <!--Payment Details Start-->
            <div class="input_group">
                <div class="input_box">
                    <h4>Detalles Tarjeta</h4>
                    
                    
                        <div id="smart-button-container">
                            <div style="text-align: center;">
                              <div id="paypal-button-container"></div>
                            </div>
                          </div>
                        <script src="https://www.paypal.com/sdk/js?client-id=AZdZbrBsWZVsawAPvZCtEicMgnxTQop2YMaYscl2YupR2yrcJ5RyiehT_5XxMTmNL19FRCJaAMgC6237" data-sdk-integration-source="button-factory"></script>
                        <script>
                          function initPayPalButton() {
                            paypal.Buttons({
                              style: {
                                shape: 'rect',
                                color: 'gold',
                                layout: 'vertical',
                                label: 'pay',
                                
                              },
                      
                              createOrder: function(data, actions) {
                                return actions.order.create({
                                  purchase_units: [{"description":"Tarjeta 2 con los beneficios generales dentro de la pagina","amount":{"currency_code":"USD","value":5.70}}]
                                });
                              },
                      
                              onApprove: function(data, actions) {
                                return actions.order.capture().then(function(orderData) {
                                  
                                  // Full available details
                                  console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                       
                      actions.redirect('LA URL DE TU PAGINA DE GRACIAS');
                                  
                                });
                              },
                      
                              onError: function(err) {
                                console.log(err);
                              }
                            }).render('#paypal-button-container');
                          }
                          initPayPalButton();
                        </script>
               
                    </div>

            </div>
            
            <div class="input_group">
                <div class="input_box">
                    <button type="submit">Pagar ahora</button>
                   
                </div>
                
            </div>
            

        </form>
        
    </div>
    <br> <br> <br> <br> <br>
</body>

</html>
        