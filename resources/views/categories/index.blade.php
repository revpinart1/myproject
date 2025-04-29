@extends('layouts.admin')
@section('content')

<div class="container " style="margin-top: 200px; ">
    <div class="row mt-5">
        <div class="col d-flex justify-content-center align-items-center ">
            <div class="card">
                <div class="card-header" style="background-color: pink;" > اضافه فئه</div>
                <div class="card-body">
                    
                    <form action="{{route('categories.create')}}" method="POST"> 
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="">اسم الفئه </label>
                                <input type="text" class="form-control" name="categ_name" >
                          @error('categ_name')
                          <small class="text-danger">{{$message}}</small>
                          @enderror
                            </div>
                            <div class="col">
                                <label for="">وصف الفئه </label>
                                <input type="text" class="form-control" name="categ_desc" >
                                @error('categ_desc')
                          <small class="text-danger">{{$message}}</small>
                          @enderror
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
                <div class="card-header  text-center">الفئات</div>
                <div class="card-body text-center">
                    <table class="table">

                    <thead >
                        <tr >
                       <td> رقم الفئه</td>
                            <td>اسم الفئه</td>
                            <td>وصف الفئه</td>
                            <td colspan=2>اجراء</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cate as $item)
                        <tr >
                        <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td colspan="2 " class="px-2">
                        <a href="{{route('categories.edit', $item->id)}}" class="text-danger"> <i class="bi bi-pen px-3"></i></a>
                       
                        <a href="{{ route('categories.delete', $item->id) }}" class="text-danger">
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
</div>
@endsection
