<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;


class ChirpController extends Controller
{

    use AuthorizesRequests;

    public function index() {

        $chirps = Chirp::with('user')
        ->latest()
        ->take(50)
        ->get();

    return view('home', ['chirps' => $chirps]);
    }

    public function store(Request $request) {
        $user = $request->user();
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        Chirp::create([
            'message'=>$validated['message'],
            'user_id'=>$user->id,
        ]);

        return redirect('/')->with('success', 'Chirp created!');
    }

    public function edit(Chirp $chirp) {
    $this->authorize('edit', $chirp);
    return view('components.chirps.edit', compact('chirp'));
    }

    public function update(Request $request, Chirp $chirp) {
        $this->authorize('update', $chirp);
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ],
        [
            'message.required' => 'Please write something!',
            'message.max' => '255 max',
        ],);

        $chirp->update($validated);

        return redirect('/')->with('success', 'your chirp has been updated');
    }

    public function destroy(Chirp $chirp) {
        $this->authorize('delete', $chirp);
        $chirp->delete($chirp->id);
        return redirect('/')->with('success', 'your chirp has been delete');
    }
};
