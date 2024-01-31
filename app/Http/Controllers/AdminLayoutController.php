<?php

namespace App\Http\Controllers;

use App\Models\BakeUser;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class AdminLayoutController extends Controller
{
    public function content()
    {
        $income = DB::table('bake_users')
            ->pluck('amount')
            ->sum();
        $product = DB::table('products')
            ->pluck('product_name')
            ->count();

        $users = DB::table('bake_users')
        ->pluck('amount')
        ->count();
        return view(
            'admin.page.content',
            ['product' => $product],
            ['income' => $income],
            ['users' => $users],

        );
    }
    public function productSubmit(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        $product = new product();
        $product->product_name = $request->name;
        $product->product_price = $request->price;
        $product->product_quantity  = $request->quantity;
        $product->product_description  = $request->description;
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = $image->hashName();
            $image->move($destinationPath, $profileImage);
            $product['product_image'] = $profileImage;
            $product->save();
            return redirect()->route('content');
        }


        if ($product) {
            $request->session()->flash('success', 'Product Added Successfully!!!!!!!!!!!!!!!!!!!');
            return redirect()->route('content');
        }
    }
    public function userList()
    {
        $users = DB::table('bake_users')
            ->select('*')
            ->simplePaginate(5);
        return view('admin.page.userList', ['users' => $users]);
    }
    public function userDelete($id)
    {
        $delete = BakeUser::find($id)->delete();

        return redirect()->route('user.list');
    }
    public function updateSection($id)
    {
        $users = BakeUser::find($id) //6
            ->first();



        return view('admin.page.update', ['users' => $users]);
    }
    public function updateSubmit(Request $request)
    {
        BakeUser::find($request->id)->update([
            'first_name' => $request->firstName,
            'middle_name' => $request->middleName,
            'last_name' => $request->lastName,
            'place' => $request->place,
            'contact_number' => $request->contactNumber,
            'block' => $request->block,
            'lot' => $request->lot,
        ]);

        return redirect()->route('user.list');
    }

    public function productList()
    {
        $products = DB::table('products')
            ->select('*')
            ->get();
        return view('admin.page.productList', ['products' => $products]);
    }
    public function productDownload($id)
    {
        $product = product::find($id);
        return response::download('images/' . $product->product_image);
    }
}
