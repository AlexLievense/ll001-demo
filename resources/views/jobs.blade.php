<x-layout>
    <x-slot:heading>Job Listings</x-slot:heading>
    @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                {{ $job['title'] }}: Pays {{ $job['salary'] }} per year.
            </a>
        </li>
    @endforeach
</x-layout>