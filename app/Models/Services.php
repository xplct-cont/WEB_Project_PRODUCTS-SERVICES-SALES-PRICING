<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Services
 * @package App\Models
 * @version September 30, 2021, 12:17 am UTC
 *
 * @property string $Product_Model
 * @property string $Product_Issue
 * @property string $Service_Warranty_Code
 * @property string $Owner
 * @property string $Email
 * @property string $Contact_Number
 * @property string $Address
 */
class Services extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'services';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Product_Model',
        'Product_Issue',
        'Service_Warranty_Code',
        'Owner',
        'Email',
        'Contact_Number',
        'Address'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Product_Model' => 'string',
        'Product_Issue' => 'string',
        'Service_Warranty_Code' => 'string',
        'Owner' => 'string',
        'Email' => 'string',
        'Contact_Number' => 'string',
        'Address' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Product_Model' => 'nullable|string|max:255',
        'Product_Issue' => 'nullable|string|max:500',
        'Service_Warranty_Code' => 'nullable|string|max:255',
        'Owner' => 'nullable|string|max:255',
        'Email' => 'nullable|string|max:255',
        'Contact_Number' => 'nullable|string|max:255',
        'Address' => 'nullable|string|max:500',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
