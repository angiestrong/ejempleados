<?php
$Identificacion= $_POST['Identificacion'];
$NomApellidos=$_POST['NomApellidos'];
$Cargo=$_POST['Cargo'];
$Salario=$_POST['Salario'];

echo "La identificación del Empleado es: " . $Identificacion;
echo "El cargo del empleado es: " . $Cargo;
echo "Los nombres y apellidos del empleado son: " . $NomApellidos;
echo "El salario del empleado es: " . $Salario;
?>
