<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $rules = [
			'name' => 'required|unique:categories,name',
			'description' => 'required',
			'color' => 'required'
		];
        $this->validate($request, $rules);
        $category = Category::create([
            'name' => $request->name,
            'slug'  => str_slug($request->name),
            'description'   =>  $request->description,
            'color' =>  $request->color
        ]);
        $message = $category ? 'Categoria agregada con exito' : 'La categoria NO pudo agregarse';
        return redirect('category')->with('message',$message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return $category;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->fill($request->all());
        $category->slug = str_slug($request->name);
        $updated = $category->save();
        $message = $updated ? 'Categoria actulizada con exito' : 'La categoria NO pudo actulizarse';
        return redirect('category')->with('message',$message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $deleted = $category->delete();
        $message = $deleted ? 'Categoria eliminada con exito' : 'La categoria NO pudo eliminarse';
        return redirect('category')->with('message',$message);
    }
}
