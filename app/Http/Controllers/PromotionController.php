<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Promotion;
use Image;
use Session;

class PromotionController extends Controller
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
    $promotions = Promotion::paginate(7);
    return view('admin.promotion.index')->withPromotions($promotions);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $menus = Menu::all();
    return view('admin.promotion.create')->withMenus($menus);
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $promotion = new Promotion;
    $promotion->menu_id = $request->menu_id;

    $image = $request->file('image');
    $filename = time() . '.' . $image->getClientOriginalExtension();
    $location = public_path('/images/' . $filename);
    Image::make($image)->resize(800, 400)->save($location);

    $promotion->image = $filename;

    $promotion->save();
    Session::flash('success', 'New Promotion was successfully created!');
    return redirect()->route('promotion.index');
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    $promotion = Promotion::find($id);
    return view('admin.promotion.show')->withPromotion($promotion);
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
    $promotion = Promotion::find($id);
    $promotion->delete();

    Session::flash('success', 'Promotion was successfully deleted!');
    return redirect()->route('promotion.index');
  }
}
