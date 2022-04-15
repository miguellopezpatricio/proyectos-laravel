# Prueba para Postal 3

Crear una una aplicación web con un formulario en el que se pueda introducir un número entre 1 y 10000000000 y que al enviar dicho formulario la aplicación tendrá que "adivinar" el número que se ha introducido cumpliendo las siguientes reglas:

- El valor introducido se almacenará en una variable. No se modificará ni copiará ni clonará para devolver el valor introducido.
- La aplicación hará una comprobación matemática con otros números para poder adivinar el resultado final (ver ejemplo).
- La aplicación deberá calcular el resultado de la forma más rápida y eficiente posible.

## Información sobre el proyecto

La aplicación fue realizada en Laravel versión 5.8 con el único requisito para su ejecución de que se tenga una versión de php 7.4.

Para que la aplicación "adivine" el número del usuario se optó por crear una función basada en el algoritmo de búsqueda binaria.

## Ejecución de la aplicación en local

Dentro de la carpeta del proyecto, arrancar el servidor con la instrucción:
~~~
php artisan serve
~~~

