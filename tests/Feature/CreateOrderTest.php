<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Insta\Acc;
use Insta\Order;
use Insta\User;
use Tests\TestCase;

class CreateOrderTest extends TestCase
{
	use DatabaseMigrations;

	/**
	 * A basic test example.
	 *
	 * @return void
	 */
	public function testOrderCreates()
	{
		//получаем юзера
		/** @var User $user */
		$user = factory(User::class)->create();
		//логиним его
		$this->be($user);
		//создаем ему соц аккаунт
		/** @var Acc $acc */
		$acc = factory(Acc::class)->create([ 'user_id' => $user->id]);
		//создаем заказ
		/** @var Order $order */
		$order = factory(Order::class)->make();
		//и записываем его в соц аккаут
		$this->post($acc->path() . Order::basePath(), $order->toArray());
		//проверяем вывод
		$this->get($order->path())
			->assertSee($order->type);
	}
}
