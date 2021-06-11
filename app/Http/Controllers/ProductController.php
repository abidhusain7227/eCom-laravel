<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Oders;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function index()
    {
        if (Auth::check()) {
            $products = Product::all();
            $cartItems = Cart::where('user_id', Auth::user()->id)->count();
            return view('product', compact('products', 'cartItems'));
        } else {
            $products = Product::all();
            return view('product', compact('products'));
        }
    }

    function detail($id)
    {

        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }
    function search(Request $reg)
    {
        $data = Product::where('name', 'like', '%' . $reg->input('query') . '%')->get();
        return view('search', ['products' => $data]);
    }
    function AddToCart(Request $req)
    {

        if (Auth::check()) {
            $cart = new Cart;
            $cart->user_id = Auth::user()->id;
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('login');
        }
    }
    function cartList(){
        $userId = Auth::user()->id;
        $data = DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->select('products.*','cart.id as cart_id')
        ->where('cart.user_id',$userId)
        ->get();
        return view('cartlist', compact('data')) ;
    }
    function removeCart($id){
        Cart::destroy($id);
        return redirect('cartlist');

    }
    function oderNow(){
        $userId = Auth::user()->id;
        $totoal = DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->select('products.*','cart.id as cart_id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');
        return view('odernow', compact('totoal')) ;
    }
    function orderPlace(Request $req){
        $userId =Auth::user()->id;
        $allCart = Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart)
        {
            $order = new Oders;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->address=$req->address;
            $order->status='pending';
            $order->payment_method=$req->pyament;
            $order->payment_status='pending';
            $order->save();
        }
        Cart::where('user_id',$userId)->delete();

        return redirect("/");
    }
    function myOrder(){
        if(isset(Auth::user()->id)){
        $userId = Auth::user()->id;
        $orders = DB::table('oders')
        ->join('products','oders.product_id','products.id')
        ->where('oders.user_id',$userId)
        ->get();
        return view('myorders', compact('orders')) ;
        }else{
            return redirect('login');
        }
    }
}
