<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\Users;
use App\models\pedigree;
use App\models\informationn;

class HomeController extends Controller
{
    public function redirect()
    {
    	$usertype=Auth::user()->usertype;

    	if($usertype=='1')
    	{
    		return view('admin.home');
    	}
    	else
    	{
            $data = pedigree::paginate(3);
        return view('user.home',compact('data'));
    	}
    }
    public function index()
    {
        // this is for redirect to the admin page not common redirect page
        if(Auth::id()){

            return redirect('redirect');
        }

        else
        {

        $data = pedigree::paginate(3);
        return view('user.home',compact('data'));
        }

    }
    public function search(Request $request)
    {
        $search=$request->search;
        // if there is no value there will be only 3 data of the database
        
        if($search=='')
        {
            $data = pedigree::paginate(3);
            return view('user.home',compact('data'));    
        }


        $data=pedigree::where('register_num','like','%'.$search.'%')->orwhere('name', 'like','%'.$search.'%')
            ->get();


        return view('user.home',compact('data'));

    }

    public function detail(Informationn $informationn){
        if(Auth::id()){
            $info = new informationn;
            $info = Informationn::all();   
            $data = new pedigree;
            $data = pedigree::all();


            return view('user.detail',compact('data','info'));

        }
    }
    public function dataa(){
        return view('user.data');
    }
}
