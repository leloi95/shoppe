<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{

    protected $categorie = 'Categorie';
    // cate hasmany products
    public function categorie(){
      return $this-> hasmany('App\Product','idCate','idProduct');
    }
}
