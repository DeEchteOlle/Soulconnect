<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Laravel\WorkOS\Http\Requests\AuthKitAccountDeletionRequest;

class ProfileController extends Controller
{
    /**
     * Show the user's profile settings page.
     */
    public function edit(Request $request): Response
    {
        return Inertia::render('settings/profile', [
            'status' => $request->session()->get('status'),
        ]);
    }

    /**
     * Update the user's profile settings.
     */
    public function update(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $request->user()->update(['name' => $request->name]);

        return to_route('profile.edit');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(AuthKitAccountDeletionRequest $request): RedirectResponse
    {
        return $request->delete(
            using: fn (User $user) => $user->delete()
        );
    }

    public function show(Request $request)
    {
        //$user = $request->user();
        $user = User::first(); // For testing purposes
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $profile = $user->userProfile;
        if (!$profile) {
            return response()->json(['message' => 'Profile not found', 'user' => $user], 404);
        }

        return response()->json([
            'id' => $profile->id,
            'one_liner' => $profile->one_liner,
            'relation_values' => $profile->relation_values,
            'partner_qualities' => $profile->partner_qualities,
            'gender' => $profile->gender,
            'gender_preference' => $profile->gender_preference,
            'date_of_birth' => $profile->date_of_birth,
            'zipcode' => $profile->zipcode,
            'has_pets' => $profile->has_pets,
        ]);
    }
}
