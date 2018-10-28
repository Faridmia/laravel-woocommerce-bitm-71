<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        return view('admin.brand.add-brand');
    }


    public function saveBrand(Request $request){
        $this->validate($request, [
            'brand_name' => 'required|regex:/^[\pL\s\-]+$/u|max:20|min:2',
            'brand_description' => 'required',
            'publication_status' => 'required'

        ]);

        $brand = new Brand();

        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;
        $brand->save();
        return redirect('/brand/add')->with('message','Brand Save Successfully..');

    }

    public function ManageBrandInfo(){
        $brands = Brand::all();
        //return $categories;
        return view('admin.brand.manage-brand',['brands' => $brands]);
    }

    public function PublishedBrandInfo($id){
        $brand = Brand::find($id);
        //return $category;
        $brand->publication_status = 1;
        $brand->save();

        return redirect('/brand/manage')->with('message', 'Brand Info published');

    }


    public function UnpublishedBrandInfo($id){
        $brand = Brand::find($id);
        //return $category;
        $brand->publication_status = 0;
        $brand->save();

        return redirect('/brand/manage')->with('message', 'Brand Info Unpublished');
    }

        public function EditBrandInfo($id){
            $brand = Brand::find($id);
            return view('admin.brand.edit-brand',['brand' => $brand]);

        }

        public function updateBrandInfo(Request $request){
            $this->validate($request, [
                'brand_name' => 'required|regex:/^[\pL\s\-]+$/u|max:20|min:2',
                'brand_description' => 'required',
                'publication_status' => 'required'

            ]);
            $brand = Brand::find($request->brand_id);

            $brand->brand_name = $request->brand_name;
            $brand->brand_description = $request->brand_description;
            $brand->publication_status = $request->publication_status;
            $brand->save();
            return redirect('/brand/manage')->with('message','Brand Info Updated');

        }

        public function deleteBrandInfo($id){

            $brand = Brand::find($id);
            $brand->delete();
            return redirect('/brand/manage')->with('message','Brand Delete Successfully');


        }


}
