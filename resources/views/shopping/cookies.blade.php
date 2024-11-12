@extends('layouts.appuserui')

@section('content')
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col">
                @foreach($producdetails as $counter)
                @if($counter->name == 'كوكيز')
                <div class="row mt-3">
                    <div class="col">
                        <div class="card glass">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-1">
                                        <img class="text-center"src="{{ asset('storage/' . $counter->image) }}" style="width: 200px; height:200px object-fit: cover;">
                                    </div>
                                    <div class="col-sm-9 text-center">
                                        <h2 class="desghi_location desghi_text">{{$counter->name}}</h2>
                                        <h3>{{$counter->Descrition}}</h3>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="row">
                                            <div class="col m-5 pl-5 pt-5">
                                                <a href="{{route('prodet',['id'=>$counter->id])}}" class="btton_a" >التفاصيل</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>


@endsection