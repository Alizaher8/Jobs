<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Stay With Us</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" method="POST" action="/register" >
        @csrf
        <div>
          <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">First_name</label>
          <div class="mt-2">
            <input id="first_name" name="first_name" type="text" autocomplete="first_name"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
           @error('first_name')
                <span class="text-sm text-red-500">{{ $message }}</span>
           @enderror
        </div>
        </div>
        <div>
            <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">Last_name</label>
            <div class="mt-2">
              <input id="last_name" name="last_name" type="text" autocomplete="last_name"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              @error('last_name')
              <span class="text-sm text-red-500">{{ $message }}</span>
         @enderror
            </div>
          </div>
          <div>
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
            <div class="mt-2">
              <input id="email" name="email" type="email" autocomplete="email"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              @error('email')
              <span class="text-sm text-red-500">{{ $message }}</span>
         @enderror
            </div>
          </div>
          <div>
            <label for="email_confirmation" class="block text-sm font-medium leading-6 text-gray-900">Email_Confirmation</label>
            <div class="mt-2">
              <input id="email_confirmation" name="email_confirmation" type="email" autocomplete="email_confirmation"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              @error('email_confirmation')
              <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
            </div>
          </div>
          <div>
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
            <div class="mt-2">
                <input id="password" name="password" type="password" autocomplete="current-password"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                @error('password')
                <span class="text-sm text-red-500">{{ $message }}</span>
           @enderror
            </div>
          </div>
          <div>
          <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900">Password_Confirmation</label>
          <div class="mt-2">
            <input id="password_confirmation" name="password_confirmation" type="password"   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            @error('password_conformation')
            <span class="text-sm text-red-500">{{ $message }}</span>
       @enderror
        </div>
        </div>



        <div>
     <x-button type="submitt">Register</x-button>
        </div>
      </form>

      <p class="mt-10 text-center text-sm text-gray-500">
        Not a member?
        <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Start a 14 day free trial</a>
      </p>
    </div>
  </div>
</x-layout>
