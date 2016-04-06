<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Article extends Model {

	//
	public $timestamps = false;
	protected $table = 'articles';
	protected $fillable = ['name','author','edition','content'];


}
