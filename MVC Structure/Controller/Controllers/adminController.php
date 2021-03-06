<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Request as Req;

class adminController extends Controller
{
    //
    public function index(){
        return view ('backend.index');
    }
    public function view_category(){
        $data = DB::table('categories')->get();
        return view ('backend.categories.category', ['data'=>$data]);
    }
    public function edit_category($id){
        $singleData = DB::table('categories')->where('cid',$id)->first();
        if($singleData == NULL){
            return redirect('view-category');
        }
        $data = DB::table('categories')->get();
        return view('backend.categories.edit-category', ['data'=>$data, 'singleData'=>$singleData]);
    }
    public function multiple_delete(){
        $data =  Req::except('_token');
        if($data['bulk-action']==0){
            session::flash('message','Please select the action you want to perform');
            return redirect()->back();
        }
        $tbl = decrypt($data['tbl']);
        $tblid = decrypt($data['tblid']);
        if(empty($data['select-data'])){
            session::flash('message','Please select the data you want to delete');
            return redirect()->back();
        }
        $ids = $data['select-data'];
        foreach($ids as $id){
            DB::table($tbl)->where($tblid,$id)->delete();
        }
        session::flash('message','Data deleted successfully');
        return redirect()->back();
    }
    public function settings(){
        $data = DB::table('settings')->first();
        if($data){
            $data->social = explode(',', $data->social);
        }
        // $data = (array)$data;
        // print_r($data);
        // exit();
        return view('backend.settings', ['data' => $data]);
    }
    public function add_post(){
        $categories = DB::table('categories')->get();
        return view('backend.posts.add-post',['categories'=>$categories]);
    }
    public function all_posts(){
        $posts = DB::table('posts')->paginate(20);
        return view('backend.posts.all-posts',['posts'=>$posts]);

    }
}
