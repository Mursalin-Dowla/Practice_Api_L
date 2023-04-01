<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    function getAll(Request $request){
        $user = User::where('email',$request->email)->get();
        
        if(count($user) > 0){
            if($request->token === "jim"){
                $products = Products::all();
                return response()->json([
                    'status' => "101",
                    'message' => "Data Found",
                    'products' => $products,                   
                ]);
            }
            else{
                return response()->json([
                    'status' => "202",
                    'message' => "Invalid Token",                
                ]);
            }
        }
        else{
            return response()->json([
                'status' => "303",
                'message' => "Invalid Email",                
            ]);
        }
        
    }
    function viewAll(Request $request){                        
                $products = Products::all();
                return response()->json([                    
                    'products' => $products,                   
                ]);                    
    }
    function deleteProduct(Request $request){
        $user = User::where('email',$request->email)->get();
        if(count($user) > 0){
            if($request->token === "jim"){
                $product = Products::find($request->id);
                if($product){
                    $product->delete();
                    return response()->json([
                        "status" => "101",
                        "message" => "Product Deleted"
                    ]);
                }
                else{
                    return response()->json([
                        'status' => "404",
                        'message' => "Data not Found",                               
                    ]);
                }
               }
               else{
                return response()->json([
                    'status' => "202",
                    'message' => "Invalid Token",                
                ]);
               }
        }
        else{
            return response()->json([
                'status' => "303",
                'message' => "Invalid Email",                
            ]);
        }       
    }

    function updateProduct(Request $request){
        
        $user = User::where('email',$request->email)->get();
        if(count($user) > 0){
            if($request->token === "jim"){
                $product = Products::find($request->id);
                if($product){
                    $product->name = $request->name;
                    $product->category = $request->category;
                    $product->price = $request->price;
                    $product->update();
                    return response()->json([
                        "status" => "101",
                        "message" => "Product Updated"
                    ]);
                }
                else{
                    return response()->json([
                        'status' => "404",
                        'message' => "Data not Found",                               
                    ]);
                }
               }
               else{
                return response()->json([
                    'status' => "202",
                    'message' => "Invalid Token",                
                ]);
               }
        }
        else{
            return response()->json([
                'status' => "303",
                'message' => "Invalid Email",                
            ]);
        }       
    }
    function addProduct(Request $request){
        
        $user = User::where('email',$request->email)->get();
        if(count($user) > 0){
            if($request->token === "jim"){
                $product = new Products;                
                    $product->name = $request->name;
                    $product->category = $request->category;
                    $product->price = $request->price;
                    $product->save();
                    return response()->json([
                        "status" => "101",
                        "message" => "Product added"
                    ]);                            
               }
               else{
                return response()->json([
                    'status' => "202",
                    'message' => "Invalid Token",                
                ]);
               }
        }
        else{
            return response()->json([
                'status' => "303",
                'message' => "Invalid Email",                
            ]);
        }       
    }
}
