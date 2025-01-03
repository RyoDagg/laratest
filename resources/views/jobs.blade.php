<x-layout>
    <x-slot:heading>
        Job List
    </x-slot:heading>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($jobs as $job)
            <a href="/job/{{ $job['id'] }}"
                class='border p-4 rounded-lg bg-gray-50 hover:shadow transition duration-300'>
                <div class="text-sm text-blue-500 font-bold">{{ $job->employer->name }}</div>
                <div class="text-gray-800">
                    <strong>{{ $job['title'] }}</strong> Pays {{ $job['salary'] }}
                </div>
            </a>
        @endforeach
    </div>
    <div class="mt-4">
        {{ $jobs->links() }}
    </div>
</x-layout>
