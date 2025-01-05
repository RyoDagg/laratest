<x-layout>
    <x-slot:heading>
        {{ $job['title'] }}
    </x-slot:heading>

    <strong>{{ $job['title'] }}</strong> Pays {{ $job['salary'] }}

    {{-- @can('edit-job', $job) --}}
        <div class="mt-4">
            <x-link-button href="/jobs/{{ $job['id'] }}/edit">Edit</x-link-button>
        </div>
    {{-- @endcan --}}
</x-layout>
