<!-- Product Model Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Product_Model', 'Product Model:') !!}
    {!! Form::text('Product_Model', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Product Issue Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Product_Issue', 'Product Issue:') !!}
    {!! Form::text('Product_Issue', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Service Warranty Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Service_Warranty_Code', 'Service Warranty Code:') !!}
    {!! Form::text('Service_Warranty_Code', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Owner Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Owner', 'Owner:') !!}
    {!! Form::text('Owner', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Email', 'Email:') !!}
    {!! Form::email('Email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Contact Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Contact_Number', 'Contact Number:') !!}
    {!! Form::text('Contact_Number', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Address', 'Address:') !!}
    {!! Form::text('Address', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>