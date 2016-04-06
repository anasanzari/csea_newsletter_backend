<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Edition extends Model {

	public $timestamps = false;
	protected $table = 'editions';
	protected $fillable = ['id','name','month','year'];

	public function getMonthAttribute($value){
		//try with carbon next time.
		  $date = Carbon::parse('2010/'.$value.'/01');
      return $date;
  }

}
