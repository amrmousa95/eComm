<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products',compact('products'));
    }
    public function details($id)
    {
        $details = Product::find($id);
        return view('details',compact('details'));
    }
    public function search(Request $search)
    {
        $data = Product::where('name','like','%'.$search->input('search').'%')->get();
        return view('search',compact('data'));
    }
    public function addToCart(Request $req)
    {
        if ($req->session()->has('user'))
        {
            $cart = new Cart;
            $cart->product_id = $req->product;
            $cart->user_id = $req->session()->get('user')->id;
            $cart->save();
            return redirect('/');
        }
        return redirect('/login');

    }
    static function cartItem()
    {
        $user_id=Session::get('user')->id;
        return Cart::where('user_id',$user_id)->count();
    }
    public function cartList()
    {
        $user_id = Session::get('user')->id;
        $carts = DB::table('cart')
            ->join('products','cart.product_id','=','products.id')
            ->where('cart.user_id','=',$user_id)
            ->select('products.*','cart.id as cart_id')
            ->get();
        return view('cartList',compact('carts'));
    }
    public function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('/cartList');
    }
    public function orderNow()
    {
        $user_id = Session::get('user')->id;
        $total = DB::table('cart')
            ->join('products','cart.product_id','=','product_id')
            ->where('cart.user_id','=',$user_id)
            ->sum('products.price');
        return view('/orderNow',compact('total'));
    }
    public function orderPlace(Request $req)
    {
        $user_id = Session::get('user')->id;
        $carts = Cart::where('user_id',$user_id)->get();
        foreach ($carts as $cart)
        {
            Order::create([
               'product_id'=>$cart->product_id,
                'user_id'=>$user_id,
                'address'=>$req->address,
                'payment_method'=>$req->payment,
                'status'=>'Pending',
                'payment_status'=>'Pending'
            ])->save();
            Cart::where('user_id',$user_id)->delete();
        }
        return redirect('/');
    }
    public function myOrders()
    {
        $user_id = Session::get('user')->id;
        $orders = DB::table('orders')
            ->join('products','orders.product_id','=','products.id')
            ->where('orders.user_id',$user_id)->get();
        return view('/myOrders',compact('orders'));
    }

}
