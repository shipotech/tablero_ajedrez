<?php
/** 
 * ¿Cuantos cuadros hay en un tablero de ajedrez 8x8?
 * php version 7.2.17
 * 
 * @category Ejercicio
 * @package  Local
 * @author   Display Name <shipotech@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/shipotech
 * 
 * 1x1 = 8x8 = 64
 * 2x2 = 7x7 = 49
 * 3x3 = 6x6 = 36
 * 4x4 = 5x5 = 25
 * 5x5 = 4x4 = 16
 * 6x6 = 3x3 = 09
 * 7x7 = 2x2 = 04
 * 8x8 = 1x1 = 01
 */

$total = 0;
$cuadros = 0;
$casillas = 8;

for ($i = 1; $i <= $casillas; $i++) {
    $cuadros = $i * $i;
    $total = $total + $cuadros;
}
echo 'Hay ' . $total . ' cuadros en total';