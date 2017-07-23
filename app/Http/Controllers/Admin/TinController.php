<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tin;
use Illuminate\Support\Facades\Auth;
use Session;
class TinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = Tin::all();
        return view('admin.new.show',['news'=>$news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.new.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $n = new Tin();
        $n->subject = $request->subject;
        $n->user_id = Auth::user()->group_id;
        $n->content = $request->contentNews;
        $n->save();

        Session::flash('success','Tạo mới thành công !!!');
        return redirect('admin/new');
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

        $news = Tin::findOrFail($id);
        return view('admin.new.edit',['news'=>$news]);
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
        $news = Tin::findOrFail($id);
        $news->subject = $request->subject;
        $news->content = $request->contentNews;

        $news->save();
        Session::flash('success','Edit Category Successfully !!!');
        return redirect('admin/new');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = Tin::findOrFail($id);
        $news ->delete();

        Session::flash('success','Delete Category Successfully !!!');
        return redirect('admin/new');
    }
}
