
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/minifav.png">
    <title>Donaciones</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>

<?php include 'php/header.php'; ?>

<section class="contenedor seccion ">
       

       <div class="iconos-nosotros ">
           <div class="icono">
            <img src="img/paypal.png">
           <br></br>
           <h2>Pasos a seguir para realizar una donacion</h2>
           <br></br>
           <h4> Actualmente hay un error con paypal con las donaciones sin cuenta, te daremos los pasos para lograr realizar la donacion </h4>
           <br></br> 
           <h4> 1- Si ya tienes una cuenta de paypal, inicia sesion desde la pagina de paypal, asi al abrir el link se asocie a tu cuenta automaticamente. </h4>
           <br></br> 
           <h4> En caso de no tener una cuenta, entra a <b>www.paypal.com</b>, para crear una. </h4>
           <br></br> 
           <h4> 2- Una vez ya creada, da clic al boton donar dentro de esta pagina y completa los campos que se solicitan </h4>
           <h4> Es importante verificar que este iniciada sesion de paypal, a lahora de llenar los campos correspondientes. </h4>

           </div>
           
   </section>
            
            <br></br>
             <center>   <div id="donate-button-container">
                <div id="donate-button"></div>
                <script src="https://www.paypalobjects.com/donate/sdk/donate-sdk.js" charset="UTF-8"></script>
                <script>
                PayPal.Donation.Button({
                env:'production',
                hosted_button_id:'R3LVJSCUFPR2E',
                image: {
                src:'https://pics.paypal.com/00/s/ZjA1MzY0NzAtYTA4OC00MWE2LWI1ZTctZWYzNjkxN2U4YzA1/file.PNG',
                alt:'Donate with PayPal button',
                title:'PayPal - The safer, easier way to pay online!',
                }
               
                }).render('#donate-button');

                </script>
                </div> </center>






    <br></br><br></br>
    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="#">Quiénes somos</a>
                <a href="contacto.php">Contacto</a>
            </nav>
            <p class="copyright">Todos los Derechos Reservados 2023 &copy; </p>
        </div>
    </footer>
</body>
</html>