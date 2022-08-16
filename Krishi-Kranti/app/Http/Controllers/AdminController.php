<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Pedigree;
use App\models\informationn;


class AdminController extends Controller
{
    public function pedigree()
    {
    	return view('admin.pedigree');
    }

    public function uploadpedigree(Request $request)
    {
    	$data=new pedigree;

    	$image=$request->file;
    	$imagename=time().'.'.$image->getClientOriginalExtension();
    	$request->file->move('pedigreeimage',$imagename);

        $data->register_num=$request->register_num;

    	$data->image=$imagename;

    	$data->name=$request->name;

    	$data->birth=$request->birth;

    	$data->gender=$request->gender;

    	$data->tatto=$request->tatto;

    	$data->des=$request->des;
    	$data->save();

    	return redirect()->back()->with('message','Data Added Successfully');
    }
    
    public function registereddata()
    {
        $data=pedigree::all();

        return view('admin.registereddata',compact('data'));
    }

    public function deletedata($id)
    {
        $data=pedigree::find($id);

        $data->delete();

        return redirect()->back()->with('message','Data Deleted');

    }

    public function informationn()
    {
        $info =informationn::all();
        $data = pedigree::all();

        return view('admin.informationn',compact('data'));
    }

    public function uploadinformationn(Request $request)
    {
        

        $data=new pedigree;
        $info=new informationn;

        // $data->register_num=$request->register_num;

        $child_image=$request->file;
        $child_image=time().'.'.$child_image->getClientOriginalExtension();
        $request->file->move('informationnimage',$child_image);

        $info->child_image=$child_image;

        $info->sibling=$request->sibling;

        $info->owner=$request->owner;

        $info->origine=$request->origine;

        $info->breeder=$request->breeder;

        $info->vaccineted=$request->vaccineted;

        $info->vaccineteddate=$request->vaccineteddate;


        $info->save();

        return redirect()->back()->with('message','Data Added Successfully');
    }    

}
