<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
  <div class="flex h-full items-center">
    <main class="w-full max-w-md mx-auto p-6">
      <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <div class="p-4 sm:p-7">
          <div class="text-center">
            <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Reset password</h1>
          </div>

          <div class="mt-5">
            <!-- Form -->
            <form wire:submit.prevent='save'>

              @if (session('success'))
              <div class="bg-teal-50 border-t-2 border-teal-500 rounded-lg p-4 dark:bg-teal-800/30 mb-4" role="alert" tabindex="-1" aria-labelledby="hs-bordered-success-style-label">
                <div class="flex">
                  <div class="shrink-0">
                    <!-- Icon -->
                    <span class="inline-flex justify-center items-center size-8 rounded-full border-4 border-teal-100 bg-teal-200 text-teal-800 dark:border-teal-900 dark:bg-teal-800 dark:text-teal-400">
                      <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                        <path d="m9 12 2 2 4-4"></path>
                      </svg>
                    </span>
                    <!-- End Icon -->
                  </div>
                  <div class="ms-3">
                    <h3 id="hs-bordered-success-style-label" class="text-gray-800 font-semibold dark:text-white">
                      Successfully.
                    </h3>
                    <p class="text-sm text-gray-700 dark:text-neutral-400">
                      {{session('success')}}
                    </p>
                  </div>
                </div>
              </div>            
              @endif
              
              <div class="grid gap-y-4">
                <!-- Form Group -->
                <div>
                  <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
                  <div class="relative">
                    <input type="password" id="password" wire:model="password" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" aria-describedby="email-error">
                    @error('password')
                    <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                      <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                      </svg>
                    </div>
                    @enderror
                  </div>
                  @error('password')
                  <p class="text-red-600 mt-2" id="password-error">{{$message}}</p>
                  @enderror
                </div>
                <!-- End Form Group -->

                <div>
                  <label for="password_confirmation" class="block text-sm mb-2 dark:text-white">Confirm Password</label>
                  <div class="relative">
                    <input type="password" id="password_confirmation" wire:model="password_confirmation" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" aria-describedby="email-error">

                    @error('password_confirmation')
                    <div class="hidden  inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                      <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                      </svg>
                    </div>
                    @enderror
                  </div>
                  @error('password_confirmation')
                  <p class="text-xs text-red-600 mt-2" id="password_confirmation-error">{{$message}}</p>
                  @enderror
                </div>

                <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                  Save password
                </button>
              </div>
            </form>
            <!-- End Form -->
          </div>
        </div>
      </div>
    </main>
  </div>
</div>