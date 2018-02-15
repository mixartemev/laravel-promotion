<?php
$users  = factory("Insta\User", 20)->create();
$accs   = $users->each(function($user){ factory("Insta\Acc", 2)->create(['user_id'=>$user->id]);});
$orders = $accs->each(function($acc){ factory("Insta\Order", 3)->create(['acc_id'=>$acc->id]);});
