<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

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
		$response = $this->get('/accounts/' . $this->acc->id);
		$response->assertSee($this->acc->login);
	}
}
