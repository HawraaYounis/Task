<div >
    <form method="Post" action="{{route('createProduct')}}" >
        @csrf
        <button type="submit">Add Product</button>
        Product name:<input type="text" name="product" required>
        Price:<input type="text" name="price" required>
        categorty:<select name="category_id" required>
          @foreach($categories as $category)
            <option value='{{ $category->id}}'> {{ $category->name}}</option>
          @endforeach
          <br>
    </form>
</div>