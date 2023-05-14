    <x-layout>
      <div class='w-[500px]'>

        <form action="{{ route('scrape') }}">
          @csrf
          <div class="flex flex-col w-full sm:justify-between sm:items-center ">
            <div class="flex flex-col w-full sm:flex-row sm:items-center ">
              <div class="flex flex-col w-full sm:flex-row sm:items-center ">
                <label for="url" class="text-gray-600 dark:text-gray-400">URL</label>
                <input type="text" name="url" id="url"
                  class="w-full px-4 py-2 mt-2 rounded-lg shadow-sm sm:mt-0 sm:ml-4 focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 "
                  placeholder="https://www.example.com" required>
              </div>
            </div>
            <button type="submit"
              class="px-4 py-2 mt-4 sm:mt-0 sm:ml-4 rounded-lg shadow-sm focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 bg-gradient-to-bl hover:scale-[1.01] transition-all
                bg-blue-700 text-white font-semibold text-sm leading-relaxed from-gray-700/50 via-transparent to-transparent
            ">
              Scrape
            </button>

          </div>
        </form>
      </div>
    </x-layout>
