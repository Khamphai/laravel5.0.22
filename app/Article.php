<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    protected $fillable = [
        'title',
        'body',
        'published_at'
    ];

//    protected $guarded = ['id'];

    protected $dates = ['published_at'];

    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] =
            Carbon::parse($date)->subDay();
    }

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnpublished($query)
    {
        $query->where('published_at', '>', Carbon::now());
    }

}
