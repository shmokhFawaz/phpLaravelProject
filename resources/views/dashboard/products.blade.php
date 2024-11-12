@extends('layouts.appdash')
@section('content')

<div class="modal" tabindex="-1" id="delete">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header custom-modal-header">
            <div class="col col-sm-1">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="col col-sm-11">
                <h5 class="modal-title"> رسالة تاكيد</h5>
            </div>
        </div>
        <div class="modal-body custom-modal-body">
          <p>هل بالفعل تريد حذف هذا السجل</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="button-cancel" data-bs-dismiss="modal">الغاء الامر</button>
          <button type="button" class="button-error" data-bs-dismiss="modal" onclick="confirm()">حفظ</button> <!--data-bs-dismiss="modal" يخفي المودل بعد مايضغط اليوزر على الزر -->
        </div>
      </div>
    </div>
</div>

<div class="modal " tabindex="-1" id="addproducts">
    <div class="modal-dialog">
        <div class="modal-content ">
            <div class="modal-header custom-modal-header">
                <div class="col col-sm-1">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="col col-sm-11">
                    <h5 class="modal-title">إضافة منتج</h5>
                </div>
            </div>
            <div class="modal-body custom-modal-body">

                <form action="{{route('crateNewProduct')}}" method="get">
                    <div class="row">
                        <div class="col">
                            <label for="prodname" class="form-label">اسم المنتج</label>
                            <input type="text" class="form-control p-2" name="prodname" id="prodname">
                            @error('prodname')
                                <span class="text-danger">يجب ملئ هذا الحقل </span>
                            @enderror

                        </div>
                        <div class="col">
                            <label for="Descrition" class="form-label">وصف المنتج</label>
                            <input type="text" class="form-control p-2" name="Descrition" id="Descrition">
                            @error('Descrition')
                                <span class="text-danger">يجب ملئ هذا الحقل </span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer custom-modal-footer">
                        <button type="submit" class="button ">حفظ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
        
        
<div class="container ">
    <div class="row mt-5">
        <div class="col text-center ">
            <button type="button" class="button mb-5" data-bs-toggle="modal" data-bs-target="#addproducts">
                 اضافة
              </button>
        </div>
    </div>
</div>
        <div class="row ">
            <div class="col">
                <div class="card glass">
                    <div class="card-body">
                        <table >
                            <thead>
                                <th>رقم المنتج</th>
                                <th>اسم المنتج</th>
                                <th>وصف المنتج</th>
                                <th colspan="2">الإجراء</th>
                            </thead>
                            <tbody>
                                @foreach($prod as $items)
                                    <tr>
                                    <td>{{$items->id}}</td>
                                    <td>{{$items->name}}</td>
                                    <td>{{$items->Descrition}}</td>
                                    <td><a href="#" onclick="lunch({{$items->id}})"><i class="bi bi-trash text-danger"></i></a></td>
                                    <td><a href="{{route('edit',['id'=>$items->id])}}"> <i class="bi bi-pencil-square text-success"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
            

        </div>



@endsection