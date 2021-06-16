<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Language extends Model
{
    use SoftDeletes;

    protected $table = 'languages';
    protected $guarded = [];

    public function blogTranslations() {
        return $this->hasMany(BlogTranslation::class);
    }
}
