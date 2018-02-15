<?php

namespace Insta;

use Illuminate\Database\Eloquent\Model;

class Acc extends Model
{
	public $timestamps = false;

	function path(){
		return 'accounts/' . $this->id;
	}
}
