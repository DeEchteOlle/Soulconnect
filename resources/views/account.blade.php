@extends('components.master')

@section('hide_footer', false)
@section('hide_header', false)

@section('content')
    <div class="bg-[linear-gradient(135deg,#FF5864,#FF8A00)] flex justify-center py-16 px-4">
        <div class="w-full max-w-md rounded-lg shadow-lg p-8 text-white bg-white/15 backdrop-blur-md">

            <h1 class="text-3xl font-bold mb-6 text-center">My Account</h1>

            <div class="flex flex-col items-center mb-6">
                <img
                    src="{{ $user->avatar ?? 'https://via.placeholder.com/100' }}"
                    alt="Profile Picture"
                    class="w-24 h-24 rounded-full border-4 border-white mb-3 object-cover">
            </div>

            <div class="space-y-4">

                <div>
                    <p class="text-sm font-semibold">Full Name</p>
                    <p class="bg-white/80 text-black p-2 rounded">{{ $user->name }}</p>
                </div>

                <div>
                    <p class="text-sm font-semibold">Email</p>
                    <p class="bg-white/80 text-black p-2 rounded">{{ $user->email }}</p>
                </div>

                <div>
                    <p class="text-sm font-semibold">Gender</p>
                    <p class="bg-white/80 text-black p-2 rounded">{{ $user->gender ?? '—' }}</p>
                </div>

                <div>
                    <p class="text-sm font-semibold">Date of Birth</p>
                    <p class="bg-white/80 text-black p-2 rounded">
                        {{ $user->dob ? $user->dob->format('d M Y') : '—' }}
                    </p>
                </div>

                <div>
                    <p class="text-sm font-semibold">Phone Number</p>
                    <p class="bg-white/80 text-black p-2 rounded">{{ $user->phone ?? '—' }}</p>
                </div>

                <div>
                    <p class="text-sm font-semibold">Location</p>
                    <p class="bg-white/80 text-black p-2 rounded">{{ $user->location ?? '—' }}</p>
                </div>

                <div>
                    <p class="text-sm font-semibold">Bio</p>
                    <p class="bg-white/80 text-black p-2 rounded">
                        {{ $user->bio ?? 'No bio provided.' }}
                    </p>
                </div>

                <div>
                    <p class="text-sm font-semibold mb-2">Interests</p>
                    <div class="flex flex-wrap gap-2">
                        @forelse($user->interests ?? [] as $interest)
                            <span class="bg-white/80 text-black px-3 py-1 rounded-full text-sm">
                            {{ $interest }}
                        </span>
                        @empty
                            <span class="bg-white/80 text-black px-3 py-1 rounded-full text-sm">
                            —
                        </span>
                        @endforelse
                    </div>
                </div>

            </div>

            <div class="flex justify-center mt-6">
                <a
                    href="{{ route('account.edit') }}"
                    class="bg-white text-black font-bold py-2 px-6 rounded hover:bg-white/90 transition">
                    Edit Account
                </a>
            </div>

        </div>
    </div>
@endsection
