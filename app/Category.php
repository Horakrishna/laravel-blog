<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =['category_name','cat_dis','publication_status'];

    public static function saveCategoryInfo($request){
         //return $request->all();
        // DB::table('categories')->insert([
        //     'category_name'       =>  $request->category_name,
        //     'cat_dis'             =>  $request->cat_dis,
        //     'publication_status'  =>  $request->publication_status
        // ]);

        $category =new Category();
        $category->category_name      = $request->category_name;
        $category->cat_dis            = $request->cat_dis;
        $category->publication_status = $request->publication_status;
        $category->save();


        //Category::create($request->all());

    }
}
