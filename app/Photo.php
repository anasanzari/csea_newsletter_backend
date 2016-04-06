<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {

	//
	public $timestamps = false;
	protected $table = 'photos';
	protected $fillable = ['name','user','link'];

}
