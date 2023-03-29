@include('partials.header')
<x-nav />
<div class="col text-center">
  <a href=" /addCustomer " class="btn btn-xs btn-primary px-5">Add</a>
</div>
@if (Session::has('success'))
<p class="fs-2 text-center">{{Session::get("success")}}</p>
{{Session::get('success')}}
@endif
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Last Name</th>
      <th scope="col">First Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Address</th>
      <th></th>
      <th>

      </th>
    </tr>
  </thead>
  @foreach ($customers as $customer)
  <tbody>
    <tr>
      <th scope="row">{{$customer->id}}</th>
      <td>{{$customer->lastName}}</td>
      <td>{{$customer->firstName}}</td>
      <td>{{$customer->email}}</td>
      <td>{{$customer->contactNumber}}</td>
      <td>{{$customer->address}}</td>
      <td><a href="edit/{{$customer->id}}">Edit</a></td>
      <td><a href="delete/{{$customer->id}}">Delete</a></td>
    </tr>
  </tbody>
  @endforeach
</table>
@include('partials.footer');
