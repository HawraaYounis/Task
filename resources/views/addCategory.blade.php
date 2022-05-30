<div >
    <form method="Post" action="{{route('createCategory')}}" >
        @csrf
        Category name:<input type="text" name="category">
        <button type="submit">Add Category</button>
    </form>
</div>