@extends('layouts.admin')
@section('content')

<div class="container " style="margin-top: 200px; ">
    <div class="row mt-5">
        <div class="col d-flex justify-content-center align-items-center ">
            <div class="card">
                <div class="card-header" style="background-color: pink;" > اضافه فئه</div>
                <div class="card-body">
                    
                    <form action="{{route('categories.update', $products->id)}}" method="POST"> 
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="">اسم المنتج </label>
                                <input type="text" class="form-control" name="name" value="{{old('name', $products->name) }}">
                    
                            </div>
                            <div class="col">
                                <label for="">وصف المنتج </label>
                                <input type="text" class="form-control" name="description" value="{{ old('description', $products->description) }}">
                        
                            </div>
                            <div class="col">
                                <label for="">الكميه</label>
                                <input type="text" class="form-control" name="stock" value="{{ old('stock', $products->stock) }}">
                        
                            </div> 
                            <div class="row">
                            <div class="col">
                                <label for="">السعر  </label>
                                <input type="text" class="form-control" name="price" value="{{ old('price', $products->price) }}">
                        
                            </div>
                            <div class="col">
                                <label for="">الفئه  </label>
                                <input type="text" class="form-control" name="categories_id" value="{{ old('categories_id', $products->categories_id) }}">
                        
                            </div>
                            <div class="col">
                                <label for="">الصوره</label>
                                <input type="file" class="form-control" name="image" value="{{ old('image', $products->image) }}">
                        
                            </div>
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
