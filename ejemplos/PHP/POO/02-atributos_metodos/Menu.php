<?php
class Menu
{
    private $enlaces = array();
    private $titulos = array();

    //funcion miembro
    public function cargar_option($link, $title)
    {
        //cuando se pone corchete vacio lo toma como lista y se inserta en el siguiente
        $this->enlaces[] = $link;
        $this->titulos[] = $title;
    }
    //la funcion mostrar no recibe parametros
    public function mostrar()
    {
        //mientras i sea menor q la cantidad de datos del arreglo, para eso se usa count que cuenta los elementos del arreglo
        for ($i = 0; $i < count($this->enlaces); $i++) {
            echo '<a href="' . $this->enlaces[$i] . '">' . $this->titulos[$i] . '</a>';

            //genera saltos de linea mientras no se llegue al ultimo
            if ($i < count($this->enlaces) - 1) {
                echo '<br>';
            }
        }
    }
}
