<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!Auth::user()->is_admin){
           abort(403); 
        }
        $categories=Category::all();
        // dd($categories);
        return view('categories.index', compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!Auth::user()->is_admin){
           abort(403); 
        }
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     if(!Auth::user()->is_admin){
           abort(403); 
        }
       $request->validate([
            'name' =>'required|max:50|unique:categories',
        ]);

        Category::create([
            'name' => $request->name
        ]);

        return redirect()->route('categories.index')->with(['success' => 'Categoria creata con successo']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $announcements = Announcement::all();
        return view('categories.show', compact('category', 'announcements'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
     if(!Auth::user()->is_admin){
           abort(403); 
        }
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
     if(!Auth::user()->is_admin){
           abort(403); 
        }
         $request->validate([
            'name' =>'required|max:50|unique:categories',
        ]);
        $category->update([
            'name' => $request->name
        ]);

        return redirect()->route('categories.index')->with(['success'=>'Categoria aggiornata correttamente']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
     if(!Auth::user()->is_admin){
           abort(403); 
        }
         $category->delete();

        return redirect()->route('categories.index')->with(['success'=>'Categoria eliminata correttamente']);
    }
}
