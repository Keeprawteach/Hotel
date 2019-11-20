<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desk;
use Session;

class DeskController extends Controller
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
        $desks = Desk::paginate(7);
        return view('admin.desk.index')->withDesks($desks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.desk.create');
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
        'capacity' => 'required'
      ));

      $desk = new Desk;
      $desk->name = $request->name;
      $desk->capacity = $request->capacity;

      $desk->save();
      Session::flash('success', 'New Table was successfully created!');
      return redirect()->route('desk.show', $desk->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $desk = Desk::find($id);
      return view('admin.desk.show')->withDesk($desk);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $desk = Desk::find($id);
      return view('admin.desk.edit')->withDesk($desk);
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
        'capacity' => 'required',
        'available' => 'required'
      ));

      $desk = Desk::find($id);
      $desk->name = $request->input('name');
      $desk->capacity = $request->input('capacity');
      $desk->available = $request->input('available');

      $desk->save();
      Session::flash('success', 'Table was successfully updated!');

      return redirect()->route('desk.show', $desk->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $desk = Desk::find($id);
      $desk->delete();

      Session::flash('success', 'Table was successfully deleted!');
      return redirect()->route('desk.index');
    }
}
