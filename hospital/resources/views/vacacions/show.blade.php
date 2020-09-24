<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte Vacacions</title>
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

<h3><center><i>Reporte Vacaciones</i></center></h3>
<table class="table table-light table-hover" align="center"  cellpadding="8"  width="100%">

    <thead class="thead-light" >
    <tr>
    <th width="10%">#</th>
            <th width="15%">Ci</th>
            <th width="35%">Nombre Completo</th>
            <th width="20%">Inicio Vacacion</th>
            <th width="20%">Fin Vacacion</th>
</tr>   
            
    </thead>
    <tbody>
       
    @foreach($vacacions as $vacacion)
        <tr>
            <td ><center>{{$loop->iteration}}</center></td>
            <td ><center>{{$vacacion->persona_id}}</center></td>
            <td ><center>{{$vacacion->nombre}} {{$vacacion->apellido_paterno}} {{$vacacion->apellido_materno}}</center></td>
            <td ><center>{{$vacacion->ini_vacacion}}</center></td>
            <td ><center>{{$vacacion->fin_vacacion}}  </center></td>  
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