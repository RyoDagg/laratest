<x-layout>
    <x-slot:heading>
        Job List
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
              <a href="/job/{{ $job['id']}}" class='text-blue-500 hover:text-blue-600 underline'>
                <strong>{{ $job['title'] }}</strong> Pays {{ $job['salary'] }}
            </a>
            </li>
        @endforeach
    </ul>
</x-layout>