<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  Room::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoomRequest $request)
    {
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store("uploads", 'public');
        }

        $requestData = $request->all();
        $requestData['image'] = $path;
        return Room::create($requestData);
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        return $room;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, room $room)
    {
        $room->update($request->all());
        return $room;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        $room->delete();
        return "$room->name  o'chirildi";
    }
}
