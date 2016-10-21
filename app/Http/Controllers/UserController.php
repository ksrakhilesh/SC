<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Session;
use Auth;
class UserController extends Controller
{
	public function getProfile(){
		if (Session::has('oldUrl')) {
			$oldUrl = Session::get('oldUrl');
			Session::forget('oldUrl');
			return redirect()->to($oldUrl);
		}
		$orders = Auth::user()->orders;
		$orders->transform(function($order, $key){
			$order->cart = unserialize($order->cart);
			return $order;
		});

		return view('user.profile')->withOrders($orders);
	}
}
