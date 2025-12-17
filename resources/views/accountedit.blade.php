@extends('components.master')

@section('hide_footer', false)
@section('hide_header', false)

@section('content')
    <div class="bg-[linear-gradient(135deg,#FF5864,#FF8A00)] flex justify-center py-16 px-4">
        <div class="w-full max-w-md rounded-lg shadow-lg p-8 text-white bg-white/15 backdrop-blur-md">

            <h1 class="text-3xl font-bold mb-6 text-center">Edit Account</h1>

            <form
                action="{{ route('account.update') }}"
                method="POST"
                enctype="multipart/form-data"
                class="space-y-4"
            >
                @csrf
                @method('PUT')

                <div class="flex flex-col items-center mb-4">
                    <img
                        src="{{ $user->avatar ?? 'https://via.placeholder.com/100' }}"
                        alt="Profile Picture"
                        class="w-24 h-24 rounded-full border-4 border-white mb-3 object-cover">

                    <label class="cursor-pointer text-sm font-semibold underline">
                        Change Profile Picture
                        <input type="file" name="avatar" class="hidden">
                    </label>
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-1">Full Name</label>
                    <input
                        type="text"
                        name="name"
                        value="{{ old('name', $user->name) }}"
                        class="w-full p-2 rounded bg-white/80 text-black focus:outline-none"
                        required>
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-1">Email</label>
                    <input
                        type="email"
                        name="email"
                        value="{{ old('email', $user->email) }}"
                        class="w-full p-2 rounded bg-white/80 text-black focus:outline-none"
                        required>
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-1">Password</label>
                    <input
                        type="password"
                        name="password"
                        placeholder="Leave blank to keep current password"
                        class="w-full p-2 rounded bg-white/80 text-black focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-1">Gender</label>
                    <select
                        name="gender"
                        class="w-full p-2 rounded bg-white/80 text-black focus:outline-none">
                        <option value="">Select gender</option>
                        <option value="Male" {{ old('gender', $user->gender) === 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ old('gender', $user->gender) === 'Female' ? 'selected' : '' }}>Female</option>
                        <option value="Non-binary" {{ old('gender', $user->gender) === 'Non-binary' ? 'selected' : '' }}>Non-binary</option>
                        <option value="Prefer not to say" {{ old('gender', $user->gender) === 'Prefer not to say' ? 'selected' : '' }}>Prefer not to say</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-1">Date of Birth</label>
                    <input
                        type="date"
                        name="dob"
                        value="{{ old('dob', optional($user->dob)->format('Y-m-d')) }}"
                        class="w-full p-2 rounded bg-white/80 text-black focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-1">Phone Number</label>
                    <input
                        type="tel"
                        name="phone"
                        value="{{ old('phone', $user->phone) }}"
                        class="w-full p-2 rounded bg-white/80 text-black focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-1">Location</label>
                    <input
                        type="text"
                        name="location"
                        value="{{ old('location', $user->location) }}"
                        class="w-full p-2 rounded bg-white/80 text-black focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-1">Bio</label>
                    <textarea
                        name="bio"
                        rows="3"
                        class="w-full p-2 rounded bg-white/80 text-black focus:outline-none"
                    >{{ old('bio', $user->bio) }}</textarea>
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-2">Interests</label>
                    <div class="grid grid-cols-2 gap-2 text-black">
                        @php
                            $interests = ['Music','Sports','Travel','Gaming','Tech','Art'];
                            $userInterests = old('interests', $user->interests ?? []);
                        @endphp

                        @foreach($interests as $interest)
                            <label class="flex items-center gap-2 bg-white/80 p-2 rounded">
                                <input
                                    type="checkbox"
                                    name="interests[]"
                                    value="{{ $interest }}"
                                    class="accent-black"
                                    {{ in_array($interest, $userInterests) ? 'checked' : '' }}>
                                {{ $interest }}
                            </label>
                        @endforeach
                    </div>
                </div>

                <div class="flex justify-center pt-4">
                    <button
                        type="submit"
                        class="bg-white text-black font-bold py-2 px-6 rounded hover:bg-white/90 transition">
                        Save Changes
                    </button>
                </div>

            </form>

        </div>
    </div>
@endsection
