<x-layout>
    <x-slot:heading>
        Job {{ $job['id']}} &ndash; {{ $job['title']}}
    </x-slot:heading>
    <p>This job pays &dollar;{{ $job['salary'] }} per year.</p>

</x-layout>
