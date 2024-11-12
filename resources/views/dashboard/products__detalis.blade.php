@extends('layouts.appdash')

@section('content')

 


<div class="container pr-5 ">
  <div class="row">
    <div class="col">
      <form  action="{{route('createnewdet')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="card glass mt-5">
          <div class="card-body">
            <div class="row">
              <div class="col">
              <label for="product_no"> اختر المنتج</label>
                <select class="form-select" name="product_no" id="product_no">
                  @foreach($prod as $item)
                  <option value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
                  
                  @error('product_no')
                    <span class="text-danger">{{$message}}</span>
                  @enderror
                </select>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col">
                <label for="price" class="form-label">سعر المنتج</label>
                <input type="text" class="form-control" id="price" name="price"value="{{ old('price') }}">
                @error('price')
                  <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="col">
                <label for="qty" class="form-label">الكمية </label>
                <input type="text" class="form-control" id="qty" name="qty"value="{{ old('qty') }}">
                @error('qty')
                  <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
            </div>

            <div class="row mt-3">
              <div class="col">
                <label for="flavor" class="form-label"> النكهة</label>
                <input type="text" class="form-control" id="flavor" name="flavor"value="{{ old('flavor') }}">
                @error('flavor')
                  <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="col">
                <label for="point" class="form-label">التقييم</label>
                <input type="text" class="form-control" id="point" name="point" value="{{ old('point') }}">
                  @error('point')
                    <span class="text-danger">{{$message}}</span>
                  @enderror

              </div>
            </div>
            <div class="row mt-3">
              <div class="col">
                <label for="img" class="form-label">صورة المنتج </label>
                <input class="form-control" type="file" id="img" name="img"accept="image/*" value="{{ old('img') }}">
                @error('img')
                  <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
            </div>
            

            <div class="row mt-2">
              <div class="col text-center">
                  <button class="button mt-5">حفظ</button>
              </div>
            </div>
        
          </div>
        </div>
      </form>
    </div>
  </div>
    
 
 <div class="row mt-5">
        <div class="col">
            <div class="card glass mb-3">
                <div class="card-body ">
                   <table >
                      <thead>
                        <tr>
                            <th>رقم المنتج</th>
                            <th>اسم المنتج</th>
                            <th>سعر المنتج </th>
                            <th>الكمية </th>
                            <th>النكهة </th>
                            <th>التقييم </th>
                            <th>الصورة </th>
                            <th colspan="2">الإجراء</th>
                            
                        </tr>
                       
                      </thead>
                      <tbody>
                        @foreach($producdetails as $item)
                          <tr>
                            <td>
                               {{$item->id}}
                            </td>
                            <td>
                               {{$item->name}}
                            </td>
                            <td>
                                {{$item->price}}
                            </td>
                            <td>
                                {{$item->qty}}
                            </td>
                            <td>
                                {{$item->flavor}}
                            </td>
                            <td>
                                {{$item->point}}
                            </td>
                            <td>
                              <img id='imgdisplay' name='imgdisplay' src="{{ asset('storage/' . $item->image) }}" alt="Product Image" width="100" height="100">
                            </td>
                            <td><a href="#" ><i class="bi bi-trash text-danger"></i></a></td>
                            <td><a href="#"> <i class="bi bi-pencil-square text-success"></i></a></td>
                            
                                                       
                          </tr>
                          @endforeach
                      </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection