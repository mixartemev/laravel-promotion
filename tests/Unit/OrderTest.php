<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Insta\Acc;
use Insta\Order;
use Tests\TestCase;

class OrderTest extends TestCase
{
	use DatabaseMigrations;

	/**
     * A basic test example.
     * @return void
     */
    public function testOrderHaveAcc() {
	    /** @var Order $order */
	    $order = factory( Order::class )->create();
	    $this->assertInstanceOf( Acc::class, $order->acc );
    }

	/**
     * A basic test example.
     * @return void
     */
    public function testOrderCanBeAddedToAcc() {
	    /** @var Acc $acc */
	    $acc = factory( Acc::class )->create();
	    $acc->addOrder( [
		    'type'  => 'like',
		    'value' => 321
	    ] );
	    $this->assertCount( 1, $acc->orders );
    }

}
