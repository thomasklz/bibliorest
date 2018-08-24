<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Appstract\Meta\Metable;

class Bibliometadata extends Model
{
    public $table = "biblio_metadata";
    public $timestamps = false;
	use Metable;
    public function bibliometadata()
    {
        return $this->belongsTo(Biblio::class);
    }

}
