<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Menu;
use App\Models\Chef;
use App\Models\Class_section;
use App\Models\Contact;
use App\Models\Checkout;



class AdminController extends Controller
{
    public function menu(){
        return view('admin.menu');
    }

    public function addmenu(Request $request){
        $data = new Menu;
        $data->name = $request->name;
        $data->price = $request->price;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalName();
        $request->image->move('menuimage', $imagename);
        $data->image=$imagename;
        $data->save();
         return redirect()->back();
    }
    public function all_menu(){
        $data=Menu::all();
        return view('admin.all_menu',compact('data'));
    }
    public function deleted_menu($id){
        $data=Menu::find($id);
        $data->delete();
        return redirect()->back();
    }
    
    public function update_menu($id){
        $data=Menu::find($id);
        return view('admin.update_menu',compact('data'));
    }
    public function edit_menu(Request $request,$id){
        $data=Menu::find($id);
        $data->name = $request->name;
        $data->price = $request->price;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalName();
        $request->image->move('menuimage', $imagename);
        $data->image=$imagename;
        $data->save();
         return redirect()->back();
    }

    public function chef(){
        return view('admin.chef');
    }
    public function addchef(Request $request){
        $data = new Chef;
        $data->name = $request->name;
        $data->special = $request->special;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalName();
        $request->image->move('chefimage', $imagename);
        $data->image=$imagename;
        $data->save();
         return redirect()->back();
    }
    public function all_chef(){
        $data=Chef::all();
        return view('admin.all_chefs',compact('data'));
    }

    public function deleted_chef($id){
        $data=chef::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updated_chef($id){
        $data=Chef::find($id);
        return view('admin.updated_chef',compact('data'));
    }

    public function edit_chef(Request $request,$id){
        $data=chef::find($id);
        $data->name = $request->name;
        $data->special = $request->special;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalName();
        $request->image->move('chefimage', $imagename);
        $data->image=$imagename;
        $data->save();
         return redirect()->back();
    }

    public function requirement(){
        $data=class_section::all();
        return view('admin.requirement',compact('data'));
    }
    public function get_contact(){
        $data=Contact::all();
        return view('admin.contact',compact('data'));
    }

    public function get_checkout(){
        $data=Checkout::all();
        return view('admin.get_check',compact('data'));
    }






























}
