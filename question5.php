<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date's class</title>
    <link rel="stylesheet" href="css/question5.css"></link>
    <link rel="stylesheet" href="css/header.css"></link>
</head>
<body>
    <?php include 'templates/header.php' ?>
    <h1>Excercise solved on the console</h1>
    <?php
        class sortDates {
            // inicializar variables necesarias
            public $dates;

            function __construct() {
                //crear las 10 fechas en el constructor de la clase
                $this->dates = ["15-02-2024", "05-10-2024", "20-05-2024", "04-03-2024", "19-02-2024", "26-07-2023", "20-11-2023", "15-07-2024", "30-06-2023", "13-03-2024"]; 
            }

            //esta es la funcion de filtrar fechas que se encarga de contar cuantas son despues y antes de hoy
            function filterDates() {
                $previousDates = 0;
                $nextDates = 0;
                $currentDate = 0;
                $today = date("d-m-Y"); //obtener la fecha de hoy

                foreach($this->dates as $element) {
                    if ($element > $today) { // si ya fecha seleccionada es despues de hoy ,aumentar la variable nextDates en 1
                        $nextDates++; 
                    } else if ($element < $today) { // si ya fecha seleccionada es antes de hoy, aumentar la variable previousDates en 1
                        $previousDates++;
                    } else {
                        $currentDate++; //si ya fecha seleccionada es igual a la de hoy la variable currentDate aumenta en 1
                    }
                }

                // utilizar echo para insertar un codigo javascript que imprima las variables "previousDates", "nextDates" y "currentDate" en la consola
                echo '<Script>console.log(`Cantidad de fechas anteriores: ${'.$previousDates.'}\nCantidad de fechas posteriores: ${'.$nextDates.'}\nCantidad de fechas Iguales a la de hoy: ${'.$currentDate.'}`)</Script>';
            }
        }

        $test = new sortDates();
        $test = $test->filterDates();
    ?>
</body>
</html>