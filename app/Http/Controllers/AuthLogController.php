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
            'status' => 'required|in:success,failure',
            'type' => 'required|string|in:face,rfid,webapi',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['status'=> false, 'error' => $validator->errors()], 400);
        }

        try {
            $authLog = new AuthLog();
            $authLog->status = $request->input('status') === 'success' ? 1 : 0;
            $authLog->type = $request->input('type');
            $authLog->message = $request->input('message');
            $authLog->save();

            return response()->json(['status'=> true, 'message' => 'Auth log created successfully'], 201);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'error' => 'Failed to create auth log'], 500);
        }
    }

    /**
     * Display all the auth logs.
     */
    public function index()
    {;
        return view('auth-logs');
    }

    /**
     * Display all the auth logs.
     */
    public function appIndex()
    {;
        return view('app.auth-logs');
    }
}
