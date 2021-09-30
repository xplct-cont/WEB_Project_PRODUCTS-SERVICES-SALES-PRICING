<!-- Sold Product Brand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Sold_Product_Brand', 'Sold Product Brand:') !!}
    {!! Form::text('Sold_Product_Brand', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Sold Product Model Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Sold_Product_Model', 'Sold Product Model:') !!}
    {!! Form::text('Sold_Product_Model', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Date Sold Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Date_Sold', 'Date Sold:') !!}
    {!! Form::text('Date_Sold', null, ['class' => 'form-control','id'=>'Date_Sold']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#Date_Sold').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Customer Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Customer_Name', 'Customer Name:') !!}
    {!! Form::text('Customer_Name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Contact Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Contact_Number', 'Contact Number:') !!}
    {!! Form::text('Contact_Number', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Product Warranty Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Product_Warranty_Code', 'Product Warranty Code:') !!}
    {!! Form::text('Product_Warranty_Code', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>