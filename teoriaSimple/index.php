<h1> codigo html </h1>
<?php
    //esto se ve
    echo "<h1>Hello</h1>";

    /*esto por las sombras: consola*/
    print("hola desde las sombras");

    //____________________________________ VARIABLES __________________________________

    $texto = "un texto";
    $altura = 170;
    $textoConVariable = "Repaso de PHP con $altura";

    //____________________________________ IMPRIMIR _____________________________________
    
    //concatenación con punto y no con +
    echo "<h2>".$texto."</h2>";
    echo "altura: ".$altura."cm";

    //_____________________________________ CONCATENAR _________________________________
    
    //concatenar a una variable, con .= en vez de +=
    $texto .= " con más cosas";
    echo "<h2>".$texto."</h2>";

    //_______________________________________ GET _______________________________________
    
    //GET => variables que me llegan por la url http://localhost/repaso%20rapidito%20php/?nombre=Iris
    //si queremos más variables separamos con & ...?nombre=Iris&altura=165
    echo "<hr>";
    $nombre = compararNombre("nombre");
    echo "El nombre es: ".$nombre;

    //________________________________ CONDICIONALES ___________________________________
    
    echo "<br>";
    if($altura >= 180){
        echo "Eres una persona alta";
    }else{
        echo "Casi eres alto";
    }
    echo "<br>";
    echo ($altura >= 180 ? "Eres una persona alta" : "Casi eres alto");
    
    //_____________________________________ SWITCH ______________________________________

    echo "<hr>";
    $valor = 2;
    switch ($valor) {
        case 1:
            echo "valor 1";
            break;
        case 2:
            echo "valor 2";
            break;
        case 3:
            echo "valor 3";
            break;
        default:
            echo "nada";
            break;
    }


    //___________________________________ FUNCIONES ______________________________________
    echo "<hr>";

    function compararNombre($parametro){
        //comprobar que existe el valor que nos llega, por si no llega nada
        if(isset($_GET[$parametro])){
            $nombre = $_GET[$parametro];
        }else{
            $nombre = "Maria";
        }
        return $nombre;
    }

    //funciones de flecha
    

    //_____________________________________ BUCLES FOR ______________________________________
    $personas = ["Iris","Maria","Marta"];
    
    echo "<br>";
    echo $personas[2];
    echo "<br>";
    for ($i=0; $i < count($personas); $i++) { 
        echo $personas[$i]." , ";
    }
    echo "<br>";
    foreach ($personas as $persona) {
        echo $persona." , ";
    }

    //_____________________________________ DO WHILE ______________________________________

    $numInicial = 0;
    do {
        echo "<br>";
        echo "num: ".$numInicial;
        $numInicial++;
    } while ($numInicial < 3);

    //_____________________________________ WHILE ______________________________________

    $num = 0;
    while ($num <= 3) {
        echo "<br>";
        echo "num while: ".$num;
        $num++;
    }
?>