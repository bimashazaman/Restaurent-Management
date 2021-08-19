<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use Database\Factories\FoodFactory;

class AdminController extends Controller
{

    //===========user================


    public function user()
    {
        $data = User::all();
        return view("admin.users", compact("data"));
    }

    public function delete($id){

        $data = User::find($id);
        $data->delete();
        return redirect()->back();

    }




    //=========foods==========



    public function food()
    {
        $data = Food::all();
        return view('admin.food', compact('data'));
    }



    public function updateview($id)
{
    $data= Food::find($id);
    return view("admin.updateview", compact('data'));

}

    public function update($id ,Request $request)
{
    $data = Food::find($id);
    $image= $request->image;
    $imageName = time(). '.' .$image->getClientOriginalExtension();
    $request->image->move('foodimage', $imageName);

    $data->image=$imageName;

    $data->title=$request->title;
    $data->description=$request->description;
    $data->price=$request->price;

    $data->save();

    return redirect()->back();

}

    public function uploadFood(Request $request)
    {
        $data = new Food;

        $image= $request->image;
        $imageName = time(). '.' .$image->getClientOriginalExtension();
        $request->image->move('foodimage', $imageName);

        $data->image=$imageName;

        $data->title=$request->title;
        $data->description=$request->description;
        $data->price=$request->price;

        $data->save();

        return redirect()->back();
    }

    public function deletefood($id){

        $data = Food::find($id);
        $data->delete();
        return redirect()->back();

    }





    //===========reservations===========


    public function reservation(Request $request)
    {
        $data = new Reservation;


        $data->name= $request->name;
        $data->email= $request->email;
        $data->phone= $request->phone;
        $data->guest= $request->guest;
        $data->date= $request->date;
        $data->time= $request->time;
        $data->message= $request->message;

        $data->save();

        return redirect()->back();
    }

    public function viewReservation()
    {
        $data = Reservation::all();

        return view("admin.adminReservation", compact('data'));
    }





    //=================chefs================


    public function viewChef()
    {
        $data = Chef::all();

        return view('admin.chef', compact('data'));

    }

    public function uploadchef(Request $request)
    {
        $data = new Chef;

        $image= $request->image;
        $imageName = time(). '.' .$image->getClientOriginalExtension();
        $request->image->move('chefimage', $imageName);

        $data->image=$imageName;

        $data->name= $request->name;
        $data->description= $request->description;


        $data->save();

        return redirect()->back();
    }

    public function deletechef($id){

        $data = Chef::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function updatechef($id ,Request $request)
{
    $data = Chef::find($id);
    $image= $request->image;
    $imageName = time(). '.' .$image->getClientOriginalExtension();
    $request->image->move('chefimage', $imageName);

    $data->image=$imageName;

        $data->name= $request->name;
        $data->description= $request->description;

    $data->save();

    return redirect()->back();

}


    public function updatechefview($id)
    {
    $data= Chef::find($id);
    return view("admin.chefupdateview", compact('data'));

    }









}
