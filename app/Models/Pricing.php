<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Pricing
 * @package App\Models
 * @version September 30, 2021, 12:19 am UTC
 *
 * @property string $Product_Model
 * @property number $Product_Price
 * @property string $Product_Discount
 * @property string $Start_Of_Sale
 * @property string $End_Of_Sale
 * @property string $Warranty_Code
 */
class Pricing extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'pricing';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Product_Model',
        'Product_Price',
        'Product_Discount',
        'Start_Of_Sale',
        'End_Of_Sale',
        'Warranty_Code'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Product_Model' => 'string',
        'Product_Price' => 'decimal:2',
        'Product_Discount' => 'string',
        'Start_Of_Sale' => 'date',
        'End_Of_Sale' => 'date',
        'Warranty_Code' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Product_Model' => 'nullable|string|max:255',
        'Product_Price' => 'required|numeric',
        'Product_Discount' => 'nullable|string|max:255',
        'Start_Of_Sale' => 'required',
        'End_Of_Sale' => 'required',
        'Warranty_Code' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
