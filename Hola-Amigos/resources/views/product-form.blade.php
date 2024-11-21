<!-- resources/views/product-form.blade.php -->

<form action="{{ route('product.store') }}" method="POST">
    @csrf
    <label for="name">Product Name:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea><br>

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" required><br>

    <button type="submit">Submit</button>
</form>
