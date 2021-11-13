<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class PostController extends Controller
{
    public function create(Request $request)
    {
        try{
            Usuario::create([
                
                'name' => $request->name,
                'email'=>$request->email,
                'phone' => $request->phone,
                'message'=> $request->message,
            ]);

            $details = [
                'title' => 'Post title: ' . $request->title,
                'body' => $request->description
            ];
            \Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\sendPost($details));

            return json_encode(['status'=>'ok']);

        }catch(\ErrorException $e){
            return json_encode(['status'=>'faild', 'message'=>$e->getMessage()]);
        }
    }

}
