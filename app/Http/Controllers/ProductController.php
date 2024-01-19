<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

$prodArr = [
    ["id" => 23, "nombre" => "Libro", "desc" => "Mi libro, Luna de Plutón, ya está disponible en todas las librerías de Argentina, Chile, Uruguay, Paraguay, Bolivia, México, Perú, Colombia, Centroamérica, España, China, Japón, la Alemania Nazi, Guatemala, Sudáfrica, Brasil, la ciudad de Bagdad, el pueblo fantasma de Pripyat, Ucrania, la Antártida, el Polo Norte, Bangladesh, Corea del Norte, Namekusei, Ciudad Gótica, el Vaticano, el imperio Romano, Chernobyl, los abismos marinos, el estado de Pensilvania, Jerusalén, la isla de Poveglia en Italia, los poblados de Pompeya y Herculano, Camboya, Egipto, el pueblo de Baviera, Rusia, Turkmenistán, Italia, Inglaterra, Irak, la antigua Persia, el trecho de las Marianas", "imgUrl" => "/img/book.png", "precio" => 20],
    ["id" => 43, "nombre" => "Poly Station 5", "desc" => "1500 juegos preinstalados", "imgUrl" => "/img/console.png", "precio" => 150],
    ["id" => 65, "nombre" => "Caja Débil", "desc" => "Apta para guardar objetos no deseados", "imgUrl" => "/img/safe.png", "precio" => 350],
    ["id" => 75, "nombre" => "Sapato", "desc" => "Ole pa jugar al furbo viva el Beti", "imgUrl" => "/img/shoe.png", "precio" => 12],
    ["id" => 88, "nombre" => "Cyclops 2", "desc" => "Perfecto para ir a ver el Titanic con 4 amigos mas", "imgUrl" => "/img/submarine.png", "precio" => 250000]
];

class ProductController extends Controller
{
    //
}