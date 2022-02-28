<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = auth()->user()->orders;

        return response()->json([
        'success' => true,
        'data' => $orders,
        ]);
    }

    public function show($id)
    {
        $orders = auth()->user()->orders()->find($id);
 
        if (!$orders) {
            return response()->json([
                'success' => false,
                'message' => 'Post not found '
            ], 400);
        }
 
        return response()->json([
            'success' => true,
            'data' => $orders->toArray()
        ], 400);
    }
 
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);
 
        $orders = new Order();
        $orders->title = $request->title;
        $orders->description = $request->description;
 
        if (auth()->user()->orders()->save($orders))
            return response()->json([
                'success' => true,
                'data' => $orders->toArray()
            ]);
        else
            return response()->json([
                'success' => false,
                'message' => 'orders not added'
            ], 500);
    }
 
    public function update(Request $request, $id)
    {
        $orders = auth()->user()->orders()->find($id);
 
        if (!$orders) {
            return response()->json([
                'success' => false,
                'message' => 'orders not found'
            ], 400);
        }
 
        $updated = $orders->fill($request->all())->save();
 
        if ($updated)
            return response()->json([
                'success' => true
            ]);
        else
            return response()->json([
                'success' => false,
                'message' => 'Post can not be updated'
            ], 500);
    }
 
    public function destroy($id)
    {
        $orders = auth()->user()->orders()->find($id);
 
        if (!$orders) {
            return response()->json([
                'success' => false,
                'message' => 'Post not found'
            ], 400);
        }
 
        if ($orders->delete()) {
            return response()->json([
                'success' => true
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Post can not be deleted'
            ], 500);
        }
    }

}
