<?php 
namespace Models;
use Illuminate\Database\Eloquent\Model as Eloquent;
class User extends Eloquent
{
	
	protected $table = "users";
	public $timestamps = true; 
}

 ?>