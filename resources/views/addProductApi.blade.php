@extends('master')
@section('main')
   <div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-8 ">
            <h4 class="text-center text-info text-uppercase">Add Products Here</h4>
            <form action="{{route('addProduct')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="token" class="fw-bold text-warning">Enter Token</label>
                    <input type="text" class="form-control" id="token" name="token" placeholder="Token">
                </div>
                <div class="form-group">
                    <label for="email" class="fw-bold text-warning">Enter Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="email">
                </div>
                <div class="form-group">
                    <label for="name" class="fw-bold text-warning">Enter Product Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="product name">
                </div>
                <div class="form-group">
                    <label for="category" class="fw-bold text-warning">Enter Product Category</label>
                    <input type="text" class="form-control" id="category" name="category" placeholder="product category">
                </div>
                <div class="form-group">
                    <label for="price" class="fw-bold text-warning">Set Price</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="set price">
                </div>
                <div class="form-group">                    
                    <input type="submit" class="form-control mt-2 btn btn-info w-50" value="Add New Product">
                </div>
            </form>
        </div>
    </div>
   </div>
@endsection