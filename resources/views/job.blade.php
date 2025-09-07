<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job->title }}</h2>

    @if ($job->employer)
        <p class="text-gray-600 mb-4">
            <strong>Company:</strong> {{ $job->employer->name }}
        </p>
    @endif

    <p class="mb-4">
        This job pays {{ $job->salary }} per year.
    </p>

    <div class="mt-6">
        <a href="{{ route('jobs.index') }}" class="text-blue-500 hover:underline">
            ← Back to all jobs
        </a>
    </div>
</x-layout>
