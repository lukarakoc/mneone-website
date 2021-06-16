<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogTranslation extends Model
{

    protected $table = 'blog_translations';
    protected $guarded = [];

    public function language() {
        return $this->belongsTo(Language::class, 'language_id', 'id');
    }

    public function blog() {
        return $this->belongsTo(Blog::class, 'blog_id', 'id');
    }
}
