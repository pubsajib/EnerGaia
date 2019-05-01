<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Role;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $roleID = auth()->user()->role_id;
        $role = Role::findOrFail($roleID);
        $products = [];
        if ($role->name == 'company') {
            $products = Product::with('quantity')->get();
            return view('company.index', compact('products'));
        } else if ($role->name == 'supplier') {
            $products = Product::with('supplier')->get();
            return view('supplier.index', compact('products'));
        }
        return view('home');
    }
}
