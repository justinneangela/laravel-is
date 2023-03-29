@include('partials.header')
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <form action="/updateProduct" method="POST">
                @csrf
                <h3 class="mb-5">EDIT PRODUCT</h3>
                <input type="hidden" name="id" class="form-control" value="{{$product->id}}" />
                <div class="form-outline mb-4">
                    <label class="form-label" for="description">Description</label>
                    <input type="text" name="description" class="form-control" value="{{$product->description}}" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="quantity">Quantity</label>
                    <input type="text" name="quantity" class="form-control" value="{{$product->quantity}}" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="price">Price</label>
                    <input type="text" name="price" class="form-control" value="{{$product->price}}" />
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
