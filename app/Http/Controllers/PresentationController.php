<?php

namespace App\Http\Controllers;

use App\Models\Presentation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PresentationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lastPresentation = Presentation::with('sender_user', 'receiver_user')->orderBy('id', 'desc')->first();
        $lastPresentation->date = Carbon::parse($lastPresentation->created_at)->format('d.m.Y');
        return response()->json([
            'data' => $lastPresentation,
            'success' => true
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
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => "required|max:255",
            'description' => "required",
            'sender' => "required|numeric",
            'receiver' => "required|numeric"
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
                'success' => false
            ], 422);
        }

        $presentation = new Presentation();
        $presentation->title = $request->title;
        $presentation->description = $request->description;
        $presentation->sender = $request->sender;
        $presentation->receiver = $request->receiver;
        if ($presentation->save()) {
            return response()->json([
                'data' => $presentation,
                'success' => true
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $presentation = Presentation::find($id);
        return response()->json([
            'data' => $presentation,
            'success' => true
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Presentation $presentation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $presentation = Presentation::find($id);
        $presentation->title = $request->title;
        $presentation->description = $request->description;
        $presentation->sender = $request->sender;
        $presentation->receiver = $request->receiver;
        if ($presentation->save()) {
            return response()->json([
                'data' => $presentation,
                'success' => true
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Presentation $presentation)
    {
        //
    }
}
