<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biblio extends Model
{
    public $table = "biblio";
    public $timestamps  = false;

    protected $fillable = [
       'biblionumber', 'frameworkcode', 'author', 'author',
    ];

    public function itemsbiblioteca(){
    	 return $this->hasMany(Biblioitem::class,'biblionumber','biblionumber');
    }
    public function metadatas(){
    	 return $this->hasMany(Bibliometadata::class,'biblionumber','biblionumber');
    }

}
