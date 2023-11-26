<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight">
      {{ __('Audio Edit') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-black overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-black border-b border-gray-900">
          <form action="{{ route('songs.update', $song->id) }}" method="POST" enctype="multipart/form-data"
            class="space-y-4">
            @csrf
            @method('PUT')
            <div>
              <label for="thumb" class="block text-sm font-medium text-white">Thumbnail:</label>
              <input type="file" id="thumb" name="thumb" class="mt-1 block w-full text-white">
            </div>
            <div>
              <label for="title" class="block text-sm font-medium text-white">Title:</label>
              <input type="text" id="title" name="title" value="{{ $song->title }}" required
                class="mt-1 block w-full text-black">
            </div>
            <div>
              <label for="genres" class="block text-sm font-medium text-white">Genres:</label>
              <input type="text" id="genres" name="genres" value="{{ $song->genres }}" required
                class="mt-1 block w-full text-black">
            </div>
            <div>
              <label for="artists" class="block text-sm font-medium text-white">Artists:</label>
              <input type="text" id="artists" name="artists" value="{{ $song->artists }}" required
                class="mt-1 block w-full text-black">
            </div>
            <div>
              <label for="audio" class="block text-sm font-medium text-white">Audio:</label>
              <input type="file" id="audio" name="audio" class="mt-1 block w-full text-white">
            </div>
            <div>
              <input type="submit" value="Update"
                class="mt-3 w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-black hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>