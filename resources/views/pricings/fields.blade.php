<!-- Product Model Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Product_Model', 'Product Model:') !!}
    {!! Form::text('Product_Model', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Product Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Product_Price', 'Product Price:') !!}
    {!! Form::number('Product_Price', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Discount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Product_Discount', 'Product Discount:') !!}
    {!! Form::text('Product_Discount', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Start Of Sale Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Start_Of_Sale', 'Start Of Sale:') !!}
    {!! Form::text('Start_Of_Sale', null, ['class' => 'form-control','id'=>'Start_Of_Sale']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#Start_Of_Sale').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- End Of Sale Field -->
<div class="form-group col-sm-6">
    {!! Form::label('End_Of_Sale', 'End Of Sale:') !!}
    {!! Form::text('End_Of_Sale', null, ['class' => 'form-control','id'=>'End_Of_Sale']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#End_Of_Sale').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Warranty Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Warranty_Code', 'Warranty Code:') !!}
    {!! Form::text('Warranty_Code', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>