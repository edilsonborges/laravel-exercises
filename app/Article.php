<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	protected $fillable = [
        'title',
        'body',
        'published_at'
    ];

    public static function findOrFail($id) {
        return Article::find($id) ? : abort(404);
    }

}
