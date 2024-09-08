<x-layout>
    <x-slot:heading>
        Job-Update

      </x-slot:heading>

<form method="POST" action="/job/{{ $job->id }}">
        @csrf
        @method('patch')
        <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Job_title</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input type="text" value="{{ $job->title }}" name="title" id="title"
                class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" >
              </div>
            </div>
            <div>
                @error('title')
                    <span class="text-sm text-red-800">{{ $message }}</span>
                @enderror
            </div>
          </div>



        </div>
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-4">
              <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
              <div class="mt-2">
                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                  <input type="text" value="{{ $job->salary }}" name="salary" id="salary"
                   class="block flex-1 border-0 bg-transparent
                   py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                    placeholder="$50000">
                </div>
                <div>
                    @error('salary')
                        <span class="text-sm text-red-800">{{ $message }}</span>
                    @enderror
                </div>
              </div>
            </div>



          </div>
      </div>


    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
      <x-button type="submit"
      >Update</x-button>
    </div>
  </form>


</x-layout>
