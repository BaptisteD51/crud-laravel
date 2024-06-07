<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\RedirectResponse;

class ProductsController extends Controller
{
    static function index(){
        return view('products', [
            'products' => Product::all(),
            'title'=>'Tous les médicaments'
        ]);
    }

    static function create(){
        $suppliers = Supplier::all()->select('name', 'id');
        return view('create-product', [
            'suppliers' => $suppliers,
            'title'=>'Créer un produit'
        ]);
    }

    static function store(Request $request)/*:RedirectResponse*/{
        $product = new Product;
        $product->name = $request->name;
        $product->supplier_id = $request->supplier_id;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        
        $product->save();
        
        return redirect('/products');
    }

    static function view($product_id){
        $product = Product::find($product_id);
        return view('view-product', [
            'product' => $product,
            'title'=>$product->name
        ]);
    }

    static function modify($product_id){
        $product = Product::find($product_id);
        $suppliers = Supplier::all()->select('name', 'id');
        return view('modify-product', [
            'product' => $product,
            'suppliers' => $suppliers,
            'title'=>'Modifier : '.$product->name
        ]);
    }

    static function save($product_id, Request $request){
        $product = Product::find($product_id);
        $product->name = $request->name;
        $product->supplier_id = $request->supplier_id;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->description = $request->description;

        $product->save();
        return redirect('/products');
    }

    static function delete($product_id){
        Product::destroy($product_id);
        return redirect('/products');
    }
}
