<x-layout>
    <x-slot:heading>
        Jobs List Page
    </x-slot:heading>

    <ul>
        @forelse ($jobs as $job)
            <li>
                <a href="{{ route('jobs.show', $job) }}" class="text-blue-500 hover:underline">
                    <strong>{{ $job->title }}:</strong> Pays {{ $job->salary }} per year.
                    @if ($job->employer)
                        <span class="text-gray-600">at {{ $job->employer->name }}</span>
                    @endif
                </a>
            </li>
        @empty
            <li class="text-gray-500">No jobs available at the moment.</li>
        @endforelse
    </ul>
</x-layout>
