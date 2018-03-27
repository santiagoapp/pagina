<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;

class SubscriberController extends Controller
{
	public function subscribe(Request $request)
	{
		$validatedData = $request->validate([
			'name' => 'required|max:191',
			'email' => 'required|email|unique:subscribers|max:191'
		]);

		$subscriber	= New Subscriber;
		$subscriber->name = $request->name;
		$subscriber->email = $request->email;
		$respuesta = ($subscriber->save()) ? 1 : 0;

		return $respuesta;
	}

}
