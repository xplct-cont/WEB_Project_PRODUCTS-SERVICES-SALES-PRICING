<div class="table-responsive">
    <table class="table" id="pricings-table">
        <thead>
            <tr>
                <th>Product Model</th>
        <th>Product Price</th>
        <th>Product Discount</th>
        <th>Start Of Sale</th>
        <th>End Of Sale</th>
        <th>Warranty Code</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pricings as $pricing)
            <tr>
                <td>{{ $pricing->Product_Model }}</td>
            <td>{{ $pricing->Product_Price }}</td>
            <td>{{ $pricing->Product_Discount }}</td>
            <td>{{ $pricing->Start_Of_Sale }}</td>
            <td>{{ $pricing->End_Of_Sale }}</td>
            <td>{{ $pricing->Warranty_Code }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['pricings.destroy', $pricing->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pricings.show', [$pricing->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('pricings.edit', [$pricing->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
