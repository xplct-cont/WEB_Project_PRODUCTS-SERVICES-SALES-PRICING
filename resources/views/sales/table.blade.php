<div class="table-responsive">
    <table class="table" id="sales-table">
        <thead>
            <tr>
                <th>Sold Product Brand</th>
        <th>Sold Product Model</th>
        <th>Date Sold</th>
        <th>Customer Name</th>
        <th>Contact Number</th>
        <th>Product Warranty Code</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sales as $sales)
            <tr>
                <td>{{ $sales->Sold_Product_Brand }}</td>
            <td>{{ $sales->Sold_Product_Model }}</td>
            <td>{{ $sales->Date_Sold }}</td>
            <td>{{ $sales->Customer_Name }}</td>
            <td>{{ $sales->Contact_Number }}</td>
            <td>{{ $sales->Product_Warranty_Code }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['sales.destroy', $sales->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sales.show', [$sales->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('sales.edit', [$sales->id]) }}" class='btn btn-default btn-xs'>
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
