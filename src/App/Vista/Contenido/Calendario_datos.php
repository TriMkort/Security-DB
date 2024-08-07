<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="../css/Contenido/Responsive.css">
    <link rel="stylesheet" href="../css/Contenido/Perfil_links.css">
    <link rel="stylesheet" href="../css/Calendario/grafica.css">
    <link rel="stylesheet" href="../css/Calendario/calendar.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <title>Calendario</title>

</head>

<body>
<div class="Responsive">

    <header>
        <nav class="lista-perfil">
            <img src="../img/LogoEnd.png" alt="">
            <ul id="lista-salida">
                <li><a href="../../Controlador/salir.php"> Cerrar Sesion </a></li>
            </ul>
        </nav>  
    </header> 

    <div class="contenido-lista-datos">
        <nav id="lista-datos">
                <li> <a href="Formulario_registro.php"> Registro del Personal </a></li>
                <li> <a href="Modificacion_datos.php"> Modificacion de datos </a></li>
                <!--<li> <a href="Contenido/Calendario_datos.php"> Calendario datos </a></li> -->
                <li> <a href="buscar_usuario.php"> Consulta  </a></li>   
        </nav>

    <section> 

        <div class="root">
            <div class="calendar" id="calendar">

            </div>
        </div>
        <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/es.js"></script>
        <script  type="text/javascript" src="../scripts/calendar.js"></script>
        <script type="text/javascript">
            let calendar = new Calendar('calendar');
            calendar.getElement().addEventListener('change', e => {
                console.log(calendar.value().format('LLL'));
            });
        </script>

        <div class="chart-container">
            <canvas id="Grafica Estudiantil"></canvas>
        </div>

        <script src="../scripts/grafica_datos.js"></script>

    </section>
    
</div>

</body>
</html>


<!--
    <h1 class="title">Calendario</h1>

        <div class="calendar">
            <div class="calendar__info">
                <div class="calendar__prev" id="prev-month">&#9664;</div>
                <div class="calendar__month" id="month"></div>
                <div class="calendar__year" id="year"></div>
                <div class="calendar__next" id="next-month">&#9654;</div>
            </div>

            <div class="calendar__week">
                <div class="calendar__day calendar__item">Lunes</div>
                <div class="calendar__day calendar__item">Martes</div>
                <div class="calendar__day calendar__item">Miércoles</div>
                <div class="calendar__day calendar__item">Jueves</div>
                <div class="calendar__day calendar__item">Viernes</div>
                <div class="calendar__day calendar__item">Sábado</div>
                <div class="calendar__day calendar__item">Domingo</div>
            </div>

            <div class="calendar__dates" id="dates"></div>
        </div>

        <script src="../scripts/scripts1.js"></script>
            -->

    
        
    
    
