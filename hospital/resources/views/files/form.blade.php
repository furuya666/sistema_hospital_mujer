<table class="table table-light table-hover" align="center">
    <tr>
        <td width="50%">
        <div class="form-group">
<label for="Fotografia" class="control-label">{{'Fotografia'}}</label>
<br>
<select name="fotografia" id="fotografia" class="form-control {{$errors->has('fotografia')? 'is-invalid':''}}" required>
            <option value="{{ isset($file->fotografia)?$file->fotografia:old('fotografia')}}" selected="selected"  >
            <?php
           if( $file->fotografia==1){
              echo "Entrego";
           }else{
                  echo "No Entrego";
               }
           ?>
            </option>
            <option value="1">Entrego</option>
            <option value="2">No Entrego</option>
        </select>
{!!  $errors->first('fotografia','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
<td>
<div class="form-group">
<label for="Certificado Estudio" class="control-label">{{'Certificado Estudio'}}</label>
<br>
<select name="certificado_estudio" id="certificado_estudio" class="form-control {{$errors->has('certificado_estudio')? 'is-invalid':''}}" required>
            <option value="{{ isset($file->certificado_estudio)?$file->certificado_estudio:old('certificado_estudio')}}" selected="selected"  >
            <?php
           if( $file->certificado_estudio==1){
              echo "Entrego";
           }else{
                  echo "No Entrego";
               }
           ?>

            </option>
            <option value="1">Entrego</option>
            <option value="2">No Entrego</option>
        </select>
{!!  $errors->first('certificado_estudio','<div class="invalid-feedback">:message</div>')!!}
</div>

</td>
</tr>

<tr>
    <td>
<div class="form-group">
<label for="Certificado Trabajo" class="control-label">{{'Certificado Trabajo'}}</label>
<br>
<select name="certificado_trabajo" id="certificado_trabajo" class="form-control {{$errors->has('certificado_trabajo')? 'is-invalid':''}}" required>
            <option value="{{ isset($file->certificado_trabajo)?$file->certificado_trabajo:old('certificado_trabajo')}}" selected="selected"  >

            <?php
           if( $file->certificado_trabajo==1){
              echo "Entrego";
           }else{
                  echo "No Entrego";
               }
           ?>
            </option>
            <option value="1">Entrego</option>
            <option value="2">No Entrego</option>
        </select>
{!!  $errors->first('certificado_trabajo','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
<td>
<div class="form-group">
<label for="Certificado Contraloria" class="control-label">{{'Certificado Contraloria'}}</label>
<br>
<select name="certificado_contraloria" id="certificado_contraloria" class="form-control {{$errors->has('certificado_contraloria')? 'is-invalid':''}}" required>
            <option value="{{ isset($file->certificado_contraloria)?$file->certificado_contraloria:old('certificado_contraloria')}}" selected="selected"  >
            <?php
           if( $file->certificado_contraloria==1){
              echo "Entrego";
           }else{
                  echo "No Entrego";
               }
           ?>


            </option>
            <option value="1">Entrego</option>
            <option value="2">No Entrego</option>
        </select>
 {!!  $errors->first('certificado_contraloria','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>

<tr>
    <td>
<div class="form-group">
<label for="Certificado Nacimiento" class="control-label">{{'Certificado Nacimiento'}}</label>
<br>
<select name="certificado_nacimiento" id="certificado_nacimiento" class="form-control {{$errors->has('certificado_nacimiento')? 'is-invalid':''}}" required>
            <option value="{{ isset($file->certificado_nacimiento)?$file->certificado_nacimiento:old('certificado_nacimiento')}}" selected="selected"  >
            <?php
           if( $file->certificado_nacimiento==1){
              echo "Entrego";
           }else{
                  echo "No Entrego";
               }
           ?>

            </option>
            <option value="1">Entrego</option>
            <option value="2">No Entrego</option>
        </select>
 {!!  $errors->first('certificado_nacimiento','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
<td>
<div class="form-group">
<label for="Certificado Matrimonio" class="control-label">{{'Certificado Matrimonio'}}</label>
<br>
<select name="certificado_matrimonio" id="certificado_matrimonio" class="form-control {{$errors->has('certificado_matrimonio')? 'is-invalid':''}}" required>
            <option value="{{ isset($file->certificado_matrimonio)?$file->certificado_matrimonio:old('certificado_matrimonio')}}" selected="selected"  >
            <?php
           if( $file->certificado_matrimonio==1){
              echo "Entrego";
           }else{
                  echo "No Entrego";
               }
           ?>
            </option>
            <option value="1">Entrego</option>
            <option value="2">No Entrego</option>
        </select>
 {!!  $errors->first('certificado_matrimonio','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>

<tr>
    <td>
<div class="form-group">
<label for="Certificado Antecedentes Policiales" class="control-label">{{'Certificado Antecedentes Policiales'}}</label>
<br>
<select name="certificado_antecedentes_policiales" id="certificado_antecedentes_policiales" class="form-control {{$errors->has('certificado_antecedentes_policiales')? 'is-invalid':''}}" required>
            <option value="{{ isset($file->certificado_antecedentes_policiales)?$file->certificado_antecedentes_policiales:old('certificado_antecedentes_policiales')}}" selected="selected"  >
            <?php
           if( $file->certificado_antecedentes_policiales==1){
              echo "Entrego";
           }else{
                  echo "No Entrego";
               }
           ?>
            </option>
            <option value="1">Entrego</option>
            <option value="2">No Entrego</option>
        </select>
 {!!  $errors->first('certificado_antecedentes_policiales','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
<td>

<div class="form-group">
<label for="Memorandum Designacion" class="control-label">{{'Memorandum Designacion'}}</label>
<br>
<select name="memorandum_designacion" id="memorandum_designacion" class="form-control {{$errors->has('memorandum_designacion')? 'is-invalid':''}}" required>
            <option value="{{ isset($file->memorandum_designacion)?$file->memorandum_designacion:old('memorandum_designacion')}}" selected="selected"  >
            <?php
           if( $file->memorandum_designacion==1){
              echo "Entrego";
           }else{
                  echo "No Entrego";
               }
           ?>
            </option>
            <option value="1">Entrego</option>
            <option value="2">No Entrego</option>
        </select>
 {!!  $errors->first('memorandum_designacion','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>

<tr>
    <td>
<div class="form-group">
<label for="Contrato Trabajo" class="control-label">{{'Contrato Trabajo'}}</label>
<br>
<select name="contrato_trabajo" id="contrato_trabajo" class="form-control {{$errors->has('contrato_trabajo')? 'is-invalid':''}}" required>
            <option value="{{ isset($file->contrato_trabajo)?$file->contrato_trabajo:old('contrato_trabajo')}}" selected="selected"  >
            <?php
           if( $file->contrato_trabajo==1){
              echo "Entrego";
           }else{
                  echo "No Entrego";
               }
           ?>
            </option>
            <option value="1">Entrego</option>
            <option value="2">No Entrego</option>
        </select>
 {!!  $errors->first('contrato_trabajo','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
<td>

<div class="form-group">
<label for="Acciones Personal" class="control-label">{{'Acciones Personal'}}</label>
<br>
<select name="acciones_personal" id="acciones_personal" class="form-control {{$errors->has('acciones_personal')? 'is-invalid':''}}" required>
            <option value="{{ isset($file->acciones_personal)?$file->acciones_personal:old('acciones_personal')}}" selected="selected"  >
            <?php
           if( $file->acciones_personal==1){
              echo "Entrego";
           }else{
                  echo "No Entrego";
               }
           ?>
            </option>
            <option value="1">Entrego</option>
            <option value="2">No Entrego</option>
        </select>
 {!!  $errors->first('acciones_personal','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>

<tr>
    <td>
<div class="form-group">
<label for="Solicitud Vacaciones" class="control-label">{{'Solicitud Vacaciones'}}</label>
<br>
<select name="solicitud_vacaiones" id="solicitud_vacaiones" class="form-control {{$errors->has('solicitud_vacaiones')? 'is-invalid':''}}" required>
            <option value="{{ isset($file->solicitud_vacaiones)?$file->solicitud_vacaiones:old('solicitud_vacaiones')}}" selected="selected"  >
            <?php
           if( $file->solicitud_vacaiones==1){
              echo "Entrego";
           }else{
                  echo "No Entrego";
               }
           ?>
            </option>
            <option value="1">Entrego</option>
            <option value="2">No Entrego</option>
        </select>
 {!!  $errors->first('solicitud_vacaiones','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
<td>

<div class="form-group">
<label for="Solicitud Permiso" class="control-label">{{'Solicitud Permiso'}}</label>
<br>
<select name="solicitud_permiso" id="solicitud_permiso" class="form-control {{$errors->has('solicitud_permiso')? 'is-invalid':''}}" required>
            <option value="{{ isset($file->solicitud_permiso)?$file->solicitud_permiso:old('solicitud_permiso')}}" selected="selected"  >
            <?php
           if( $file->solicitud_permiso==1){
              echo "Entrego";
           }else{
                  echo "No Entrego";
               }
           ?>
            </option>
            <option value="1">Entrego</option>
            <option value="2">No Entrego</option>
        </select>
 {!!  $errors->first('solicitud_permiso','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>

<tr>
    <td>
<div class="form-group">
<label for="Evaluacion Confirmacion" class="control-label">{{'Evaluacion Confirmacion'}}</label>
<br>
<select name="evaluacion_confirmacion" id="evaluacion_confirmacion" class="form-control {{$errors->has('evaluacion_confirmacion')? 'is-invalid':''}}" required>
            <option value="{{ isset($file->evaluacion_confirmacion)?$file->evaluacion_confirmacion:old('evaluacion_confirmacion')}}" selected="selected"  >
            <?php
           if( $file->evaluacion_confirmacion==1){
              echo "Entrego";
           }else{
                  echo "No Entrego";
               }
           ?>
            </option>
            <option value="1">Entrego</option>
            <option value="2">No Entrego</option>
        </select>
 {!!  $errors->first('evaluacion_confirmacion','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>

<td>

<div class="form-group">
<label for="Evaluacion Desempeño" class="control-label">{{'Evaluacion Desempeño'}}</label>
<br>
<select name="evaluacion_desempeño" id="evaluacion_desempeño" class="form-control {{$errors->has('evaluacion_desempeño')? 'is-invalid':''}}" required>
            <option value="{{ isset($file->evaluacion_desempeño)?$file->evaluacion_desempeño:old('evaluacion_desempeño')}}" selected="selected"  >
            <?php
           if( $file->evaluacion_desempeño==1){
              echo "Entrego";
           }else{
                  echo "No Entrego";
               }
           ?>
            </option>
            <option value="1">Entrego</option>
            <option value="2">No Entrego</option>
        </select>
 {!!  $errors->first('evaluacion_desempeño','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>

<tr>
    <td>
<div class="form-group">
<label for="Acta Seleccion" class="control-label">{{'Acta Seleccion'}}</label>
<br>
<select name="acta_seleccion" id="acta_seleccion" class="form-control {{$errors->has('acta_seleccion')? 'is-invalid':''}}" required>
            <option value="{{ isset($file->acta_seleccion)?$file->acta_seleccion:old('acta_seleccion')}}" selected="selected"  >
            <?php
           if( $file->acta_seleccion==1){
              echo "Entrego";
           }else{
                  echo "No Entrego";
               }
           ?>
            </option>
            <option value="1">Entrego</option>
            <option value="2">No Entrego</option>
        </select>
 {!!  $errors->first('acta_seleccion','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>

<td>

<div class="form-group">
<label for="Años Servicio" class="control-label">{{'Años Servicio'}}</label>
<br>
<select name="años_servicio" id="años_servicio" class="form-control {{$errors->has('años_servicio')? 'is-invalid':''}}" required>
            <option value="{{ isset($file->años_servicio)?$file->años_servicio:old('años_servicio')}}" selected="selected"  >
            <?php
           if( $file->años_servicio==1){
              echo "Entrego";
           }else{
                  echo "No Entrego";
               }
           ?>
            </option>
            <option value="1">Entrego</option>
            <option value="2">No Entrego</option>
        </select>
 {!!  $errors->first('años_servicio','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>

<tr>
    <td>
<div class="form-group">
<label for="Servicio Militar" class="control-label">{{'Servicio Militar'}}</label>
<br>
<select name="servicio_militar" id="servicio_militar" class="form-control {{$errors->has('servicio_militar')? 'is-invalid':''}}" required>
            <option value="{{ isset($file->servicio_militar)?$file->servicio_militar:old('servicio_militar')}}" selected="selected"  >
            <?php
           if( $file->servicio_militar==1){
              echo "Entrego";
           }else{
                  echo "No Entrego";
               }
           ?>
            </option>
            <option value="1">Entrego</option>
            <option value="2">No Entrego</option>
        </select>
 {!!  $errors->first('servicio_militar','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
<td>

<div class="form-group">
<label for="Carnet Identidad" class="control-label">{{'Carnet Identidad'}}</label>
<br>
<select name="carnet_identidad" id="carnet_identidad" class="form-control {{$errors->has('carnet_identidad')? 'is-invalid':''}}" required>
            <option value="{{ isset($file->carnet_identidad)?$file->carnet_identidad:old('carnet_identidad')}}" selected="selected"  >
            <?php
           if( $file->carnet_identidad==1){
              echo "Entrego";
           }else{
                  echo "No Entrego";
               }
           ?>
            </option>
            <option value="1">Entrego</option>
            <option value="2">No Entrego</option>
        </select>
{!!  $errors->first('carnet_identidad','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>
</tr>

<tr>
<td>
<div class="form-group">
<label for="Telefono" class="control-label">{{'Pdf'}}</label>
<br>
<a href="{{ asset('storage').'/'.$file->pdf}}"><i class="fas fa-file-pdf"></i></a>
<input type="file" name="pdf" id="pdf" class="form-control {{$errors->has('pdf')? 'is-invalid':''}}" value="{{ isset($file->pdf)?$file->pdf:old('pdf')}}"

>
{!!  $errors->first('pdf','<div class="invalid-feedback">:message</div>')!!}
</div>
</td>

</tr>
<tr>
    <td><input type="submit" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}" class="btn btn-success">
<a href="{{ url('files')}}" class="btn btn-secondary">Regresar</a></td>
</tr>
</table>


