<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
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
    public function create($id)
    {
        return view('buynow',["id"=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'car_id' => 'required',
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'nullable'
    ]);

    $buyRequest = new BuyRequest();

    $buyRequest->user_id = auth()->user()->id;
    $buyRequest->car_id = $request->car_id;
    $buyRequest->name = $request->name;
    $buyRequest->email = $request->email;
    $buyRequest->phone = $request->phone;
    $buyRequest->message = $request->message;
    $buyRequest->status = 'pending';

    $buyRequest->save();

    return redirect('/');
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
