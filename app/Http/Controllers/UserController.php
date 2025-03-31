<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoredUserRequest;

class UserController extends Controller

{
    public function store(StoredUserRequest $request)
    {
        return "Validation successful! Data: " . $request->name . ", " .
        $request->email;
    }
    
}

