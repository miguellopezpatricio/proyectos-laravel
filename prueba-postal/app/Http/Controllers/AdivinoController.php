<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdivinoController extends Controller
{


    public function formulario()
    {

        return view('formulario');
    }

    public function resultado(Request $request)
    {


/* Crear una una aplicación web con un formulario en el que se pueda introducir un número entre 1 y 10000000000 y que al enviar dicho formulario la aplicación tendrá que "adivinar" el número que se ha introducido cumpliendo las siguientes reglas:

- El valor introducido se almacenará en una variable. No se modificará ni copiará ni clonará para devolver el valor introducido.
- La aplicación hará una comprobación matemática con otros números para poder adivinar el resultado final (ver ejemplo).
- La aplicación deberá calcular el resultado de la forma más rápida y eficiente posible.   

ENVIAR SOLUCIÓN A: Antonio Araujo <antonio.araujo@postal3.es>

*/

        $numero = $request->input('numero');

        /* función con algoritmo de búsqueda binaria
        después, en la vista.blade se puede hacer bonito
         con bootstrap el formulario y el resultado */

        $min = 1;
        $max = 10000000000;


        $media = 0;

        while ($min <= $max) {
            $media = floor(($max + $min) / 2);
            if ($media == $numero) {
                break;
            } else if ($media > $numero) {
                $max = $media - 1;
            } else {
                $min = $media + 1;
            }
        }

        $resultado = $media;

        return view('resultado', ['resultado' => $resultado]);
    }


    public function store(){
        request() -> validate([
            'numero' => 'required'
        ]);
    }


}
