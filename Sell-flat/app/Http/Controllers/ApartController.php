<?php

namespace App\Http\Controllers;

use  App\Models\Apart;
use Illuminate\Http\Request;
use App\Http\Requests\ApartRequest;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ApartController extends Controller
{
   public function submit(ApartRequest $req){


      return redirect()->route('home')->with('success','Данные было добавлено!');
   }

   public function allData(){
      $apart = new Apart;
      return view('messages_apart',['data'=> $apart->all()]);
   }
   public function showOneMessage($id){
      $apart = new Apart;
      return view('one-message-apart',['data'=> $apart->find($id)]);
   }

   public function updateMessage($id){
      $apart = new Apart;
      return view('update-message-apart',['data'=> $apart->find($id)]);
   }

    public function updateMessageSubmit($id, ApartRequest $req){

        $apart = Apart::find($id);
        $apart->owner_name = $req->input('owner_name');
        $apart->owner_email = $req->input('owner_email');
        $apart->owner_phone = $req->input('owner_phone');
        $apart->owner_address = $req->input('owner_address');
        $apart->owner_country = $req->input('owner_country');
        $apart->address_apart = $req->input('address_apart');
        $apart->number_home = $req->input('number_home');
        $apart->number_flat = $req->input('number_flat');
        $apart->price_apart = $req->input('price_apart');
        $apart->total_area = $req->input('total_area');
        $apart->living_space = $req->input('living_space');
        $apart->room_apart = $req->input('room_apart');
        $apart->type_of_home = $req->input('type_of_home');
        $apart->floor_apart = $req->input('floor_apart');
        $apart->image = $req->input('image');


        $apart->save();

        return redirect()->route('apart-data-one',$id)->with('success','Сообщено было обновлено!');
   }
   public function deleteMessage($id){
        Apart::find($id)->delete();
        return redirect()->route('apart-data',$id)->with('success','Сообщено было удалено!');
   }
}
