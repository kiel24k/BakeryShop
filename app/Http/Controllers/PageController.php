<?php

namespace App\Http\Controllers;

use App\Models\BakeUser;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function home()
    {
        $items = DB::table('products')
            ->select('*')
            ->get();
        return view('user.page.home', ['items' => $items]);
    }
    public function products()
    {
        return view('user.page.product');
        //hahahaha
    }
    public function checkout($id)
    {
        $product = product::find($id);
        return view('user.page.checkout', ['product' => $product]);
    }
    public function reserveSubmit(Request $request)
    {

        $request->validate([
            'firstName' => 'required|string|max:25',
            'lastName' => 'required|string|max:25',
            'contactNumber' => 'required|numeric|min:11',
            'email' => 'required|email|unique:bake_users,user_email',
            'quantity' => 'required|numeric',
        ]);
        $productQuan = $request->productQuan;
        $quantity = $request->quantity;
        $total = $productQuan - $quantity;
        BakeUser::create([
            'reserved_product' => $request->productName,
            'first_name' => $request->firstName,
            'last_name'  => $request->lastName,
            'contact_number'  => $request->contactNumber,
            'user_email'  => $request->email,
            'place'  => $request->place,
            'quantity' => $request->quantity,
            'amount' => $request->quantity * $request->amount,
        ]);
        $product = product::where('id',$request->productId)->update([
            'product_quantity' => $total,
        ]);

        return redirect()->route('home');
    }
}
