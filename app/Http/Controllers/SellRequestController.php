<?php

namespace App\Http\Controllers;

use App\Models\SellRequest;
use App\Http\Requests\StoreSellRequestRequest;
use App\Http\Requests\UpdateSellRequestRequest;

class SellRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        $sellRequests = SellRequest::where(
            'status',
            'pending'
        )->latest()->get();

        return response()->json([
            'success' => true,
            'data' => $sellRequests
        ]);
    }


    public function accepted()
    {
        $sellRequests = SellRequest::where(
            'status',
            'approved'
        )->latest()->get();

        return response()->json([
            'success' => true,
            'data' => $sellRequests
        ]);
    }


    public function rejected()
    {
        $sellRequests = SellRequest::where(
            'status',
            'rejected'
        )->latest()->get();

        return response()->json([
            'success' => true,
            'data' => $sellRequests
        ]);
    }


    public function accept($id)
    {
        SellRequest::where(
            'id',
            $id
        )->update([
            'status' => 'approved'
        ]);

        return response()->json([
            'success' => true
        ]);
    }


    public function reject($id)
    {
        SellRequest::where(
            'id',
            $id
        )->update([
            'status' => 'rejected'
        ]);

        return response()->json([
            'success' => true
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sellRequest');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSellRequestRequest $request)
    {
        $validatedData = $request->validate(
            [
                'user_id' => 'required|exists:users,id',
                'brand' => 'required|string|max:255',
                'model' => 'required|string|max:255',
                'year' => 'required|integer|min:1900|max:' . date('Y'),
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'message' => 'nullable|string',
                'expected_price' => 'required|numeric|min:0',
                'description' => 'nullable|string',
            ]
        );

        $sellRequest = new SellRequest();
        $sellRequest->user_id = $validatedData['user_id'];
        $sellRequest->name = $validatedData['name'];
        $sellRequest->email = $validatedData['email'];
        $sellRequest->phone = $validatedData['phone'];
        $sellRequest->brand = $validatedData['brand'];
        $sellRequest->model = $validatedData['model'];
        $sellRequest->year = $validatedData['year'];
        $sellRequest->message = $validatedData['message'];
        $sellRequest->expected_price = $validatedData['expected_price'];
        $sellRequest->description = $validatedData['description'] ?? null;
        $sellRequest->secure_url = $secure_url ?? null;
        $sellRequest->public_id = $public_id ?? null;

        $sellRequest->save();
        echo $sellRequest -> secure_url;
        return redirect()->back()->with('success', 'Your sell request has been submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(SellRequest $sellRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SellRequest $sellRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSellRequestRequest $request, SellRequest $sellRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SellRequest $sellRequest)
    {
        //
    }
}
