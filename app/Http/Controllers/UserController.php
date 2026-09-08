<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display the alumni directory.
     */
    public function index(): View
    {
        $this->authorize('viewAny', User::class);

        $users = User::orderBy('name')->get();

        return view('users.index', compact('users'));
    }

    /**
     * Display a single alumni profile.
     */
    public function show(User $user): View
    {
        $this->authorize('view', $user);

        return view('users.show', compact('user'));
    }
}