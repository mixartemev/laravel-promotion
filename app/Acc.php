<?php

namespace Insta;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Acc
 *
 * @package Insta
 * @mixin \Eloquent
 * @property int $id
 * @property string $type
 * @property string $login
 * @property string $pwd
 * @property int $user_id
 * @method static Builder|Acc whereId($value)
 * @method static Builder|Acc whereLogin($value)
 * @method static Builder|Acc wherePwd($value)
 * @method static Builder|Acc whereType($value)
 * @method static Builder|Acc whereUserId($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\Insta\Order[] $orders
 */
class Acc extends Model
{
	public $timestamps = false;

	/**
	 * link to accounts list
	 * @return string
	 */
	static function basePath(){
		return '/accounts/';
	}

	/**
	 * link to single account
	 * @return string
	 */
	function path(){
		return self::basePath() . $this->id;
	}

	function orders(){
		return $this->hasMany(Order::class);
	}

	function addOrder(array $order){
		return $this->orders()->create($order);
	}
}
