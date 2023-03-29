@include('partials.header')
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <form action="/updateCustomer" method="POST">
                @csrf
                <h3 class="mb-5">EDIT</h3>
                <input type="hidden" name="id" class="form-control" value="{{$customer->id}}" />
                <div class="form-outline mb-4">
                    <label class="form-label" for="lastName">Last Name</label>
                    <input type="text" name="lastName" class="form-control" value="{{$customer->lastName}}" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="firstName">First Name</label>
                    <input type="text" name="firstName" class="form-control" value="{{$customer->firstName}}" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="{{$customer->email}}" />
                    @error("email")
                        <p>Email already exists.</p>
                    @enderror
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="contactNumber">Contact Number</label>
                    <input type="text" name="contactNumber" class="form-control" value="{{$customer->contactNumber}}" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="address">Address</label>
                    <input type="text" name="address" class="form-control" value="{{$customer->address}}" />
                </div>

                <input type="submit" class="btn btn-primary btn-lg" value="Save" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@include('partials.footer')
