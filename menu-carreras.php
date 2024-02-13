<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wwidth=device-width,user-scalable=no, initial-scale=1.0,maximun-scale=1.0,minimun-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/minifav.png">
    <title>UD: UNIVERSIDAD INTERCULTURAL DIGITAL</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/contacto-uni.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
  
    
   <!-- Agrega el enlace a Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
</head>
<style>
.custom-button {
    display: block;
    margin-bottom: 10px;
    background-color: #007bff;
    border: none;
    padding: 10px 100px;
    cursor: pointer;
    width: 200%; 
    height: 100%;
    text-align: center; 
   margin-left: -125px;
}

.custom-button:hover {
    background-color: #0056b3;
}


.elementor-tab-content {
    padding: 10px;
    margin-left: 20px;
    flex-grow: 1;
}

/* Estilos para el título "carreras" */
.custom-table-title-1{
    text-align: center; 
    background-color: #FF8C00; 
    color: #fff; 
    padding: 10px 20px; 
    margin-top: 0px; 
    border-bottom: 2px solid #FF8C00; 
}
.custom-table-title-2 {
    text-align: center; 
    background-color:#228B22; 
    color: #fff;
    padding: 10px 20px; 
    margin-top: 0px; 
    border-bottom: 2px solid #228B22; 
}
.custom-table-title-3{
    text-align: center; 
    background-color: #DC143C; 
    color: #fff; 
    padding: 10px 20px; 
    margin-top: 0px; 
    border-bottom: 2px solid #DC143C; 
}
.custom-table-title-4{
    text-align: center; 
    background-color: #9370DB; 
    color: #fff; 
    padding: 10px 20px; 
    margin-top: 0px; 
    border-bottom: 2px solid #9370DB; 
}
.custom-table-title-5{
    text-align: center; 
    background-color: #1E90FF; 
    color: #fff; 
    padding: 10px 20px; 
    margin-top: 0px; 
    border-bottom: 2px solid #1E90FF; 
}

#elementor-tab-content-5 {
    position: absolute;
    right: -100px;
    top: 10px;
    padding: 100px 1000px;
} 
.custom-table-title-6{
    text-align: center;
    background-color: #FF4500; 
    color: #fff; 
    padding: 10px 20px; 
    margin-top: 0px; 
    border-bottom: 2px solid #FF4500; 
}
/* Estilos para la tabla */
.custom-table {
    border-collapse: collapse;

    position: absolute; 
    right: 130px; 
    top: 0; 
    box-shadow: 5px 0 10px rgba(0, 0, 0, 0.2); 
    background-color: white; 
}




/* Estilos para las celdas de la tabla */
.custom-table td {
    border: 1px solid #ddd; 
    padding: 4px; 
    text-align: left;
    background-color: #f1f1f1; 
    padding-right: 50px; 
}




/* Estilos para las celdas de la tabla */
.custom-table td li {
    color: black; 
}

.custom-button:active,
.custom-button:focus {
    outline: none; 
}

.button-table-wrapper {
    display: flex;
    justify-content: center; 
    align-items: center; 
    position: relative; 
}

.button-wrapper {
    display: flex;
    flex-direction: column; 
    align-items: center; 
    gap: 10px; 
}

.button-table-wrapper {
    display: flex;
    flex-direction: column; 
    align-items: center; 
}
  </style>
</head>
<body>

<div class="button-table-wrapper">
        <div class="button-wrapper">
            <button id="button-1" class="custom-button" data-tab="1" style="background-color:#FF8C00; color: white;">Administración</button>
            <button id="button-2" class="custom-button" data-tab="2" style="background-color:#228B22; color: white;">Sociales y Humanidades</button>
            <button id="button-3" class="custom-button" data-tab="3" style="background-color:#DC143C; color: white;">Salud</button>
            <button id="button-4" class="custom-button" data-tab="4" style="background-color:#9370DB; color: white;">Educación</button>
            <button id="button-5" class="custom-button" data-tab="5" style="background-color:#1E90FF; color: white;">Ingeniería y Tecnología</button>
            <button id="button-6" class="custom-button" data-tab="6" style="background-color:#FF4500; color: white;">Sostenibilidad</button>
        </div>

        <div class="elementor-tabs-content-wrapper">
            <!-- Contenido de los botones aquí -->
            <div id="elementor-tab-content-1" class="elementor-tab-content" data-tab="1" hidden="false">
                <table class="custom-table">
                    <thead>
                        <tr>
                            <th colspan="2" class="custom-table-title-1">Carreras</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <ul>
                                    <li><a id="enlacePDF"  href="pdf-carreras/Finanzas y Fintech.pdf" class="cta">Finanzas y Fintech</a></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
          <!-- Contenido de los botones aquí -->
          <div id="elementor-tab-content-2" class="elementor-tab-content" data-tab="2" hidden="true">
                <table class="custom-table">
                    <thead>
                        <tr>
                            <th colspan="2" class="custom-table-title-2">Carreras</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <ul>
                                    <li><a id="enlacePDF"  href="pdf-carreras/Estudios de paz y resolucion de conflictos.pdf" class="cta">Estudios de Paz y Resolución de Conflictos</a></li>
                                    <li><a id="enlacePDF"  href="pdf-carreras/Derechos Humanos y Estudios Indígenas.pdf" class="cta">Derechos Humanos y Estudios Indígenas</a></li>
                                    <li><a id="enlacePDF"  href="pdf-carreras/Antropología Cultural y Social.pdf" class="cta">Antropología Cultural y Social</a></li>
                                    <li><a id="enlacePDF"  href="pdf-carreras/Derecho Internacional y Derechos Indígenas.pdf" class="cta">Derecho Internacional y Derechos Indígenas</a></li>
                                    <li><a id="enlacePDF"  href="pdf-carreras/Comunicación Intercultural.pdf" class="cta">Comunicación Intercultural</a></li>
                                    <li><a id="enlacePDF"  href="pdf-carreras/" class="cta">Turismo Sostenible y Cultural</a></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
        </div>
 <!-- Contenido de los botones aquí -->
 <div id="elementor-tab-content-3" class="elementor-tab-content" data-tab="3" hidden="true">
                <table class="custom-table">
                    <thead>
                        <tr>
                            <th colspan="2" class="custom-table-title-3">Carreras</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <ul>
                                    <li><a id="enlacePDF"  href="pdf-carreras/scs.pdf" class="cta">Salud y Ciencias de la Salud</a></li>
                                    <li><a id="enlacePDF"  href="pdf-carreras/Medicina Tradicional y Salud Indígena.pdf" class="cta">Medicina Tradicional y Salud Indígena</a></li>
                                    <li><a id="enlacePDF"  href="pdf-carreras/Cuidado personal y bienestar.pdf" class="cta">Cuidado Personal y Bienestar</a></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
         <!-- Contenido de los botones aquí -->
 <div id="elementor-tab-content-4" class="elementor-tab-content" data-tab="4" hidden="false">
                <table class="custom-table">
                    <thead>
                        <tr>
                            <th colspan="2" class="custom-table-title-4">Carreras</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <ul>
                                    <li><a id="enlacePDF"  href="pdf-carreras/Educación Intercultural Bilingüe.pdf" class="cta">Educación Intercultural Bilingüe</a></li>
                                    <li><a id="enlacePDF"  href="pdf-carreras/Educación a Distancia y Tecnología Educativa.pdf" class="cta">Educación a Distancia y Tecnología Educativa</a></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

  <!-- Contenido de los botones aquí -->
  <div id="elementor-tab-content-5" class="elementor-tab-content" data-tab="5" hidden="false">
                <table class="custom-table">
                    <thead>
                        <tr>
                            <th colspan="2" class="custom-table-title-5">Carreras</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <ul>
                                    <li><a id="enlacePDF"  href="pdf-carreras/Diseño y creatividad digital.pdf" class="cta">Diseño y Creatividad Digital</a></li>
                                    <li><a id="enlacePDF"  href="pdf-carreras/Tecnología de la Información (TI) y Desarrollo de Software.pdf" class="cta">Tecnología de la Información (TI) y Desarrollo de Software</a></li>
                                    <li><a id="enlacePDF"  href="pdf-carreras/Industrias 4.0.pdf" class="cta">Industria 4.0</a></li>
                                    <li><a id="enlacePDF"  href="pdf-carreras/Investigacion en inteligencia artificial y ciencia de datos.pdf" class="cta">Investigación en Inteligencia Artificial y Ciencia de Datos</a></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
   <!-- Contenido de los botones aquí -->
   <div id="elementor-tab-content-6" class="elementor-tab-content" data-tab="6" hidden="false">
                <table class="custom-table">
                    <thead>
                        <tr>
                            <th colspan="2" class="custom-table-title-6">Carreras</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <ul>
                                    <li><a id="enlacePDF"  href="pdf-carreras/Sostenibilidad y Energías Renovables.pdf" class="cta">Sostenibilidad y Energías Renovables<a></li>
                                    <li><a id="enlacePDF"  href="pdf-carreras/Desarrollo Sostenible.pdf" class="cta">Desarrollo Sostenible</a></li>
                                    <li><a id="enlacePDF"  href="pdf-carreras/Energía y Eficiencia Energética.pdf" class="cta">Energía y Eficiencia Energética</a></li>
                                    <li><a id="enlacePDF"  href="pdf-carreras/Ecologia y conservacion.pdf" class="cta">Ecología y Conservación</a></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

  
    <script>
        const buttons = document.querySelectorAll('.custom-button');
        const tabContents = document.querySelectorAll('.elementor-tab-content');

        buttons.forEach((button) => {
            button.addEventListener('click', () => {
                const tab = button.getAttribute('data-tab');
                const tabContent = document.querySelector(`#elementor-tab-content-${tab}`);

                // Oculta todos los contenidos
                tabContents.forEach((content) => {
                    content.hidden = true;
                });

                // Muestra u oculta el contenido correspondiente al botón
                tabContent.hidden = !tabContent.hidden;
            });
        });
    </script>



   
  
</body>
</html>