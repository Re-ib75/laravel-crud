<?php

namespace App\Http\Controllers;
 use App\Models\category;
 App\Http\Controllers\CategorytController::store();
use Illuminate\Http\Request;

class CategorytController extends Controller
{
   public function index()
   {
    return view('category.index');

   }
   public function create()
   {
    return view('category.create');

   }
   public function store()
   {
    return view('category.create');

   }
   /*public  function store ( Request   $request)
   {
    $request->validate([
        'name'=> 'required',
        'description'=> 'required',
        'is_activ' => 'sometime'

    ]);
      category::create([
        'name'=> $request->name,
        'description'=> $request->description,
        'is_activ' => $request->is_activ ==true ? 1:0,


   ]);*/
   public function store(Request $request): RedirectResponse
   {
       $request->validate([
           'name' => 'required',
           'description' => 'required',
           'is_activ' => 'sometime'

       ]);

      $temp= caregory::create($request->all());
      $isSaved = $temp->save();
       dd($isSaved);
       return redirect()->route('productss.index')
                       ->with('success','Product created successfully.');
   }
}
