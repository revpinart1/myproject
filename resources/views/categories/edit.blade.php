@extends('layouts.admin')
@section('content')

<div class="container " style="margin-top: 200px; ">
    <div class="row mt-5">
        <div class="col d-flex justify-content-center align-items-center ">
            <div class="card">
                <div class="card-header" style="background-color: pink;" > اضافه فئه</div>
                <div class="card-body">
                    
                    <form action="{{route('categories.update', $data->id)}}" method="POST"> 
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="">اسم الفئه </label>
                                <input type="text" class="form-control" name="categ_name" value="{{old('categ_name', $data->name) }}">
                    
                            </div>
                            <div class="col">
                                <label for="">وصف الفئه </label>
                                <input type="text" class="form-control" name="categ_desc" value="{{ old('categ_desc', $data->description) }}">
                        
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

  
</div>
@endsection
