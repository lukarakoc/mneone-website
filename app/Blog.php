<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;

    protected $table = 'blogs';
    protected $guarded = [];

    public function blogTranslations() {
        return $this->hasMany(BlogTranslation::class);
    }
}
