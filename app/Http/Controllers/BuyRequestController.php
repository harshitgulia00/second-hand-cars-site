<?php

namespace App\Http\Controllers;

use App\Models\BuyRequest;
use App\Http\Requests\StoreBuyRequestRequest;
use App\Http\Requests\UpdateBuyRequestRequest;

class BuyRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buyRequests = BuyRequest::where('status', 'pending')->get();
        
        return response()->json([
            'success' => true,
            'data' => $buyRequests
        ]);
    }

    public function accepted()
    {
        $buyRequests = BuyRequest::where('status', 'approved')->get();
        return response()->json([
            'success' => true,
            'data' => $buyRequests
        ]);
    }

    public function rejected()
    {
        $buyRequests = BuyRequest::where('status', 'rejected')->get();
        return response()->json([
            'success' => true,
            'data' => $buyRequests
        ]);
    }

     public function accept($id)
    {
        if($buyRequests = BuyRequest::where('id',$id)->update(['status'=>'approved'])){
            return response()->json([
            'success' => true
        ]);
        }
    }

     public function reject($id)
    {
        if($buyRequests = BuyRequest::where('id',$id)->update(['status'=>'rejected'])){
            return response()->json([
            'success' => true
        ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBuyRequestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BuyRequest $buyRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BuyRequest $buyRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBuyRequestRequest $request, BuyRequest $buyRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BuyRequest $buyRequest)
    {
        //
    }
}
