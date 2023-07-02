<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Menu;
use App\Models\Chef;
use App\Models\Class_section;
use App\Models\Cart;
use App\Models\Checkout;
use App\Models\Contact;


class HomeController extends Controller
{

    public function index(){
        if(Auth::id()){
            return redirect('home');
        }
        else{
            $data=Menu::all();
            $data2=Chef::all();
            $user_id=Auth::id(); 
            $count=Cart::where('user_id',$user_id)->count();
        return view('user.home',compact('data','data2','count'));
        }
    }


    public function redirect(){
        if (Auth::id()){
            if(Auth::user()->usertype=='0'){
                $data=Menu::all();
                $data2=Chef::all();
                $user_id=Auth::id(); 
                $count=Cart::where('user_id',$user_id)->count();
              return view('user.home',compact('data','data2','count'));
            }
            else{

                return view('admin.home');
            }
        }
        else{
            return redirect()->back();
        }
    }

    public function about(){
        return view('user.about');
    }
    public function contact(){
        return view('user.contact');
    }
    public function blog(){
        return view('user.blog');
    }
    public function shop(){
        $data=Menu::all();
        return view('user.shop',compact('data'));
    }

    public function shop_details(){
        $data=Menu::all();
        return view('user.shop_detailes',compact('data'));
    }


    public function shoping_cart(Request $request,$id){
        if (Auth::id()){
            $user_id=Auth::id(); 
            $count=Cart::where('user_id',$user_id)->count();

        $data=Cart::where('user_id',$id)->join('menus','carts.food_id','=','menus.id')->get();

        return view('user.shop_cart',compact('data','count'));
        }else{
            return  redirect('/login');
        }
       
    }




 public function checkout(Request $request,$id){
    if (Auth::id()){
        $user_id=Auth::id(); 
        $count=Cart::where('user_id',$user_id)->count();
    $data=Cart::where('user_id',$id)->join('menus','carts.food_id','=','menus.id')->get();
        return view('user.check',compact('data','count'));
    }else{
        return  redirect('/login');
    } 
    
    }


    public function wisslist(){
        if (Auth::id()){
                $data=Menu::all();
                $user_id=Auth::id(); 
                $count=Cart::where('user_id',$user_id)->count();
              return view('user.wisslist',compact('data','count'));
        }else{
            return  redirect('/login');
        }
           
    }

    public function class(){
        return view('user.class');
    }
    public function blog_details(){
        return view('user.blog_details');
    }


public function get_menu(){
    $data=Menu::all();
    return view('user.food',compact('data'));
}

public function addrequirement(Request $request){
    if(Auth::id()){  
    $data = new Class_section;
    $data->user_id=Auth::user()->id;   
    $data->name=$request->name;
    $data->phone=$request->phone;
    $data->study=$request->study;
    $data->requirement=$request->requirement;
    $data->save();
    return redirect()->back()->with('message','guest Request Send Successful ');
    }
    else{
        return  redirect('/login');
        }
    }


public function get_chef(){
    $data2 = Chef::all();
    return view('user.chef',compact('data2'));
}

public function add_cart(Request $request,$id){
    if(Auth::id()){
        $user_id=Auth::id(); 
        $foodid=$id;
        $quantity=$request->quantity;
        $cart= new Cart;
        $cart->user_id=$user_id;
        $cart->food_id=$foodid;
        $cart->quantity=$quantity;
        $cart->save();

       
        return redirect()->back();
    }else{
        return  redirect('/login');
    }

}

public function deleted($id){
    $data=Cart::find($id);
    $data->delete();
    return redirect()->back();
}

public function check(Request $request){
    foreach($request->order_name as $key =>$ordername){
      $data= new Checkout;
      $data->fname=$request->fname;
      $data->lname=$request->lname;
      $data->country=$request->country;
      $data->saddress=$request->saddress;
      $data->apartment=$request->apartment;
      $data->city=$request->city;
      $data->state=$request->state;
      $data->code=$request->code;
      $data->phone=$request->phone;
      $data->email=$request->email;
      $data->account=$request->account;
      $data->payment=$request->payment;
      $data->order_note=$request->order_note;
      $data->paypal=$request->paypal;
      $data->order_price = $request->order_price[$key];
      $data->order_name=$ordername;
      $data->save();

    }

    return redirect()->back()->with('message','Your checkout is done! ');
}

public function send_contact(Request $request){
    $data = new Contact;
    $data-> name=$request->name;
    $data-> email=$request->email;
    $data->message =$request->message;
    $data->save();
    return redirect()->back()->with('message','Your message send successfully! ');
}













}





















