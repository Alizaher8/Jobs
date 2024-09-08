<x-layout>
    <div>
    <x-slot:heading> job
        <x-button onclick="window.location.href='/job/create'">Add new Job</x-button>
    </x-slot:heading>
  </div>
    <p>
        @foreach ($jobs as $job)
        <div class="px-3 py-2 bg-gray-200 mb-2"><a href="/job_item/{{ $job->id }}" >
            <div class="text-sm  text-blue-500">

                {{ $job->employer->first_name }} {{ $job->employer->last_name }}
            </div>
            <div >
                Job:titlw:{{ $job->title }}</p>
                Job_salary: {{ $job->salary }}</p>
            </div>

          </a></div>
          <div class="mb-2">
            <x-button onclick="window.location.href='/job/{{ $job->id }}/edit'" style="background-color: orange">Edit</x-button>
            <form method="POST" action="/job/{{ $job->id }}">
                @csrf
                @method('delete')
            <x-button style="background-color: rgb(245, 12, 12)">Delete</x-button>
            </form>
          </div>
        @endforeach
        {{ $jobs->links() }}
    </p>
</x-layout>
