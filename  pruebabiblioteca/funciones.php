<?php

function ejemploDeTipoBoolean() {
    var_dump((bool) 0);
    var_dump((bool) 1);
    var_dump((bool) "hola");
    var_dump((bool) array());
    var_dump((bool) "");
    echo "<br>";
}

function operaciones() {
    var_dump(25/7);
    echo "<br>";
    var_dump((int)(25/7));
    echo "<br>";
    var_dump(round(25/7));//redondea
}

function cadenas() {
    echo 'cadena con comillas simples'.'<br>';//para concatenar
    echo "cadena con comillas dobles";
}

function asignacionDeVariables() {
    echo 'br';
    $x = 5;
    $y =2;
    
    echo "x = $x <br> y = $y";//conviene utilizar comillas dobles
    
    $x = $y + 89;
    echo "<br> x = $x <br> y = $y";
}

function saberElTipoVariable($x) {
    $y =  gettype($x);
    echo "<br> $y";
}

function determinarTipoVariable($x) {
    if(is_int($x)){//hay otros metodos para determinar otras tipos de variables
        echo "<br> esta variable es de tipo entero";
    } else {
        echo "<br> esta variable no es de tipo entero";
    }
    
}

function matriz() {
    $matriz = array('hola','mundo','php');
    
    echo is_array($matriz) ? "<br> es matriz" : "<br> no es matriz";
    
}

function definiciones() {
    $var = "";
    
    if(isset($var)) {//muestra true si esta asignado con un signo igual no importa si es cero o texto vacio
        echo "<br> si esta definido este mensaje lo estas viendo";
    }
    unset($var);//elimina una variable
    var_dump(isset($var));
    
    $var2 = 3;
    
    var_dump(isset($var, $var2));
}

function definicionDeConstantes() {
    define("CANTIDAD_MAXIMA", 2000);
    define("NUMERO_LLANTAS", 23);
            
    echo CANTIDAD_MAXIMA*NUMERO_LLANTAS;   //para imprimirlos no utilizar comillas ni nada
}

ejemploDeTipoBoolean();
operaciones();
cadenas();
asignacionDeVariables();
saberElTipoVariable(FALSE);
determinarTipoVariable(89);
matriz();
definiciones();
definicionDeConstantes();
?>

