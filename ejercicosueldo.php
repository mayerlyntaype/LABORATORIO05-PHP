<html>
    <head>
        <title>Sueldo</title>
    </head>
    <body>
<?php

{
    $hijos = floatval ($_POST['hijos']);
    $total_vendido = floatval ($_POST['total_vendido']);
    $sueldo_basico=600;
    $bonificacion=50*$hijos;
    $comision=$total_vendido*0.075;
    $sueldo_bruto=$sueldo_basico+$comision+$bonificacion;
    $descuento=$sueldo_bruto*0.11;
    $sueldo_neto=$sueldo_bruto-$descuento;
    echo 'Bonificacion: ' . $bonificacion . "<br/>\n";
    echo 'Comision: ' . $comision . "<br/>\n";
    echo 'Descuento: ' . $descuento . "<br/>\n";
    echo 'Sueldo basico: ' . $sueldo_basico . "<br/>\n";
    echo 'Sueldo bruto: ' . $sueldo_bruto . "<br/>\n";
    echo 'Sueldo neto: ' . $sueldo_neto . "<br/>\n";
}
 
?>
        <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
              
                    <tr>
                        <td>
                            <label for="hijos">Ingresa el valor de hijos en edad escolar:</label>
                        </td>
                        <td>
                            <input name="hijos" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="total_vendido">Ingresa el valor de total vendido:</label>
                        </td>
                        <td>
                            <input name="total_vendido" required="required" step="0.000001" type="number" />
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