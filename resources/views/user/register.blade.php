@include('partials.header')
<x-nav/>
<form action="/store" method="POST">
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="name" class="form-control" name="name" aria-describedby="nameHelp">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
    @error('email')
      <p>Email already exists.</p>
    @enderror
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="mb-3">
    <label for="password_confirmation" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name="password_confirmation">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@include('partials.footer')