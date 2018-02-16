<?php

namespace Insta;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Acc
 * @package Insta
 *
 * @property string $login
 */
class Acc extends Model
{
	public $timestamps = false;

	/**
	 * link to single account
	 * @return string
	 */
	function path(){
		return 'accounts/' . $this->id;
	}
}
