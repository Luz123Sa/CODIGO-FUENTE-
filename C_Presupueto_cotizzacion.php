<table cellspacing="0" style="width: 100%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 11pt;padding:1mm;">
        <tr>
            <th style="width: 87%; text-align: right;">TOTAL : </th>
            <th style="width: 13%; text-align: right;">&#36; <? echo number_format($sumador_total,2);?></th>
        </tr>
    </table>
	*** Precios incluyen IVA ***
	<br>
          <table cellspacing="0" style="width: 100%; text-align: left; font-size: 11pt;">
            <tr>
                <td style="width:50%;text-align:right">Condiciones de pago: </td>
                <td style="width:50%; ">&nbsp;<? echo $condiciones; ?></td>
            </tr>
			<tr>
                <td style="width:50%;text-align:right">Validez de la oferta: </td>
                <td style="width:50%; ">&nbsp;<? echo $validez; ?></td>
            </tr>
			<tr>
                <td style="width:50%;text-align:right">Tiempo de entrega: </td>
                <td style="width:50%; ">&nbsp;<? echo $entrega; ?></td>
            </tr>
        </table>
    <br><br><br><br>
	
	  <table cellspacing="10" style="width: 100%; text-align: left; font-size: 11pt;">
			 <tr>
                <td style="width:33%;text-align: center;border-top:solid 1px">Vendedor</td>
               <td style="width:33%;text-align: center;border-top:solid 1px">Cotizado</td>
               <td style="width:33%;text-align: center;border-top:solid 1px">Aceptado Cliente</td>
            </tr>
        </table>

</page>

<?
$date=date("Y-m-d H:i:s");
$insert=mysqli_query($con,"INSERT INTO cotizaciones_demo VALUES ('','$numero_cotizacion','$date','$atencion','$tel1','$empresa','$tel2','$email','$condiciones','$validez','$entrega')");
$delete=mysqli_query($con,"DELETE FROM tmp_cotizacion WHERE session_id='".$session_id."'");
?>