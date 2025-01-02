<x-layout>
    <x-slot:heading>
        {{ $job['title'] }}
    </x-slot:heading>

    <strong>{{ $job['title'] }}</strong> Pays {{ $job['salary'] }}
</x-layout>