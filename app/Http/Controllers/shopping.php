<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\Products_Detalis;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class shopping extends Controller
{
    public function index(){

        
        $prod=products::All();
        $producdetails=DB::table('products')
        ->join('products__detalis','products.id','=','products__detalis.id_products')
        ->where('products__detalis.point', '=', 5)
        ->orderBy('products__detalis.point', 'desc')
        ->limit(3)
        ->get();

        
        return view('shopping.landingpage',['prod'=>$prod,'producdetails'=>$producdetails]);

    }
    public function Cheesecake(){
        $prod=products::All();
        $producdetails=DB::table('products')
        ->join('products__detalis','products.id','=','products__detalis.id_products')
        ->get();
        return view('shopping.Cheesecake',['producdetails'=>$producdetails]);

    }
    public function cookies(){
        $prod=products::All();
        $producdetails=DB::table('products')
        ->join('products__detalis','products.id','=','products__detalis.id_products')
        ->get();
        return view('shopping.cookies',['producdetails'=>$producdetails]);


    }

    public function cake(){
        return view('shopping.cake');

    }
    public function prodet($id){
        $prod=products::All();
        $producdetails=DB::table('products')
        ->join('products__detalis','products.id','=','products__detalis.id_products')
        ->where('products__detalis.id', '=', $id)
        ->first();

        return view('shopping.product_details',['prod'=>$producdetails]);

    }

    public function add_to_cart()
    {
        $counter=session::get('counter');
        $counter++;
        session::put('counter',$counter);
        return redirect()->route('index');


    }

}