<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Insta\Acc;
use Tests\TestCase;

/**
 * Class AccTest
 * @package Tests\Feature
 *
 * @property Acc $acc
 */
class AccTest extends TestCase
{
	use DatabaseMigrations;

	//public $acc;//почему то работает и без этого

	/**
	 * Инит конструктор так сказать, выносим сюда общие действия перед началом теста
	 */
	protected function SetUp(){
		parent::SetUp();
		// С помощью фабрики создаем акк
		$this->acc = factory('Insta\Acc')->create();
		// а потом заказ принадлежащий этому аккаунту
		factory('Insta\Order')->create(['acc_id' => $this->acc->id]);
	}

	/**
	 * Юзер может видеть страницу своего профиля
	 */
	public function testUserViewsHisProfile(){
		//заходим на страницу профиля юзера
		$response = $this->get(route('accounts.index'));
		//и получаем успех
		$response->assertStatus(200);
	}

	/**
	 * Юзер видит в своем профиле свои соц аккаунты
	 */
	public function testUserViewsOwnAccountsInOwnProfile(){
		//открываем список соц аккаунтов (все на той же странице профиля)
    	$this->get(route('accounts.index'))
	         //и видим там тип одного из профилей
	         ->assertSee($this->acc->type);
    }

	/**
	 * Юзер видит отдельный аккаунт
	 */
	public function testUserViewsSingleAcc(){
		//открываем путь отдельного соц аккаунта
		$this->get($this->acc->path())
			  //и видим заказы внутри, а именно значение первого заказа
		      ->assertSee($this->acc->orders()->first()->value);
	}
}
