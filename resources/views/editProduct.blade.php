<div >
    
    <form method="Post" action="{{ route('updateProduct', $product->id) }}" >
        @csrf
        
        <button type="submit">Update Product</button>
        Product name:<input type="text" name="product"  value="{{$product->description }}" required>
        Price:<input type="text" name="price" value="{{$product->price }}" required>
        categorty:<select name="category_id" required>
          @foreach($categories as $category)
            <option value='{{ $category->id}}'> {{ $category->name}}</option>
          @endforeach
         
          <br>
    </form>
</div>