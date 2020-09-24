<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte Persona</title>
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

<h3><center><i>Reporte Personal Telefonos</i></center></h3>
<table class="table table-light table-hover" align="center"  cellpadding="8"  width="100%">

    <thead class="thead-light" >
    <tr>
    <th width="10%">#</th>
            <th width="20%">CI</th>
            <th class="b" width="40%">Nombre Completo</th>
            <th class="b" width="15%">Especialidad</th>
            <th class="e" width="15%">Telefono</th>
</tr>   
            
    </thead>
    <tbody>
       
    @foreach($personas as $persona)
        <tr>
            
        <td width="10%"><center>{{$loop->iteration}}</center></td>
            <td><center>{{$persona->id}}</center></td>
            <td><center>{{$persona->nombre}} {{$persona->apellido_paterno}} {{$persona->apellido_materno}}</center></td>
           <td class="b"><center><?php
            if( $persona->especialidad_id==1){
                echo "urologia";
             }else{
                 if($persona->especialidad_id==2){
                    echo "dermatologia";
                 }else{
                     if($persona->especialidad_id==3){
                          echo "oftalmologia";
                     }else{
                         echo "traumatologia";
                     }
                 }
             }
           ?></center></td>
            <td class="e"><center>{{$persona->telefono}}</center</td>
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