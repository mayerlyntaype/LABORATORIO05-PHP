<html>
    <head>
        <title>Fabrica de Gaseosas</title>
    </head>
    <body>
<?php

{
    $precio_actual = floatval ($_POST['precio_actual']);
    $cantidad_unidades = floatval ($_POST['cantidad_unidades']);
    $nuevo_precio= $precio_actual * 0.05;
    $importe_compra =$nuevo_precio * $cantidad_unidades;
    $importe_descuento = 0.07 * $importe_compra;
    $importe_pagar = $importe_compra - $importe_descuento;
    $obsequio = 2 * $cantidad_unidades;

    echo 'Nuevo precio: ' . $nuevo_precio . "<br/>\n";
    echo 'Importe de Compra: ' . $importe_compra . "<br/>\n";
    echo 'Importe de Descuento: ' . $importe_descuento . "<br/>\n";
    echo 'Importe a Pagar: ' . $importe_pagar. "<br/>\n";
    echo 'Obsequio: ' . $obsequio . "<br/>\n";
}
 
?>
        <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
              
                    <tr>
                        <td>
                            <label for="precio_actual">Ingresa el precio actual de la gaseosa:</label>
                        </td>
                        <td>
                            <input name="precio_actual" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="cantidad_unidades">Ingresa la cantidad de unidades adquiridad:</label>
                        </td>
                        <td>
                            <input name="cantidad_unidades" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2" rowspan="1">
                            <input value="Procesar" type="submit" />
                        </td>
                    </tr>
            </table>
        </form>
    </body>
</html>