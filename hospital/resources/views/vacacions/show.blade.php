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

<h3><center><i>Reporte Vacaciones</i></center></h3>
<table class="table table-light table-hover" align="center"  cellpadding="8"  width="100%">

    <thead class="thead-light" >
    <tr>
            <th width="25%">#</th>   
            <th width="25%">Ci</th>
            <th width="25%">Inicio Vacacion</th>
            <th width="25%">Fin Vacacion</th>
           
           
            
    </thead>
    <tbody>
       
    @foreach($vacacions as $vacacion)
        <tr>
            
            <td width="25%"><center>{{$loop->iteration}}</center></td>
            <td width="25%"><center>{{$vacacion->persona_id}}</center></td>
            <td width="25%"><center>{{$vacacion->inicio_vacaciones}} </center></td>
            <td width="25%"><center>{{$vacacion->fin_vacaciones}}</center></td>
            
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