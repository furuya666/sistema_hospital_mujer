<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte Faltas</title>
</head>
<body>
<style>

 
table {
  border-collapse: collapse;
}
th{
    background: #E9ECEF ;
}
td,th {
  border: black 3px solid;
}
</style>
<h3><i>La Paz {{date('d-m-Y')}}</i></h3>
<h3><center><i> Hospital De La Mujer La Paz Bolivia</i></center></h3> 

<h3><center><i>Reporte Faltas</i></center></h3>
    <table class="table table-light table-hover" align="center" cellpadding="8" width="100%">

    <thead class="thead-light" >
    <tr>
           
            <th width="25%%">#</th>
            <th width="25%">Ci</th>
            <th width="25%">Nombre Completo</th>
            <th width="25%">Fecha Falta</th> 
            
            
    </thead>
    <tbody>
       
    @foreach($faltas as $falta)
        <tr>
            
            <td width="20%"><center>{{$loop->iteration}}</center></td>
            <td width="25%"><center>{{$falta->persona_id}}</center></td>
            <td width="25%"><center>{{$falta->nombre}} {{$falta->apellido_paterno}} {{$falta->apellido_materno}}</center></td>
           
            <td width="25%"><center>{{$falta->fecha}}</center></td>
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