<x-layout>
    <x-slot:heading>
        Job_item

      </x-slot:heading>
      <div class=" py-2 px-2 bg-gray-500">
        {{ $job->title }}</p>
        This job payed {{ $job->salary }}per year
      </div>

</x-layout>
