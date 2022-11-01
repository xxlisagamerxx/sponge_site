<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

$products = Product::latest()->paginate(5);
$i = 0;
?>

<!DOCTYPE html>
<title> Sponge greeting</title>
<link rel="stylesheet" href="/app.css">

<body>
<ul>
    <li><a href="/" class="button">Home</a></li>
    <li><a href="/posts" class="button">Posts</a></li>
    <li><a href="products" class="button">Make post</a></li>
    <li><a href="/search" class="button">Search posts</a></li>
    <li><a href="/login" class="button">login</a></li>
    <li><a href="/register" class="button">register</a></li>
</ul>
<h1>Spongebob Posts!</h1>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Picture</th>
    </tr>

@foreach ($products as $product)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $product->name }}</td>
        <td><img src="{{ $product->detail }}"style="width:auto;height:200px;"></td>

    </tr>
    @endforeach
    </table>

{!! $products->links() !!}

</body>

