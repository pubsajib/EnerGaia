<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\Product;
use App\SupplierEntry;
use Illuminate\Http\Request;
// use Illuminate\Http\Session;
// use Illuminate\Support\Facades\Session;
class ProductController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::all();
        $products   = Product::with('quantity')->get();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['name'=>'required|min:3']);
        
        $product = new Product;
        $product->name = $request->name;
        $product->save();

        $request->session()->flash('status', 'Added successfully.');
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function quantityCreate()
    {
        $role       = Role::where('name','supplier')->first();
        $users      = User::where('role_id', $role->id)->get();
        $products   = Product::all();
        return view('products.quantity', compact('users', 'products'));
    }
    public function quantityStore(Request $request)
    {
        $request->validate([
            'product'   => 'required|integer',
            'user'      => 'required|integer',
            'quantity'  => 'required|integer',
        ]);

        $entry = new SupplierEntry;
        $entry->product_id = $request->product;
        $entry->user_id = $request->user;
        $entry->product_count = $request->quantity;
        $entry->save();

        $request->session()->flash('status', 'Added successfully.');
        return redirect()->route('products.index');
    }
}
