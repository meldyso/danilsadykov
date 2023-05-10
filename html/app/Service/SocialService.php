<?php

namespace App\Service;
use App\User;
use App\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;

class SocialService
{

	public function saveSocialData($user)
	{
			$profit = Settings::orderBy('id', 'desc')->first();
		  $vk_id = $user->getId();
    	$name = $user->getName();
    	$avatar = $user->getAvatar();
			$u = User::where('vk_id', $vk_id)->first();

    	if($u) {
    		return $u->fill(['name' => $name, 'avatar' => $avatar]);
    	}
			$ref_id = Cookie::get('ref');
			$ref = User::where('unique_id', $ref_id)->first();
			if(!is_null($ref)) {
				if( ($ref->link_reg + 1) % 10 == 0 ) $ref->ref_try+=1;
				$ref->link_reg+=1;
				$ref->save();
			} else $ref_id = 0;

    	$password = Hash::make('12345678');

    	$data = [
				'unique_id' => bin2hex(random_bytes(4)),
			  'name' => $name,
			  'password' => $password,
				'vk_id' => $vk_id,
				'avatar' => $avatar,
				'balance' => $profit->bonus_reg,
				'ref_id' => $ref_id,
				'ip' => request()->ip()
			];
			$profit->bank_dice-=round($profit->bonus_reg/2,2);
			$profit->bank_wheel-=round($profit->bonus_reg/2,2);
			$profit->bank_admin-=($profit->bonus_reg/100) * $profit->comission;
			$profit->save();
    	return User::create($data);

	}
}
