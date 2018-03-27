<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactForm;
use App\Message;

class MessageController extends Controller
{
	public function message(ContactForm $request)
	{

		$message = New Message;
		$message->name = $request->name;
		$message->email = $request->email;
		$message->number = $request->number;
		$message->subject = $request->subject;
		$message->message = $request->message;
		$respuesta = ($message->save()) ? 1 : 0;

		return $respuesta;
	}
}
