<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Product</h1>
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <form method="POST" action="{{ route('product.update', ['product' => $product->id]) }}">
        @csrf
        @method('put')
        <div>
        <label for="name">Name</label>
        <input type="name" name="name" 
        placeholder="name" value="{{$product->name}}"
        />
        </div>
        <div>
        <label for="name">Qty</label>
        <input type="text" name="qty" 
        placeholder="qty" value="{{$product->qty}}"
        />
        </div>
        <div>
        <label for="name">Price</label>
        <input type="text" name="price" 
        placeholder="Price" value="{{$product->price}}"
        />
        </div>
        <label for="name">Description</label>
        <input type="text" name="description" 
        placeholder="Description" value="{{$product->description}}"
        />
        </div>
        <div>
         <input type="submit" value="Update"  />
        </div>
    </form>
</body>
</html>