<?php

namespace App\Http\Controllers;

use App\Models\BakeUser;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminLayoutController extends Controller
{
    public function content()
    {
        $product = DB::table('products')
            ->pluck('product_name')
            ->count();
        return view('admin.page.content', ['product' => $product]);
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
        $product = product::create([
            'product_name' => $request->name,
            'product_price'  => $request->price,
            'product_quantity'  => $request->quantity,
            'product_description'  => $request->description,
            'product_image'  => $request->image,
        ]);
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
}
