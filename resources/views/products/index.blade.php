@include('partials.header')
<x-nav />
<div class="col text-center">
  <a href=" /addProduct " class="btn btn-xs btn-primary px-5">Add Product</a>
</div>
@if (Session::has('success'))
<p class="fs-2 text-center">{{Session::get("success")}}</p>
{{Session::get('success')}}
@endif
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Product ID</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  @foreach ($products as $product)
  <tbody>
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->description}}</td>
      <td>{{$product->quantity}}</td>
      <td>{{$product->price}}</td>
      <td><a href="/editProduct/{{$product->id}}">Edit</a></td>
      <td><a href="deleteProduct/{{$product->id}}">Delete</a></td>
    </tr>
  </tbody>
  @endforeach
</table>
@include('partials.footer');
