<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use Session;
use App\Category;
use Image;
use Storage;

class MenuController extends Controller
{

  public function __construct() {
    $this->middleware('auth')->except('getLogout');
  }
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $menus = Menu::paginate(7);
    return view('admin.menu.index')->withMenus($menus);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $categories = Category::all();
    return view('admin.menu.create')->withCategories($categories);
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $this->validate($request, array(
      'name' => 'required|max:255',
      'description' => 'required',
      'price' => 'required',
      'image' => 'required'
    ));

    $menu = new Menu;
    $menu->name = $request->name;
    $menu->description = $request->description;
    $menu->category_id = $request->category_id;
    $menu->price = $request->price;

    $image = $request->file('image');
    $filename = time() . '.' . $image->getClientOriginalExtension();
    $location = public_path('/images/' . $filename);
    Image::make($image)->resize(800, 400)->save($location);

    $menu->image = $filename;

    $menu->save();
    Session::flash('success', 'New Menu was successfully created!');
    return redirect()->route('menu.show', $menu->id);
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    $menu = Menu::find($id);
    return view('admin.menu.show')->withMenu($menu);
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $menu = Menu::find($id);
    return view('admin.menu.edit')->withMenu($menu);
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
    $this->validate($request, array(
      'name' => 'required|max:255',
      'description' => 'required',
      'price' => 'required'
    ));

    $menu = Menu::find($id);
    $menu->name = $request->input('name');
    $menu->description = $request->input('description');
    $menu->price = $request->input('price');

    if ($request->hasFile('image')) {
      $image = $request->file('image');
      $filename = time() . '.' . $image->getClientOriginalExtension();
      $location = public_path('/images/' . $filename);
      Image::make($image)->resize(800, 400)->save($location);
      $oldFilename = $menu->image;
      $menu->image = $filename;
      Storage::delete($oldFilename);
    }

    $menu->save();
    Session::flash('success', 'Menu was successfully updated!');

    return redirect()->route('menu.show', $menu->id);
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $menu = Menu::find($id);
    Storage::delete($menu->image);

    $menu->delete();

    Session::flash('success', 'Menu was successfully deleted!');
    return redirect()->route('menu.index');
  }
}
