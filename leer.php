<?php 
/*
$usuario = "designwe_jlorca1";
$contrasena = "juanhe2003"; 
$servidor = "localhost";
$basededatos = "designwe_notas";

$conexion = mysqli_connect($servidor, $usuario, $contrasena ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos );*/

$archivo = file("honorarios2.txt");
$ar=fopen("honorarios2.txt", "r");

$num=count($archivo);

//echo $num;

//var_dump($archivo);
$i=1;
foreach ($archivo as $row) {

	$row=trim($row).";";
/*
	if($i<13){

		fwrite($ar,$row);
	} else {
		fwrite($ar,$row.PHP_EOL);
		$i=1;
	}
*/
	//echo "[".$i."]".$row;
	//echo $row;
	if ($i==13){
		//echo "<br>";
		$i=0;
	}



$i++;






	//echo $row;
}

//var_dump($archivo);



for($i=0;$i<$num;$i++)
{
$linea=explode(";",$archivo[$i]);

foreach ($linea as $k=>&$n)
    {
        if($k>0)
        {$n = ucwords(mb_strtolower(trim($n),'UTF-8'));}}

//$linea=implode(";",$linea);
//$linea=str_replace(";", "','",$linea);
      

$sql = "INSERT INTO `honorarios` (
    `id`, 
    `nombre`, 
    `grado`, 
    `funcion`, 
    `profesion`,

    `region`,
    `moneda`, 
    

    `pago`, 
    `mensual`, 
    `inicio`, 
    `fin`,
    `observ`,

    `declaracion`, 
    `viaticos`
  ) VALUES (
  null,'".$linea[0]."', '".$linea[1]."', '".$linea[2]."', 

  '".$linea[3]."', '".$linea[4]."', '".$linea[5]."', '".$linea[6]."','".$linea[7]."','".$linea[8]."', '".$linea[9]."','".$linea[10]."', '".$linea[11]."', '".$linea[12]."');";
//mysql_query($sql);
echo $sql."<br />";


}
 ?>