@extends('master')
@section('main')
   <div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-8 ">
            <h4 class="text-center text-info text-uppercase">Delete Products Here</h4>
            <form action="{{route('deleteProduct')}}" method="POST">
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
                    <label for="id" class="fw-bold text-warning">Enter Product Id</label>
                    <input type="text" class="form-control" id="id" name="id" placeholder="product id">
                </div>                
                <div class="form-group">                    
                    <input type="submit" class="form-control mt-2 btn btn-info w-50" value="Delete This Product">
                </div>
            </form>
        </div>
    </div>
   </div>
@endsection