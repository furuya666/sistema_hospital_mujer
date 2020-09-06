<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte Permisos</title>
</head>
<body>
<style>

    td,th {
	border: 5px solid black;
}
th{
        color: blue;
    }
    table{
        border: 1px;
    }

</style>
<h3><i>La Paz {{date('d-m-Y')}}</i></h3>
<h3><center><i> Hospital De La Mujer La Paz Bolivia</i></center></h3> 

<h3><center><i>Reporte Permisos</i></center></h3>
<table class="table table-light table-hover" align="center" cellpadding="8" border="1" width="100%">

    <thead class="thead-light" >
    <tr>
           
            <th width="24%">Ci</th>
            <th width="25%">Motivo</th>
            <th width="25%">Fecha Inicio</th>
            <th width="26%">Hora Inicio</th>
            <th width="25%">Fecha Fin</th>
           
            
    </thead>
    <tbody>
       
    @foreach($permisos as $permiso)
        <tr>
            
            
            <td width="25%"><center>{{$permiso->persona_id}}</center></td>
            <td width="25%"><center>{{$permiso->tipo}}</center></td>
            <td width="25%"><center>{{$permiso->fecha_inicio}}</center></td>
            <td width="25%"><center>{{$permiso->hora_inicio}}</center></td>
            <td width="25%"><center>{{$permiso->fecha_fin}}</center></td>
           <!--<td><a href="{{ url('/permisos/' .$permiso->id)}}" class="btn btn-dark">Reporte</a></td> -->
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