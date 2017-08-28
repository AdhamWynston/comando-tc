<div id="create" class="modal modal-fixed-footer">
    <div class="modal-content">
        {!! Form::open(['route'=>'clients.store','class'=>'left-alert','id'=>'formValidate']) !!}
        <fieldset>
            <legend>Informações Pessoais</legend>

            <div class="row">
                <div class="input-field col s12 m8 l9">
                    {!! Form::text('name', null, ['class'=>'validate', 'id'=>'name']) !!}
                    {!! Form::label('Name','Nome:',['class'=> 'active','for'=>'name']) !!}
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6 l3">
                    {!! Form::label('Birth_date','Data de Nascimento:') !!}
                    {!! Form::date('birth_date', \Carbon\Carbon::now(),['class' => '']) !!}
                </div>
                <div class="col s12 m6 l3">
                    {!! Form::label('Type_person','Tipo de Pessoa:') !!}
                    {!! Form::select('type_person', ['Física' => 'Física', 'Jurídica' => 'Jurídica']) !!}
                </div>
                <div class="col s12 m6 l3">
                    {!! Form::label('Document_number','CPF/CNPJ:') !!}
                    {!! Form::text('document_number', null, ['class'=>'form-control', 'id'=>'document_number']) !!}
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6 l3">
                    {!! Form::label('Principal_phone','Telefone:') !!}
                    {!! Form::text('principal_phone', null, ['class'=>'form-control', 'id'=>'principal_phone']) !!}
                </div>
                <div class="col s12 m6 l3">
                    {!! Form::label('Secundary_phone','Telefone(Opcional):') !!}
                    {!! Form::text('secundary_phone', null, ['class'=>'form-control', 'id'=>'secundary_phone']) !!}
                </div>
            </div>
        </fieldset>
        <fieldset>
            <legend>Endereço</legend>
            <div class="row">
                <div class="col s12 m8 l5">
                    {!! Form::label('Street','Rua:') !!}
                    {!! Form::text('street', null, ['class'=>'form-control', 'id'=>'street']) !!}
                </div>
                <div class="col s12 m4 l4">
                    {!! Form::label('Address','Bairro:') !!}
                    {!! Form::text('address', null, ['class'=>'form-control', 'id'=>'address']) !!}
                </div>
                <div class="col s12 m4 l3">
                    {!! Form::label('Number','Número:') !!}
                    {!! Form::text('number', null, ['class'=>'form-control', 'id'=>'number']) !!}
                </div>
            </div>
            <div class="row">
                <div class="col s12 m8 l5">
                    {!! Form::label('Complement','Complemento:') !!}
                    {!! Form::text('complement', null, ['class'=>'form-control', 'id'=>'complement']) !!}
                </div>
            </div>
            <div class="row">
                <div class="col s12 m8 l6">
                    {!! Form::label('City','Cidade:') !!}
                    {!! Form::text('city', null, ['class'=>'form-control', 'id'=>'city']) !!}
                </div>
                <div class="col s12 m6 l3">
                    {!! Form::label('State','Estado:') !!}
                    {!! Form::select('state', ['Selecione' => 'Selecione', 'Goiás' => 'Goiás','Mato Grosso' => 'Mato Grosso'], ['class'=>'form-control', 'id'=>'state']) !!}
                </div>
                <div class="col s12 m6 l3">
                    {!! Form::label('Zip_code','CEP:') !!}
                    {!! Form::text('zip_code', null, ['class'=>'form-control', 'id'=>'zip_code']) !!}
                </div>
            </div>
        </fieldset>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Cancelar</a>
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cadastrar</a>
    </div>
    {!! Form::close() !!}
</div>