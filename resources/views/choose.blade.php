<x-layout>

  <div class="grid items-center justify-center gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 ">
    @foreach ($imageArray as $image)
      <div class="relative">

        <img src="{{ $image }}" alt="" class="object-cover w-full h-full">
        <div
          class="absolute inset-0 flex items-center justify-center transition-all bg-black bg-opacity-50 opacity-0 hover:opacity-100">

          <a href="{{ route('compress', ['url' => $image, 'quality' => 50, 'type' => 'png']) }}"
            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="submit">
            Download
          </a>
        </div>
      </div>
    @endforeach
  </div>



</x-layout>

