<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Reporte File</title>
    
</head>
<body >
<style>
table {
  border-collapse: collapse;
}
td {
  border: black 3px solid;
}
  



</style>
<h3><i>La Paz {{date('d-m-Y')}}</i></h3>
<h3><center><i> Hospital De La Mujer La Paz Bolivia</i></center></h3> 

<h3><center><i>Reporte Files</i></center></h3>
<table class="table table-light table-hover" align="center"  cellpadding="8"  width="100%">
    <tr>
        <td>
<div class="form-group">
<label for="Ci" class="control-label" >{{'Ci'}}</label>
<br>
<input type="text" name="persona_id" id="persona_id" class="form-control {{$errors->has('persona_id')? 'is-invalid':''}}" value="{{ isset($file->persona_id)?$file->persona_id:old('persona_id')}}"
 required>
{!!  $errors->first('persona_id','<div class="invalid-feedback">:message</div>')!!}

</div>
</td>
<td>
<div class="form-group">
<label for="Certificado Estudio" class="control-label">{{'Certificado Estudio'}}</label>
<br>
<input type="text" name="certificado_estudio" id="certificado_estudio" class="form-control {{$errors->has('certificado_estudio')? 'is-invalid':''}}" value="<?php
 if( $file->certificado_estudio==1){
    echo "Entrego";
 }else{
        echo "No Entrego";
     }

?>"
 required>

{!!  $errors->first('certificado_estudio','<div class="invalid-feedback">:message</div>')!!}
</div>

</td>
</tr>

<tr>
    <td>
<div class="form-group">
<label for="Certificado Trabajo" class="control-label">{{'Certificado Trabajo'}}</label>
<br>
<input type="text" name="certificado_trabajo" id="certificado_trabajo" class="form-control {{$errors->has('certificado_trabajo')? 'is-invalid':''}}" value="
<?php
if( $file->certificado_trabajo==1){
    echo "Entrego";
 }else{
        echo "No Entrego";
     }
?>
"
 required>

{!!  $errors->first('certificado_trabajo','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
<td>
<div class="form-group">
<label for="Certificado Contraloria" class="control-label">{{'Certificado Contraloria'}}</label>
<br>
<input type="text" name="certificado_contraloria" id="certificado_contraloria" class="form-control {{$errors->has('certificado_contraloria')? 'is-invalid':''}}" value="
<?php
if( $file->certificado_contraloria==1){
    echo "Entrego";
 }else{
        echo "No Entrego";
     }
?>
"
 required>

 {!!  $errors->first('certificado_contraloria','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>

<tr>
    <td>
<div class="form-group">
<label for="Certificado Nacimiento" class="control-label">{{'Certificado Nacimiento'}}</label>
<br>
<input type="text" name="certificado_nacimiento" id="certificado_nacimiento" class="form-control {{$errors->has('certificado_nacimiento')? 'is-invalid':''}}" value="
<?php
if( $file->certificado_nacimiento==1){
    echo "Entrego";
 }else{
        echo "No Entrego";
     }
?>
" 
 required>

 {!!  $errors->first('certificado_nacimiento','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
<td>
<div class="form-group">
<label for="Certificado Matrimonio" class="control-label">{{'Certificado Matrimonio'}}</label>
<br>
<input type="text" name="certificado_matrimonio" id="certificado_matrimonio" class="form-control {{$errors->has('certificado_matrimonio')? 'is-invalid':''}}" value="
<?php
if( $file->certificado_matrimonio==1){
    echo "Entrego";
 }else{
        echo "No Entrego";
     }
?>
"
 required>

 {!!  $errors->first('certificado_matrimonio','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>

<tr>
    <td>
<div class="form-group">
<label for="Certificado Antecedentes Policiales" class="control-label">{{'Certificado Antecedentes Policiales'}}</label>
<br>
<input type="text" name="certificado_antecedentes_policiales" id="certificado_antecedentes_policiales" class="form-control {{$errors->has('certificado_antecedentes_policiales')? 'is-invalid':''}}" value="
<?php
if( $file->certificado_antecedentes_policiales==1){
    echo "Entrego";
 }else{
        echo "No Entrego";
     }
?>
"
 required>

 {!!  $errors->first('certificado_antecedentes_policiales','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
<td>

<div class="form-group">
<label for="Memorandum Designacion" class="control-label">{{'Memorandum Designacion'}}</label>
<br>
<input type="text" name="memorandum_designacion" id="memorandum_designacion"class="form-control {{$errors->has('memorandum_designacion')? 'is-invalid':''}}" value="
<?php
if( $file->memorandum_designacion==1){
    echo "Entrego";
 }else{
        echo "No Entrego";
     }
?>
"
 required>

 {!!  $errors->first('memorandum_designacion','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>

<tr>
    <td>
<div class="form-group">
<label for="Contrato Trabajo" class="control-label">{{'Contrato Trabajo'}}</label>
<br>
<input type="text" name="contrato_trabajo" id="contrato_trabajo" class="form-control {{$errors->has('contrato_trabajo')? 'is-invalid':''}}" value="
<?php
if( $file->contrato_trabajo==1){
    echo "Entrego";
 }else{
        echo "No Entrego";
     }
?>
"
 required>

 {!!  $errors->first('contrato_trabajo','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
<td>

<div class="form-group">
<label for="Acciones Personal" class="control-label">{{'Acciones Personal'}}</label>
<br>
<input type="text" name="acciones_personal" id="acciones_personal" class="form-control {{$errors->has('acciones_personal')? 'is-invalid':''}}" value="
<?php
if( $file->acciones_personal==1){
    echo "Entrego";
 }else{
        echo "No Entrego";
     }
?>
" 
 required>

 {!!  $errors->first('acciones_personal','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>

<tr>
    <td>
<div class="form-group">
<label for="Solicitud Vacaciones" class="control-label">{{'Solicitud Vacaciones'}}</label>
<br>
<input type="text" name="solicitud_vacaiones" id="solicitud_vacaiones" class="form-control {{$errors->has('solicitud_vacaiones')? 'is-invalid':''}}"  value="
<?php
if( $file->solicitud_vacaiones==1){
    echo "Entrego";
 }else{
        echo "No Entrego";
     }
?>
"
 required>

 {!!  $errors->first('solicitud_vacaiones','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
<td>

<div class="form-group">
<label for="Solicitud Permiso" class="control-label">{{'Solicitud Permiso'}}</label>
<br>
<input type="text" name="solicitud_permiso" id="solicitud_permiso" class="form-control {{$errors->has('solicitud_permiso')? 'is-invalid':''}}" value="
<?php
if( $file->solicitud_permiso==1){
    echo "Entrego";
 }else{
        echo "No Entrego";
     }
?>
"
 required>

 {!!  $errors->first('solicitud_permiso','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>

<tr>
    <td>
<div class="form-group">
<label for="Evaluacion Confirmacion" class="control-label">{{'Evaluacion Confirmacion'}}</label>
<br>
<input type="text" name="evaluacion_confirmacion" id="evaluacion_confirmacion" class="form-control {{$errors->has('evaluacion_confirmacion')? 'is-invalid':''}}" value="
<?php
if( $file->evaluacion_confirmacion==1){
    echo "Entrego";
 }else{
        echo "No Entrego";
     }
?>
"
 required>

 {!!  $errors->first('evaluacion_confirmacion','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>

<td>

<div class="form-group">
<label for="Evaluacion Desempeño" class="control-label">{{'Evaluacion Desempeño'}}</label>
<br>
<input type="text" name="evaluacion_desempeño" id="evaluacion_desempeño" class="form-control {{$errors->has('evaluacion_desempeño')? 'is-invalid':''}}" value="
<?php
if( $file->evaluacion_desempeño==1){
    echo "Entrego";
 }else{
        echo "No Entrego";
     }
?>
" 
 required>

 {!!  $errors->first('evaluacion_desempeño','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>

<tr>
    <td>
<div class="form-group">
<label for="Acta Seleccion" class="control-label">{{'Acta Seleccion'}}</label>
<br>
<input type="text" name="acta_seleccion" id="acta_seleccion" class="form-control {{$errors->has('acta_seleccion')? 'is-invalid':''}}"  value="
<?php
if( $file->acta_seleccion==1){
    echo "Entrego";
 }else{
        echo "No Entrego";
     }
?>
"
 required>

 {!!  $errors->first('acta_seleccion','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>

<td>

<div class="form-group">
<label for="Años Servicio" class="control-label">{{'Años Servicio'}}</label>
<br>
<input type="text" name="años_servicio" id="años_servicio" class="form-control {{$errors->has('años_servicio')? 'is-invalid':''}}"  value="
<?php
if( $file->años_servicio==1){
    echo "Entrego";
 }else{
        echo "No Entrego";
     }
?>
"
 required>

 {!!  $errors->first('años_servicio','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>

<tr>
    <td>
<div class="form-group">
<label for="Servicio Militar" class="control-label">{{'Servicio Militar'}}</label>
<br>
<input type="text" name="servicio_militar" id="servicio_militar" class="form-control {{$errors->has('servicio_militar')? 'is-invalid':''}}"  value="
<?php
if( $file->servicio_militar==1){
    echo "Entrego";
 }else{
        echo "No Entrego";
     }
?>
"
 required>


 {!!  $errors->first('servicio_militar','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
<td>

<div class="form-group">
<label for="Carnet Identidad" class="control-label">{{'Carnet Identidad'}}</label>
<br>
<input type="text" name="carnet_identidad" id="carnet_identidad" class="form-control {{$errors->has('carnet_identidad')? 'is-invalid':''}}" value="
<?php
if( $file->carnet_identidad==1){
    echo "Entrego";
 }else{
        echo "No Entrego";
     }
?>
"
 required>

{!!  $errors->first('carnet_identidad','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>

<tr>
   
    <td>
<div class="form-group">
<label for="Fotografia" class="control-label">{{'Fotografia'}}</label>
<br>
<input type="text" name="fotografia" id="fotografia" class="form-control {{$errors->has('fotografia')? 'is-invalid':''}}" value="
<?php
if( $file->fotografia==1){
    echo "Entrego";
 }else{
        echo "No Entrego";
     }
?>
"
 required>

{!!  $errors->first('fotografia','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
<td></td>
</tr>

</table>
<br>
<br>
<br>
<p><center>..........................</center>
    <center><i>Lic. Rosario Mendoza</i></center></p>
</body>
</html>
