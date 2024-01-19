<?php

namespace App;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    use AutoNumberTrait;
    
    protected $table = 'products';

    protected $fillable = ['name','code','image','description','price','weigth','categories_id','stok'];
    
    public function getAutoNumberOptions()
    {
        return [
            'code' => [
                'format' => 'PRD.?', // Format kode yang akan digunakan.
                'length' => 3 // Jumlah digit yang akan digunakan sebagai nomor urut
            ]
        ];
    }
}


