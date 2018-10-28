<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;


class ProductController extends Controller
{

    public function index(){

       $categories = Category::where('publication_status' , 1)->get();
       $brands = Brand::where('publication_status', 1)->get();
        return view('admin.product.add-product',[
            'categories' => $categories,
            'brands'     => $brands
        ]);
    }

    protected function productInfoValidate($request){

        $this->validate($request,[
            'category_id' => 'required',
            'brand_id' => 'required',
            'product_name' => 'required',
            'product_price' => 'required',
            'product_quantity' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'product_image' => 'required',
            'publication_status' => 'required'


        ]);
    }

    protected function productImageUpload($request){
        $productImage = $request->file('product_image');
        $fileType = $productImage->getClientOriginalExtension();
        $imageName = $request->product_name.'.'.$fileType;
        //$imageName = $productImage->getClientOriginalName();
        $directory = 'product-images/';
        $imageUrl = $directory.$imageName;
       // $productImage->move($directory,$imageName);
        Image::make($productImage)->resize(200,200)->save($imageUrl);
        return $imageUrl;

    }

    public function saveProductBasic($request,$imageUrl){
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->product_image = $imageUrl;
        $product->publication_status = $request->publication_status;
        $product->save();
    }


    public function saveProductInfo(Request $request){

        $this->productInfoValidate($request);
        $imageUrl = $this->productImageUpload($request);
        $this->saveProductBasic($request,$imageUrl);

        return redirect('product/add')->with('message','Product Save Successfully...');


//         $product =  new Product();
//         $product->product_image = $imageUrl;

    }

    public function manageProduct(){

        $products = DB::table('products')
                    ->join('categories','products.category_id', '=', 'categories.id')
                    ->join('brands','products.brand_id', '=', 'brands.id')
                    ->select('products.*','categories.category_name','brands.brand_name')
                    ->get();
        //return $products;

        return view('admin.product.manage-product',['products' => $products]);
    }


    public function editProduct($id){
        $categories = Category::where('publication_status' , 1)->get();
        $brands = Brand::where('publication_status', 1)->get();
        $product = Product::find($id);

        return view('admin.product.edit-product',[
            'product' => $product,
            'categories' => $categories,
            'brands'    => $brands

        ]);

    }

    public function productBasicInfoUpdate($product,$request,$imageUrl = null){
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        if($imageUrl) {
            $product->product_image = $imageUrl;
        }
        $product->publication_status = $request->publication_status;
        $product->save();
    }


    public function updateProduct(Request $request){

        $productImage = $request->file('product_image');
        $product = Product::find($request->product_id);
        if($productImage){

            unlink($product->product_image);
            $imageUrl = $this->productImageUpload($request);
            $this->productBasicInfoUpdate($product,$request,$imageUrl);

        }
        else{
            $this->productBasicInfoUpdate($product,$request);


        }

        return redirect('/product/manage')->with('message','Product info updated successfully...');

    }


}
