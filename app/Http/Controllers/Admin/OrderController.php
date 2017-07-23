<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use App\User;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;


class OrderController extends Controller
{

    private  $_u =  [];
    public function  __construct()
    {
        $users = User::all();
        foreach( $users as $user){
            $this->_u[$users->id]= $user->name;

        }

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all() ;

        return view('admin.order.show', ['orders' => $orders ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.order.create',
            ['user' => $this->_u]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $or = new Order();
        $or->user_id =  $request ->user_id;
        $or->total =  $request ->total;
        $or->receiveAddress =  $request ->receiveAddress;
        $or->nameReceiver =  $request ->nameReceiver;
        $or->phoneReceiver =  $request ->phoneReceiver;
        $or->status =  $request ->status;
        $or->shippingTime =  $request ->shippingTime;

        $or->save();

        Session::flash('success', "Thêm mới đơn hàng thành công");

        return redirect('admin/order');

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
        $order = Order::findOrFail($id);
        return view('admin.order.edit', [
                'order' => $order,
                'users' => $this->_u,
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
        $order = Order::findOrFail($id);

        $order->user_id =  $request ->user_id;
        $order->total =  $request ->total;
        $order->receiveAddress =  $request ->receiveAddress;
        $order->nameReceiver =  $request ->nameReceiver;
        $order->phoneReceiver =  $request ->phoneReceiver;
        $order->status =  $request ->status;
        $order->shippingTime =  $request ->shippingTime;
        $order->save();

        Session::flash('success', "Cập nhật sản phẩm thành công!!!");

        return redirect('admin/order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
