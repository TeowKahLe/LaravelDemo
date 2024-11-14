<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>
    <h1>Shopping Cart</h1>

    <!-- Display cart items -->
    @if(count($cartItems) > 0)
        <ul>
            @foreach($cartItems as $item)
                <li>
                    {{ $item->name }} - ${{ $item->price }}
                    <form action="{{ route('cart.remove', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Remove</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <p>Your cart is empty!</p>
    @endif

    <!-- Form to add an item to the cart -->
    <h2>Add Item to Cart</h2>
    <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Item Name" required>
        <input type="number" name="price" step="0.01" placeholder="Item Price" required>
        <button type="submit">Add Item</button>
    </form>

</body>
</html>