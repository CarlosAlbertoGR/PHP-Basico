<?php
echo strlen("Carlos Alberto Gersenowies Rosas")."<br>";//contador de caracteres
echo str_word_count("Carlos Alberto Gersenowies Rosas")."<br>";//contador de palabras
echo strrev("carlos alberto gersenowies rosas")."<br>";//escribir alrevez
echo strripos("hola mundo hola", "hola")."<br>";//da la pocicion de una palabra en un enunciado iniciando por el cero
echo str_replace("world", "dolli", "hello world")."<br>";//sustituye una palabra en un enunciado
echo str_replace("aqui", "estar", "aqui en clase")."<br>";
//Declaración de constantes.
//Para declarar una constante utilizamos la función define ()
define("YO","Carlos Alberto Gersenowies Rosas");
echo YO."<br>";
echo "<img src='BOTON.swf'>";//mostrar imagen
?>