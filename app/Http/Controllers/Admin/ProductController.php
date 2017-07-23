<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class ProductController extends Controller
{
    private $_cates = [];
    public function __construct()
    {
        $categories = Category::all();
        foreach ($categories as $category){
            $this->_cates[$category->id] = $category->name;
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('keyword')){
            $keyword = $request->get('keyword');
            $products = Product::where('title','like','%'. $keyword .'%')->get();
        }else{
            $products = Product::all();
        }
        return view('admin.product.show',['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create', ['categories' =>$this->_cates]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = 'no-image.jpg';
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $image = $file->getClientOriginalName();
            $path = public_path('uploads/product');
            $file->move($path, $image);
        }
        $p = new Product();
        $p->title = $request->title;
        $p->category_id = $request->category_id;
        $p->image = $image;
        $p->orginalPrice = $request->orginalPrice;
        $p->author = $request->author;
        $p->pubishingCompany = $request->pubishingCompany;
        $p->save();
        Session::flash('success','Thêm mới sản phẩm thành công');
        return redirect('admin/product');
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
        $product = Product::findOrFail($id);
        return view('admin.product.edit',[
            'product' => $product,
            'categories' => $this->_cates
        ]);
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
        $product = Product::findOrFail($id);
        $image = $product->image;
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $image = $file->getClientOriginalName();
            $path = public_path('uploads/product');
            $file->move($path, $image);
        }
        $product->title = $request->title;
        $product->category_id = $request->category_id;
        $product->image = $image;
        $product->orginalPrice = $request->orginalPrice;
        $product->author = $request->author;
        $product->pubishingCompany = $request->pubishingCompany;
        $product->save();
        Session::flash('success','Cập nhật sản phẩm thành công');
        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        Session::flash('success','Xóa sản phẩm thành công');
        return redirect('admin/product');
    }
}
