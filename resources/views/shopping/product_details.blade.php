@extends('layouts.appuserui')

@section('content')


<div class="d-flex justify-content-center container mt-5">
        <div class="card p-3 bg-white glass card-det">
            <div class="about-product text-center mt-2"><img src="{{ asset('storage/' . $prod->image) }}" width="350" height="300">
                <div>
                    <h4>{{$prod->name}}</h4>
                    <h6 class="mt-0 text-black-50">{{$prod->Descrition}}</h6>
                </div>
            </div>
            <div class="stats mt-2">
                <div class="d-flex justify-content-between p-price"><h5>النكهة</h5><h5>{{$prod->flavor}}</h5></div>
                <div class="d-flex justify-content-between p-price"><h5>السعر</v><h5>{{$prod->price}} ريال</h5></div>
                <div class="row">
                    <div class="col">
                        
                        <div class="d-flex justify-content-center pt-5 p-price"><a class="button" href="{{route('add_to_cart')}}"> اضف الى السلة</a></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-center pt-5 p-price"><a class="button" href="{{route('index')}}">مواصلة الشراء  </a></div>
                    </div>
                </div>
                

            </div>

        </div>
    </div>
    


@endsection