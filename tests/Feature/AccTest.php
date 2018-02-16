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

	public $acc;//почему то работает и без этого

	public function testUserViewsHisProfile(){

		$response = $this->get('/profile');
		$response->assertStatus(200);
	}

	public function SetUp(){
		parent::SetUp();
		$this->acc = factory('Insta\Acc')->create();
	}

    public function testUserViewsOwnAccountsInOwnProfile(){
    	$this->get('/profile')
	         ->assertSee($this->acc->type);
    }

	public function testUserViewsSingleAcc(){
		$response = $this->get($this->acc->path());
		$response->assertSee($this->acc->login);
	}
}
