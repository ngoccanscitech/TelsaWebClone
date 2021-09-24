<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Cart;
use App\Product;
use DB;
use \App\Jobs\SendEmail;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::get();
        
        return response()->json([
            'customers' => $customers
        ]);

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
        DB::beginTransaction();
        try{
            $customer = new Customer;
            $customer->name = $request->name;
            $customer->phone = $request->phone;
            $customer->address = $request->address;
            $customer->email = $request->email;      
            $customer->save();
            $customer->refresh();
            $idProducts =  json_decode($request->idProducts);
            
            foreach($idProducts as $idProduct){
                $cart = new Cart;
                $cart->customer_id = $customer->id;
                $cart->product_id = $idProduct;
                $cart->save();
            }
            
            SendEmail::dispatch($request->email)->delay(now()->addSeconds(3));
            DB::commit();
            return response()->json([
                'status' => $idProducts
            ]);
        }catch(Exception $e){
            DB::rollBack();
            throw new Exception($e->getMessage());
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        $carts = $customer->carts()->get();
        $products = array();
        foreach($carts as $cart){
            $product_id = $cart->id;
            $product = Product::find($product_id);
            $products[] = $product;
        }
        return response()->json([
            'products'=>$products
        ]);
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
        //
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
}
