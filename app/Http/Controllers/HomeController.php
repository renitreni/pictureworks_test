<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function index(): Application|Factory|View
    {
        $list = User::query()->paginate(5);

        return view('guest.home', compact('list'));
    }

    public function show(User $user)
    {
        return view('guest.details', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
}
