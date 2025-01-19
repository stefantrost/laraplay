<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>
<ul>
  @foreach ($jobs as $job)
    <li>
      <a href="/jobs/{{ $job['id'] }}">
        <strong>{{ $job['title'] }}</strong>: pays {{ $job['salary'] }}
      </a>
    </li>
  @endforeach
</ul>
</x-layout>
