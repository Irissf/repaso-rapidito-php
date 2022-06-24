<?php

    class Persona{

        //atributos
        private $nombre;
        private $apellidos;
        private $edad;

        //asi es el constructor en php
        function __construct($nombre, $apellidos, $edad){
            //el this sería:
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->edad = $edad;
        }

        //get y set, vale para todos, si existe la propiedad la retorna
        function __get($propiedad){
            if(property_exists($this, $propiedad)){
                return $this->$propiedad;
            }
        }

        function __set($propiedad, $valor){
            if(property_exists($this, $propiedad)){
                $this->$propiedad = $valor;
            }
        }
        //se puede hacer uno para cada atributo

        //funciones
        function mayorEdad(){
            return $this->edad >= 18;
        }

        function nombreCompleto(){
            return $this->nombre." ".$this->apellidos;
        }

    }

    $persona = new Persona("Kara", "Foot Adr", 65);
    $persona2 = new Persona("Sonia", "Foot Adr", 75);

    echo $persona->nombreCompleto();
    echo "<br>";
    echo $persona2->nombreCompleto();


?>