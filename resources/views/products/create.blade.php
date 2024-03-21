<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Product</h1>
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div>
        <label for="name">Name</label>
        <input type="name" name="name" 
        placeholder="name"
        />
        </div>
        <div>
        <label for="name">Qty</label>
        <input type="text" name="qty" 
        placeholder="qty"
        />
        </div>
        <div>
        <label for="name">Price</label>
        <input type="text" name="price" 
        placeholder="Price"
        />
        </div>
        <label for="name">Description</label>
        <input type="text" name="description" 
        placeholder="Description"
        />
        </div>
        <div>
         <input type="submit" value="Submit"  />
        </div>
    </form>
</body>
</html>