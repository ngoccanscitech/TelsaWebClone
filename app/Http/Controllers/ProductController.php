<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $products = Product::with('category')->get();
            return response()->json([
            'products' => $products
        ]);
        }catch(ValidationException $e){
            return response()->json([
                'status' => 'error',
                'msg' => 'error',
                'errors' => $e->errors()
            ], 422);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        // return response()->json($request->category_id, 200);
        $product->category_id = $request->category_id;
        $product->save();
        if($request->image){
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $destinationPath = public_path('storage/uploads');
            $image->move($destinationPath, $image_new_name);
            $product->image = $image_new_name;
            $product->save();
        }
                
            return response()->json([
                'product' => $product
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();
        if($request->image && $request->image !== $product->image){
            $image = $request->image;
            $new_image = time().$image->getClientOriginalName();
            $destinationPath = public_path('storage/uploads');
            $image->move($destinationPath, $new_image);
            $product->image = $new_image;
            $product->save();
        }

        return response()->json([
            'status'=> 'success',
            'message'=>'updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function latestProducts(){

        $products = Product::with('category')->orderBy('created_at', 'desc')->take(5)->get();
        return response()->json([
        'products' => $products
    ]);
    }
}
