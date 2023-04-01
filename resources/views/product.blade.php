<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practice Api</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="p-5">
    <h6 class="text-center">Product Api Access For Practice: <span class="text-primary">https://jim.ovshopbd.com/api/viewapi</span></h6>
    <a href="https://docs.google.com/document/d/1kEzWTN6Qa_87dHrzS8yG7mwlzBMyXbVq4DC1ZWV8JVE/edit?usp=sharing" target="_blank" class="btn btn-info">Documentation</a>
    <h1>Products</h1>
   
    <table class="table" style="border:1px solid black;">
        <thead>
            <tr>
                <th>Sl</th>
                <th>Name</th>                
                <th>Price</th>                                            
                <th>Category</th>                
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->category}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('blade.addproduct')}}" class="btn btn-success">Add Product</a>
    <a href="{{route('blade.editproduct')}}" class="btn btn-success">Edit Product</a>
    <a href="{{route('blade.deleteproduct')}}" class="btn btn-success">Delete Product</a>
    <a href="{{route('viewProduct')}}" class="btn btn-success">View Product</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>
