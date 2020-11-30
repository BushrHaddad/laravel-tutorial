<?php

namespace App\Http\Controllers\Sermons;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SermonController extends Controller
{

    public function __construct(){
        // $this->middleware('auth');
    }

    // show all sermons 
    public function index(){
        return view('front\welcome')->with(['name' => "Bushr", 'age' => '23']);
    }

    // update sermon 
    public function update($id){
        return 'update: '.$id;
    }

    //delete sermon
    public function delete($id){
        return 'delete: '.$id;
    }
}
