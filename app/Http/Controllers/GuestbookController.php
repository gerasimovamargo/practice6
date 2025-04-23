<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuestbookController extends Controller
{

    public function index(Request $request)
    {

        $infoMessage = session('infoMessage', '');


        $comments = DB::table('comments')
            ->orderByDesc('id')
            ->get();


        return view('guestbook.index', [
            'comments' => $comments,
            'infoMessage' => $infoMessage
        ]);
    }


    public function store(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'name' => 'required|string|min:2|max:255',
            'text' => 'required|string|max:1000',
        ]);


        DB::table('comments')->insert([
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'text' => $request->input('text'),
            'date' => now()->format('Y-m-d H:i:s')
        ]);

        return redirect()->route('guestbook')->with('infoMessage', 'Коментар успішно додано!');
    }
}

