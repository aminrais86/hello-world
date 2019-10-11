<?php 
namespace App;

use illuminate\notification\notifiable;
use illuminate\Database\Eloquent\model;

class kategori extends model
{
	protected $table = 'kategori';
	protected $fillable = [
		'name', 'keterangan', 'user_id',];
}