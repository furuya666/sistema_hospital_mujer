<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte Permisos</title>
</head>
<body>
<style>

table {
  border-collapse: collapse;
}
td,th {
  border: black 3px solid;
}
th{
    background: #E9ECEF ;
}
</style>
<h3><i>La Paz {{date('d-m-Y')}}</i></h3>
<h3><center><i> Hospital De La Mujer La Paz Bolivia</i></center></h3> 

<h3><center><i>Reporte Permisos</i></center></h3>
<table class="table table-light table-hover" align="center" cellpadding="8" border="1" width="100%">

    <thead class="thead-light" >
    <tr>
           
            <th width="20%">Ci</th>
            <th width="20%">Motivo</th>
            <th width="20%">Hora Inicio</th>
            <th width="20%">Inicio Permiso</th>
            <th width="20%">Fin Permiso</th>
           
            
    </thead>
    <tbody>
       
    @foreach($permisos as $permiso)
        <tr>
            
            
            <td width="20%"><center>{{$permiso->persona_id}}</center></td>
            <td width="20%"><center>
<?php
            if( $permiso->tipo_id==1){
                echo "Urgencia";
             }else{
                 if($permiso->tipo_id==2){
                    echo "Baja Medica";
                 }else{
                     if($permiso->tipo_id==3){
                          echo "Cumpleaños";
                     }else{
                         echo "Actividades Programadas";
                     }
                 }
             }


             ?>




            </center></td>
            <td width="15%"><center>{{$permiso->hora_ini}}</center></td>
           
            <td width="25%"><center>{{$permiso->ini_permiso}}</center></td>
            <td width="25%"><center>{{$permiso->fin_permiso}}</center></td>
         
        </tr>
        @endforeach
        
    </tbody>
</table>
<br>
<br>
<br>
<p><center>..........................</center>
    <center><i>Lic. Rosario Mendoza</i></center></p>
</body>
</html>