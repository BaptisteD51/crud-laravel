<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SuppliersController extends Controller
{
   static function index(){
      return view('suppliers', [
         'suppliers' => Supplier::all(),
         'title' => 'Tous les fournisseurs'
      ]);
   }

   static function view($id){
      $supplier = Supplier::find($id);
      return view('view-supplier', [
         'supplier' => $supplier,
         'title' => $supplier->name
      ]);
   }

   static function create(){
      return view('create-supplier',[
         'title' => 'Créer un fournisseur'
      ]);
   }

   static function store(Request $request){
      $supplier = new Supplier;
      $supplier->name = $request->name;
      $supplier->adress = $request->adress;
      $supplier->website = $request->website;
      $supplier->save();
      return redirect("/suppliers");   
   }

   static function modify($id){
      $supplier = Supplier::find($id);
      return view('modify-supplier', [
         'supplier' => $supplier,
         'title' => 'Modifier '.$supplier->name
      ]);
   }

   static function save($id, Request $request){
      $supplier = Supplier::find($id);
      $supplier->name = $request->name;
      $supplier->adress = $request->adress;
      $supplier->website = $request->website;
      $supplier->save();
      return redirect("/suppliers");   
   }

   static function delete($id){
      Supplier::destroy($id);
      return redirect('/suppliers');
   }
}
