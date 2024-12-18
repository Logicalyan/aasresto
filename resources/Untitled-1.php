{{-- <main class="p-4 md:ml-64 peer-checked:ml-16 h-auto pt-20">


        <h1>Your Cart</h1>
        <ul>
            <li>
                @foreach ($items as $cartItem)
                    <p>id: {{ $cartItem->id }}</p>
                    <p>
                        {{ $cartItem->menu->name }}
                    </p>
                    <p>
                        {{ $cartItem->quantity }} * Rp{{ number_format($cartItem->menu->price) }}
                    </p>
                    <p>
                        - Created_at: {{ $cartItem->created_at->format('H:i:s') }}
                    </p>
                    - Subtotal: Rp{{ number_format($cartItem->subtotal) }}

                    <form action="{{ route('cart-item.destroy', $cartItem->id) }}" method="post">
                        @csrf
                        @method('DELETE')

                        <button type="submit">
                            Hapus
                        </button>
                    </form>
                @endforeach

            </li>
            <a href="{{ route('home') }}"> Tambah pesanan</a>
        </ul>
        <form action="{{ route("addOrder") }}" method="POST">
            @csrf
            @method("POST")
            <button type="submit" class="block bg-red-400">Proceed to Checkout</button>
        </form>
    </main> --}}3