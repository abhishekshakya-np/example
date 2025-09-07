<x-layout>
    <x-slot:heading>
        Page Not Found
    </x-slot:heading>

    <div class="text-center">
        <div class="mb-8">
            <h1 class="text-6xl font-bold text-gray-400">404</h1>
            <p class="text-xl text-gray-600 mt-4">Sorry, the page you are looking for could not be found.</p>
        </div>

        <div class="space-y-4">
            <p class="text-gray-500">The job you're looking for might have been removed or doesn't exist.</p>
            <div class="flex justify-center space-x-4">
                <a href="{{ route('jobs.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                    Browse Jobs
                </a>
                <a href="/" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">
                    Go Home
                </a>
            </div>
        </div>
    </div>
</x-layout>
