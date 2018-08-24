<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biblioitem extends Model
{
    public $table = "biblioitems";
    public $timestamps = false;
    
    protected $fillable = [
       'isbn', 'publishercode', 'pages', 'place',
    ];

    public function biblios()
    {
        return $this->belongsTo(Biblio::class);
    }



}
