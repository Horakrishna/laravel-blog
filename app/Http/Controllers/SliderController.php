<?php

namespace App\Http\Controllers;
use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        return view('admin.slider.add-slider');
    }

    public function manageSlider(){
        return view('admin.slider.manage-slider');
    }
    // private function imageUpload($sliderImage){
    //     $imageName =$sliderImage->getClientOriginalName();
    //     $directory ='slider-image/';
    //     $sliderImage->move($directory, $imageName);
    //     return $directory.$imageName;
    // }
    public function saveSliderInfo(Request $request){

      //  return $request->all();
       $image =$_FILES['slider_image'];
       $imageName =$image->getClientOriginalName();
        print_r($image);
        exit();
        // $slider =new Slider();
        // $slider->slider_title          =$request->slider_title;
        // $slider->slider_dis            =$request->slider_dis;
        // $slider->slider_iamge          =$this->imageUpload($request->file('slider_iamge'));
        // $slider->publication_status    =$request->publication_status;
        // $slider->save();

        // return redirect('/slider/add-slider')->with('message','Slider info save successfully');

    }
}
