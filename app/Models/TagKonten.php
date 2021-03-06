<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="TagKonten",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="idKonten",
 *          description="idKonten",
 *          type="integer",
 *          format="int32"
 *      ),
 *       @SWG\Property(
 *          property="idTag",
 *          description="idTag",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class TagKonten extends Model
{
    // use SoftDeletes;

    public $table = 'tagkonten';
    public $timestamps = false;

    // protected $dates = ['deleted_at'];


    public $fillable = [
        'id',
        'idKonten',
        'idTag'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'=>'integer',
        'idKonten' => 'integer',
        'idTag'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
