<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHomeRequest;
use App\Http\Requests\UpdateHomeRequest;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $homes = Home::all();
        return view('home.index', compact('homes'));
    }

    public function create()
    {
        return view('home.create');
    }

    public function store(StoreHomeRequest $request)
    {
        Home::create($request->validated());
        return redirect()->route('home.index');
    }

    public function show(Home $home)
    {
        return view('home.show', compact('home'));
    }

    public function edit(Home $home)
    {
        return view('home.edit', compact('home'));
    }

    public function update(UpdateHomeRequest $request, Home $home)
    {
        $home->update($request->validated());
        return redirect()->route('home.show', $home);
    }

    public function destroy(Home $home)
    {
        $home->delete();
        return redirect()->route('home.index');
    }
}
