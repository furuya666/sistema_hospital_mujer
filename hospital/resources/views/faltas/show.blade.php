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
</style>
<h3><i>La Paz {{date('d-m-Y')}}</i></h3>
<h3><center><i> Hospital De La Mujer La Paz Bolivia</i></center></h3> 

<h3><center><i>Reporte Faltas</i></center></h3>
    <table class="table table-light table-hover" align="center" cellpadding="8" width="100%">

    <thead class="thead-light" >
    <tr>
           
            <th width="30%">#</th>
            <th width="35%">Ci</th>
            <th width="35%">Fecha de Falta</th> 
            
    </thead>
    <tbody>
       
    @foreach($faltas as $falta)
        <tr>
            
            <td width="35%"><center>{{$loop->iteration}}</center></td>
            <td width="35%"><center>{{$falta->persona_id}}</center></td>
            <td width="35%"><center>{{$falta->fecha}}</center></td>
           
         
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