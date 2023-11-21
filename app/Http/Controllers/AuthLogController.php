<?php

namespace App\Http\Controllers;

use App\Models\AuthLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthLogController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'status' => 'required|boolean',
            'type' => 'required|string|in:face,rfid,password',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        try {
            $authLog = new AuthLog();
            $authLog->status = $request->input('status');
            $authLog->type = $request->input('type');
            $authLog->message = $request->input('message');
            $authLog->save();

            return response()->json(['status'=> true, 'message' => 'Auth log created successfully'], 201);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'error' => 'Failed to create auth log'], 500);
        }
    }
}
