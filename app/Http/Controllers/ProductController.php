<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;


class ProductController extends Controller
{
    public function index() {
        $data = DB::table("products")->get();
        return view('products.index',['products'=>$data]);
    }
    
    public function deleteProduct($id) {
        $delete=DB::table("products")
        ->where("id", "=", $id)
        ->delete();
        return redirect('/product')->with("success", 'Product deleted successfully');
    }

    public function addProduct()
    {
        return view('products.add');
    }

    public function saveProduct(Request $req)
    {
        // dd($req);
        $validated = $req->validate([
            "description" => ["required", "min:4"],
            "quantity" => ["required", "min:1"],
            "price" => ["required", "min:1"]
        ]);

        $data = Product::create($validated);
        return redirect("/product")->with("success", "Product Added Successfully");
    }

    public function editProduct($id)
    {
        $data = Product::findOrFail($id);
        return view("products.edit", ["product" => $data]);
    }

    public function updateProduct(Request $req)
    {
        $req->validate([
            "description" => ["required", "min:3"],
            "quantity" => ["required"],
            "price" => ["required"]
        ]);

        $data = Product::find($req->id);
        $data->description = $req->description;
        $data->quantity = $req->quantity;
        $data->price = $req->price;
        $data->save();

        return redirect("/product")->with("success", "Product Updated Successfully");
    }
}
