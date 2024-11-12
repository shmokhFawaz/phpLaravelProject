@extends('layouts.appdash')

@section('content')

<div class="container ">
    <div class="row d-flex justify-content-center ">
        <div class="col-sm-6 ">
        <form action="{{route('update')}}" action="get">
        <div class="card mt-5 ">
            <div class="card-body custom-modal-body ">
            <div class="row">
            <div class="col">
             <input type="hidden" name="id" value="{{$products->id}}">
                <label class="label-custem" for="name">اسم المنتج</label>
               <input type="text" id="t1" name="name"  value="{{$products->name}}" class="form-control">
            </div>
            <div class="col ">
            <label class="label-custem" for="Descrition">وصف المنتج</label>
              <input type="text" id="t2" name="Descrition" value="{{$products->Descrition}}" class="form-control">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col text-center">
                <button class="button "> <i class="bi bi-check2"></i> حفظ التعديل</button>
            </div>
        </div>
            </div>
        </div>
    
     </form>

        </div>
    </div>

   
</div>
   
@endsection