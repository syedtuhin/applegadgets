<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function products(Request $r)
    {
        
        if($r->ismethod('POST')){
            $data = $r->all();
            $rows = Product::all();
            if($data['color']){
                if(isset($data['color']) && $data['color']!=''){
                    $color = strtolower($data['color']);
                }
                $rows = $rows->where('color',$color);
            }
            if($r->storage){
                if(isset($data['storage']) && $data['storage']!=''){
                    $storage = strtolower($data['storage']);
                }
                $rows = $rows->where('storage',$storage);
            }
            if(!empty($rows)){
                return response()->json([
                    'products'=>$rows,
                 ],200);
            }else{
                return response()->json([
                    'products'=>"List is Empty",
                 ],200);
            }    


        }else{
            return response()->json(['message'=>'Wrong Method'],401);
        }
        
    }
}
