<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use App\Cart;
use Session;
use Stripe\Stripe;
use Auth;
use Stripe\Charge;
use App\Order;
class ProductController extends Controller
{
	public function getIndex(){
		$products = Product::all();
		return view('shop.index')->withProducts($products);
	}
	public function getAddToCart(Request $request , $id){
		$product = Product::find($id);
		$oldCart = Session::has('cart') ? Session::get('cart') : null;
		$cart = new Cart($oldCart);
		$cart->add($product ,$product->id);
		$request->session()->put('cart', $cart); 
		return redirect()->route('product.index');

	}
	public function getCart(){
		if (!Session::has('cart')) {
			return view('shop.shopping-cart');
		}else{
			$oldCart = Session::get('cart');
			$cart = new Cart($oldCart);

			return view('shop.shopping-cart')->withProducts($cart->items)->withTotalprice($cart->totalPrice);
		}
	}
	public function getReduceOne(Request $request , $id){
		$product = Product::find($id);
		$oldCart = Session::has('cart') ? Session::get('cart') : null;
		$cart = new Cart($oldCart);
		$cart->reduceOne($product ,$product->id);
		if (count($cart->items) > 0) {
			$request->session()->put('cart', $cart); 
		}else{
			Session::forget('cart');
		}
		return redirect()->route('products.shoppingCart');

	}
	public function getRemoveAll(Request $request , $id){
		$product = Product::find($id);
		$oldCart = Session::has('cart') ? Session::get('cart') : null;
		$cart = new Cart($oldCart);
		$cart->removeAll($product ,$product->id);
		if (count($cart->items) > 0) {
			$request->session()->put('cart', $cart); 
		}else{
			Session::forget('cart');
		}
		return redirect()->route('products.shoppingCart');
	}
	public function getCheckout(){
		if (!Session::has('cart')) {
			return redirect()->route('products.shoppingCart');
		}
		$oldCart = Session::get('cart');
		$cart = new Cart($oldCart);
		$total = $cart->totalPrice;
		Stripe::setVerifySslCerts(false);
		return view('shop.checkout')->withTotal($total);
	}
	public function postCheckout(Request $request){
		
		if (!Session::has('cart')) {
			return redirect()->route('shop.shoppingCart');
		}
		$oldCart = Session::get('cart');
		$cart = new Cart($oldCart);
		Stripe::setApiKey('pk_test_IFWCArqpzZw4EEIPoCcgBibA');
		try {
				Charge::create([
				"amount" => $cart->totalPrice * 100,
				"currency" => "usd",
                	"source" => $request->stripeToken , // obtained with Stripe.js
                	"description" => "Test Charge"
                ]);
		} catch (\Exception $e) {
			$order = new Order;
			$order->cart = serialize($cart);	
			$order->address = $request->input('address');
			$order->name = $request->input('name');
			$order->payment_id = 'akhilesh';
			Auth::user()->orders()->save($order);
			Session::forget('cart');
			return redirect()->route('product.index')->with('success', 'Successfully purchased products (E)!');
            // return redirect()->route('checkout')->with('error', $e->getMessage());

		}
		Session::forget('cart');
		return redirect()->route('product.index')->with('success', 'Successfully purchased products!');
	}
}
