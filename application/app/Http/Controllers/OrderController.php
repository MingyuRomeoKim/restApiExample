<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class OrderController extends Controller
{
    public function index()
    {
        // 주문 전체 조회
        // GET /api/v1/orders/
        $orders = auth()->user()->orders;
        if(!$orders) {
            return response()->json([ 'success' => false, 'message' => 'We can not found orders list. Plz check your orders'],401);
        }else{
            return response()->json([ 'success' => true, 'data' => $orders],200);
        }
    }

    public function show($id)
    {   
        // 주문 단건 조회
        // GET /api/v1/orders/{orderId}
        $orders = auth()->user()->orders()->find($id);
 
        if (!$orders) {
            return response()->json([
                'success' => false,
                'message' => 'Post not found '
            ], 401);
        }
 
        return response()->json([
            'success' => true,
            'data' => $orders->toArray()
        ], 200);
    }
 
    public function store(Request $request)
    {
        // 주문요청
        // POST /api/v1/orders/
        $userId = auth()->user()->token()->user_id;
        if(!$userId) 
            return response()->json([ 'success' => false, 'message' => 'This Token Not Availabled'], 401);

        $user = User::where('id',$userId)->first();
        $this->validate($request, [
            'product_id' => 'required',
        ]);

        $product = Product::where('id',$request->product_id)->first();
        if(!$product)
            return response()->json([ 'success' => false, 'message' => 'This Prudoct Id Not Availabled'], 401);
 
        $orders = new Order();
        $orders->user_email = $user->email;
        $orders->product_id = $request->product_id;
 
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
        // 주문 수정
        // PUT /api/v1/posts/{orderId}
        $orders = auth()->user()->orders()->find($id);
 
        if (!$orders) return response()->json(['success' => false,'message' => 'orders not found'], 401);
 
        $updated = $orders->fill($request->all())->save();
 
        if ($updated) 
            return response()->json([ 'success' => true]);
        else
            return response()->json([ 'success' => false,'message' => 'Updated Faild.'], 500);
    }
 
    public function destroy($id)
    {
        // 주문 삭제
        // DELETE /api/posts/{orderId}
        $orders = auth()->user()->orders()->find($id);
 
        if (!$orders) return response()->json(['success' => false,'message' => 'orders not found'], 401);
 
        if ($orders->delete()) 
            return response()->json(['success' => true]);
        else 
            return response()->json(['success' => false,'message' => 'Post can not be deleted'], 500);
        
    }

}
