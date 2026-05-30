<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Http\Requests\StoreContactMessagesRequest;
use App\Http\Requests\UpdateContactMessagesRequest;

class ContactMessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $messages=ContactMessage::where(
        'read',
        0
    )->latest()->get();

    return response()->json([
        'success'=>true,
        'data'=>$messages
    ]);
}

public function read()
{
    $messages=ContactMessage::where(
        'read',
        1
    )->latest()->get();

    return response()->json([
        'success'=>true,
        'data'=>$messages
    ]);
}

public function markAsRead($id)
{
    ContactMessage::where(
        'id',
        $id
    )->update([
        'read'=>1
    ]);

    return response()->json([
        'success'=>true
    ]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactMessagesRequest $request)
    {
        $messages = new ContactMessage();

        $messages->user_id = $request->user_id;
        $messages->name = $request->name;
        $messages->email = $request->email;
        $messages->phone = $request->phone;
        $messages->message = $request->message;
        
        $messages->save();
        return view("contact");
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactMessages $contactMessages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactMessages $contactMessages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactMessagesRequest $request, ContactMessages $contactMessages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactMessages $contactMessages)
    {
        //
    }
}
