<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Respuesta
 *
 * @author ronald
 */
class Respuesta
{

    /**
     * Funcion que ordena segun el tipo si es ASC = ASCENDENTEMENTE , 
     * DESC =DESENDENTE
     * @param type $tipo
     * @return type
     */
    public function order($tipo = 'DESC')
    {
        if (isset($tipo['ASC'])) {
            asort($_SESSION["name"]);
            return $_SESSION["name"];
        }
        if (isset($tipo['DESC'])) {
            arsort($_SESSION["name"]);
            return $_SESSION["name"];
        }
    }
    /**
     * Funcion que crear con la session el arreglo de los numeros
     * @param type $param
     * @return type
     */
    public function CreateArreglo($param)
    {

        foreach ($param as $key => $value) {
            if (!in_array($value, $_SESSION["name"])) {
                $_SESSION["name"][] = $value;
            }
        }
        return $_SESSION["name"];
    }
    /**
     * Funcion de limpiar el arreglo
     * @param type $data
     */
    public function limpiar($data)
    {
        if (isset($data)) {
            unset($_SESSION);
            session_destroy();
        }
    }
    /**
     * Funcion que prosesa la imformacion de un post
     * @param type $POST
     */
    public function imprime($POST)
    {
        $this->limpiar($POST['limpiar']);
        if (!(isset($POST['DESC']) || isset($POST['ASC']))) {
            foreach ($this->CreateArreglo($POST['name']) as $key => $value) {
                echo $value . ' ';
            }
        }
            


        if (isset($POST['DESC']) || isset($POST['ASC'])) {
            foreach ($this->order($POST) as $key => $value) {
                echo $value . ' ';
            }
        }
    }

}
