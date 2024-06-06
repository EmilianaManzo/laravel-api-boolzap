<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $messages = Message::with('users')->get();
        return response()->json($messages);
    }

    public function getUsers(){
        $users = User::with('messages')->get();
        return response()->json($users);
    }
}
