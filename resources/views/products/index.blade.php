@extends('layouts.admin')
@section('content')

<div class="container " style="margin-top: 200px; ">
    <div class="row mt-5">
        <div class="col d-flex justify-content-center align-items-center ">
            <div class="card">
                <div class="card-header" style="background-color: pink;" > اضافه منتج</div>
                <div class="card-body">
                    
                    <form action="{{route('products.create')}}" method="POST"> 
                        @csrf

                        <div class="row">
                            <div class="col">
                                <select name="categories_id" class="form-select mb-5">
                                   
                                    @foreach($categories as $items)
                                    <option value="{{$items->id}}">{{$items->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="form-label">اسم المنتج </label>
                                <input type="text" class="form-control" name="name" >
                                @error('name')
                          <small class="text-danger">{{$message}}</small>
                          @enderror
                            </div>
                            <div class="col">
                                <label class="form-label">وصف المنتج </label>
                                <input type="text" class="form-control" name="description" >
                                @error('description')
                          <small class="text-danger">{{$message}}</small>
                          @enderror
                            </div>
                            <div class="col">
                                <label class="form-label">الكمية</label>
                                <input type="number" class="form-control" name="stock" >
                                @error('stock')
                          <small class="text-danger">{{$message}}</small>
                          @enderror
                            </div>
                        </div>
                        <div class="row mt-3">

                        <div class="col">
                                <label class="form-label">السعر</label>
                                <input type="number" class="form-control" name="price" >
                                @error('price')
                          <small class="text-danger">{{$message}}</small>
                          @enderror
                            </div>
                            <div class="col">
                                <label class="form-label">الصورة</label>
                                <input type="file" class="form-control" name="image" >
                          
                            </div>

                            
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary"> حفظ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header  text-center">المنتجات</div>
                <div class="card-body ">
                    <table class="table ">

                    <thead class="text-center">
                        <tr >
                       <td class="text-center"> رقم المنتج</td>
                            <td class="text-center">اسم المنتج</td>
                            <td class="text-center" >وصف المنتج</td>
                            <td class="text-center">الكمية</td>
                            <td class="text-center">السعر</td>
                            <td class="text-center">رقم الفئه</td>
                            <td class="text-center">الصورة </td>


                            <td colspan=2>اجراء</td>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach($products as $item)
                        <tr >
                        <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->stock}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->categories_id}}</td>

                    <td>{{$item->image}}</td>


                    <td colspan="2 " class="px-2">
                        <a href="{{route('products.edit', $item->id)}}" class="text-danger"> <i class="bi bi-pen px-3"></i></a>
                       
                        <a href="{{ route('products.delete', $item->id) }}" class="text-danger">
        <i class="bi bi-trash"></i>
    </a>

</td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
