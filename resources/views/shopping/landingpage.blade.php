@extends('layouts.appuserui')

@section('content')




        
<div class="container">
    <div class="row">
        <div class="col">
 


    <main>
        <div class="container">
            <div class="row ">
                <div class="col-sm-6 ">
                    <img class="style-cakeimag" src="{{ asset('image/cake_fp.png') }}" width="480px" height="500px">
                </div>
                <div class="col-sm-6 justify-content-center">
                    <div class="row ">
                        <h1 class="htext">أفضل المخبوزات الصحية</h1>
                    </div>
                    <div class="row">
                        <h4>اذا كنت تحب الطعام الصحي ولا تستطيع مقاومة المخبوزات فهذا المكان المناسب لك ! </h4>

                    </div>
                    <!-- <div class="row">

                    </div> -->
                </div>

            </div>


        </div> 
        <div class="container justify-content-center">
            <div class="row second-row">
                <div class="row">
                    <h1 class="htext p-0 text-center">الأعلى مبيعًا لدينا</h1>
                </div>
                <div class="row p-5">
                    @foreach($producdetails as $items)
                    <div class="col">
                        <div class="card glass glass-card ">
                            <div class="card-body text-center">
                                <div class="row justify-content-center">
                                    <img class="text-center"src="{{ asset('storage/' . $items->image) }}" style="width: 50%; height: 50% object-fit: cover;">
                                </div>
                                <div class="row pt-4">
                                    <h3 class=" p-0 htext">{{$items->name}} {{$items->flavor}}</h3> <h3></h3>
                                </div>
                                <div class="row p-4">
                                    <h4 class="priceText">{{$items->price}} ريال</h4>
                                </div>
                                <div class="row p-5">

                                <div class="d-flex justify-content-center pt-5 p-price"><a class="button" href="{{route('add_to_cart')}}"> اضف الى السلة</a></div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        
        <div class="container">
            <h1 class="htext text-center"> اقسام المنتجات </h1>
            <div class="row mb-5">
                <div class="col">
                    <a href="{{route('Cheesecake')}}">
                    <div class="card glass ">
                        <div class="card-body text-center">
                            <div class="row justify-content-center">
                                <img src="{{ asset('image/Cheesecake.png') }}" style="width: 320px; height: 320px object-fit: cover;" alt="Cheesecake">
                            </div>
                            <div class="row pt-4">
                                <ul class="list-inline">
                                    
                                    <div><li class="list-inline-item "><h3 class=" p-0 htext "> تيشز كيك </h3> </li></div>
                                    
                                  </ul>
                                
                            </div>

                                
                                
                                

                        </div>
                    </div> 
                    </a>
                </div>
                <div class="col">
                    <a href="{{route('cookies')}}">
                    <div class="card glass ">
                        <div class="card-body text-center">
                            <div class="row justify-content-center">
                                <img src="{{ asset('image/cookes.png') }}" style="width: 320px; height: 320px object-fit: cover;" alt="cookes">
                            </div>
                            <div class="row pt-4">
                                <ul class="list-inline">
                                    
                                    <div><li class="list-inline-item "><h3 class=" p-0 htext "> كوكيز  </h3> </li></div>
                                    
                                  </ul>
                                
                            </div>

                                
                                
                                

                        </div>
                    </div>
                    </a>
                </div>
                
                    <div class="col">
                        <a href="{{route('cake')}}">
                            <div class="card glass ">
                                <div class="card-body text-center">
                                    <div class="row justify-content-center">
                                        <img src="{{ asset('image/cake.png') }}" style="width: 320px; height: 320px object-fit: cover;" alt="cake">
                                    </div>
                                    <div class="row pt-4">
                                        <ul class="list-inline">
                                            
                                            <div><li class="list-inline-item "><h3 class=" p-0 htext "> الكيك </h3> </li></div>
                                            
                                        </ul>
                                        
                                    </div>

                                        
                                        
                                        

                                </div>
                            </div>
                        </a>
                    </div>        
                
                

            </div>


        </div>
        
        

    </main>
        </div>
    </div>

</div>


@endsection