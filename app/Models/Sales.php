<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Sales
 * @package App\Models
 * @version September 30, 2021, 12:20 am UTC
 *
 * @property string $Sold_Product_Brand
 * @property string $Sold_Product_Model
 * @property string $Date_Sold
 * @property string $Customer_Name
 * @property string $Contact_Number
 * @property string $Product_Warranty_Code
 */
class Sales extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'sales';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Sold_Product_Brand',
        'Sold_Product_Model',
        'Date_Sold',
        'Customer_Name',
        'Contact_Number',
        'Product_Warranty_Code'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Sold_Product_Brand' => 'string',
        'Sold_Product_Model' => 'string',
        'Date_Sold' => 'date',
        'Customer_Name' => 'string',
        'Contact_Number' => 'string',
        'Product_Warranty_Code' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Sold_Product_Brand' => 'nullable|string|max:255',
        'Sold_Product_Model' => 'nullable|string|max:255',
        'Date_Sold' => 'required',
        'Customer_Name' => 'nullable|string|max:255',
        'Contact_Number' => 'nullable|string|max:255',
        'Product_Warranty_Code' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
