<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\Food;
use App\Models\Reservation;
use App\Models\chef;


class AdminController extends Controller
{
    //user function
    public function user(){
        $data =user::all();
        return view('admin.users', compact("data"));
    }

      // delete user function
    public function deleteuser($id){
        $data =user::find($id);
        $data->delete();
        return redirect()->back();
        
    }
    //admin food funtion
   public function food(){
       $data = food::all();
       return view('admin.food', compact("data"));
   }

   //Upload food function
   public function upload(Request $request){
       $data = new food;

       $image = $request->image;
       $imagename = time().'.'.$image->getClientOriginalExtension();
       $request->image->move('foodimage', $imagename);
       $data->image=$imagename;
       

       $data->title=$request->title;
       $data->price=$request->price;
       $data->description=$request->description;
      

       $data->save();
       return redirect()->back();
       
   }

   //delete food function
   public function deletemenu($id){
       $data = food::find($id);
       $data->delete();
       return redirect()->back();


   }
   //update food menu
   public function updateview($id){
       $data = food::find($id);
       return view("admin.updateview", compact("data"));
   }

   //update food function 2
   public function update(Request $request, $id){
       $data = food::find($id);

       $image = $request->image;
       $imagename = time().'.'.$image->getClientOriginalExtension();
       $request->image->move('foodimage', $imagename);
       $data->image=$imagename;
       

       $data->title=$request->title;
       $data->price=$request->price;
       $data->description=$request->description;
      

       $data->save();
       return redirect()->back();

   }

   //reservation function
   public function reservation(Request $request){
       
    $data = new reservation;

    $data->name=$request->name;
    $data->email=$request->email;
    $data->phone=$request->phone;
    $data->guest=$request->guest;
    $data->date=$request->date;
    $data->time=$request->time;
    $data->message=$request->message;

    $data->save();                          
       return redirect()->back();


   }

   //view reservation on admin
   public function viewreservation(){
       $data = reservation::all();

       return view ("admin.adminreservation", compact("data"));

   }

   //view chef 
   public function viewchef ()
   {
       $data = chef::all();
       return view ("admin.adminchef", compact("data"));
   }

   //upload chef
   public function uploadchef(Request $request){

    $data = new chef;

    $image = $request->image;
    
    $imagename = time().'.'.$image->getClientOriginalExtension();
    $request->image->move('chefimage', $imagename);
    $data->image=$imagename;
    

    $data->name=$request->name;
    $data->speciality=$request->speciality;

    $data->save();

    return redirect()->back();

   }

   //updatechef
   public function updatechef($id){
       $data=chef::find($id);

       return view("admin.updatechef", compact("data"));
   }

   //upload update function
   public function updatefoodchef(Request $request, $id){
       $data=chef::find($id);

       $image = $request->image;

       if ($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
    $request->image->move('chefimage', $imagename);
    $data->image=$imagename;

       }
    
   
    

    $data->name=$request->name;
    $data->speciality=$request->speciality;

    $data->save();

    return redirect()->back();
   }

      //delete food function
      public function deletechef($id){
        $data = chef::find($id);
        $data->delete();
        return redirect()->back();
      }

   

}