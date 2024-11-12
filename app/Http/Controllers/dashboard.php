<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use App\Models\Products_Detalis;
use Illuminate\Support\Facades\DB;

class dashboard extends Controller
{
    public function index(Request $request){

        return view('dashboard.index');

    }

    public function crateNewProduct(Request $request){
        $request->validate([
            'prodname'=>['required'],
            'Descrition'=>['required'],

        ]);
        $prod=products::create([
        'name'=>$request->prodname,//حقل النيم الموجود في الداتابيس يساوي النيم الموجود في الفورم
        'Descrition'=>$request->Descrition
        ]);
        
        return redirect()->route('products');//route('products') هنا حطيت اسم الراوت مو الصفحة ولا الدالة
 
    }
    public function products(Request $request){
        
        $prod = products::All();
        return view('dashboard.products', ['prod' => $prod]);

    }

    public function delete(){
        $id=$_GET['id_product'];
        $p=products::find($id);
        $p->delete();
        

    }


    public function edit($id){
       
        $products=products::find($id);
        return view('dashboard.edit',['products'=>$products]);


    }

    public function update(Request $request){

        
        products::where('id',$request->id)
        ->update(['name'=>$request->name,'Descrition'=>$request->Descrition]);
        return redirect()->route('products');


    }
    public function showproduct_details()
    {   
      $prod=products::All();
      $producdetails=DB::table('products')
      ->join('products__detalis','products.id','=','products__detalis.id_products')
      ->get();

      
      
      return view('dashboard.products__detalis',['prod'=>$prod,'producdetails'=>$producdetails]);
    }
    

    public function create_new_details(Request $request){
        
       
        $request->validate([
            'price' => ['required', 'numeric'], // التحقق من أن السعر رقم وضمن نطاق معين
            'qty' => ['required', 'integer'],       // التحقق من أن الكمية عدد صحيح وضمن نطاق معين
            'img' => ['required', 'image'], // التحقق من أن الصورة من نوع مناسب وبحجم معين
            'point' => ['required', 'integer', 'min:1' , 'max:5' ],              // التحقق من أن النقاط عدد صحيح وأكبر من أو يساوي صفر
            'flavor' => ['required', 'string'],             // التحقق من أن النكهة نصية وبحد أقصى 50 حرف
        ], [
            'price.required' => 'السعر مطلوب.',
            'price.numeric' => 'يجب أن يكون حقل السعر رقماً.',
        
            'qty.required' => 'الكمية مطلوبة.',
            'qty.integer' => 'يجب أن يكون حقل الكمية رقماً صحيحاً.',
            'qty.min' => 'يجب أن يكون العدد أكبر من أو يساوي 1.',
            'qty.max' => 'يجب أن يكون العدد أقل من أو يساوي 5.',

        
            'img.required' => 'الصورة مطلوبة.',
            'img.image' => 'يجب أن يكون الملف صورة.',

        
            'point.required' => 'النقاط مطلوبة.',
            'point.integer' => 'يجب أن تكون النقاط رقماً صحيحاً.',
            'point.min' => 'يجب ألا تكون النقاط أقل من 0.',
        
            'flavor.required' => 'النكهة مطلوبة.',
            'flavor.string' => 'يجب أن تكون النكهة نصاً.',
        ]);
         
        $img=$request->file('img')->store('product_images','public');
        $product_details=Products_Detalis::Create([
          'id_products'=>$request->product_no,
          'price'=>$request->price,
          'qty'=>$request->qty,
          'image'=>$img,
          'point'=>$request->point,
          'flavor'=>$request->flavor
       ]);

       $product_details->save();
       return redirect()->route('showdet');
    }
    



}

