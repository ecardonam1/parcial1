<?php

require ("clases/Persona.php");
$estudiante = new Persona();
$estudiante->nombre=$_POST['Nombre'];
$estudiante->apellido=$_POST['Apellido'];
$estudiante->genero=$_POST['Genero'];
$estudiante->telefono=$_POST['Telefono'];
$estudiante->email=$_POST['Email'];
$estudiante->tarjeta=$_POST['Tarjeta'];

require ("clases/Curso.php");
$curso=new Curso();
$curso->nombrec=$_POST['NombreC'];

 switch ($curso->nombrec) {
            case "Paginas web basico":
               $curso->precio=50;
                break;
            case "Paginas web intermedio":
                $curso->precio=125;
                break;

            case "Paginas web avanzado":
                 $curso->precio=200;
                break;
        }


echo '<center><h2>Informacion recolectada</h2></center><br>';
echo 'Estudiante: ',$estudiante->nombre,' ',$estudiante->apellido;
echo '<br>Genero: ',$estudiante->genero;
echo '<br>Telefono: ****-**',substr($estudiante->telefono,6);
echo '<br>Email: ',substr($estudiante->email,0,2),'...',substr($estudiante->email,strlen($estudiante->email)-3);
echo '<br>Tarjeta de credito: ****-****-****-',substr($estudiante->tarjeta,15);
echo '<br>Curso asignado: ',$curso->nombrec;
echo '<br>monto pagado: ',$curso->precio;
?>