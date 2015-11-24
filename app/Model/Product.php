<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use app\Http\Controllers\ProductController;

class Product extends Model
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product';
    public $primarkey='id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name', 'price','number'];
    public $timestamps = false;

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['password', 'remember_token'];
}
