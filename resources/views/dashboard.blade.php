<x-app-layout> <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Audio Management') }} </h2>
    </x-slot>
    <div class="py-6">
        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-black dark:bg-gray-800
        overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- table here -->
                    <div class="flex flex-wrap justify-between items-center mb-4">
                        <h1 class="text-xl font-semibold text-gray-200">Songs</h1>
                        @can('manage-songs')
                        <a href="{{ route('songs.create') }}"
                            class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Add New
                            Song</a>
                            @endcan
                    </div>
                    <div class="overflow-x-auto bg-black rounded-lg shadow overflow-y-auto relative"
                        style="height: 405px;">
                        <table
                            class="border-collapse table-auto w-full whitespace-no-wrap bg-black dark:bg-black table-striped relative">
                            <thead>
                                <tr class="text-left">
                                    <th class="py-2 px-3 sticky top-0 border-b border-gray-900 dark:border-gray-900 bg-gray-900
            dark:bg-gray-900">ID</th>
                                    <th class="py-2 px-3 sticky top-0 border-b border-gray-900 dark:border-gray-900 bg-gray-900
            dark:bg-gray-900">
                                        Thumb</th>
                                    <th class="py-2 px-3 sticky top-0 border-b border-gray-900 dark:border-gray-900 bg-gray-900
        dark:bg-gray-900">Title</th>
                                    <th class="py-2 px-3 sticky top-0 border-b border-gray-900 dark:border-gray-900 bg-gray-900
        dark:bg-gray-900">Genres</th>
                                    <th class="py-2 px-3 sticky top-0 border-b border-gray-900 dark:border-gray-900 bg-gray-900
            dark:bg-gray-900">
                                        Artists</th>
                                    <th class="py-2 px-3 sticky top-0 border-b border-gray-900 dark:border-gray-900 bg-gray-900
            dark:bg-gray-900">Created At</th>
                                    <th class="py-2 px-3 sticky top-0 border-b border-gray-900 dark:border-gray-900 bg-gray-900
        dark:bg-gray-900">Audio</th>
                                    <th class="py-2 px-3 sticky top-0 border-b border-gray-900 dark:border-gray-900 bg-gray-900
        dark:bg-gray-900">Action</th>
                                </tr>
                            </thead>
                            <tbody> @foreach ($songs as $song) <tr>
                                    <td class="border-dashed border-t border-gray-900
            dark:border-gray-800 px-3 py-2">{{ $song->id }}</td>
                                    <td class="border-dashed border-t border-gray-200 dark:border-gray-800 px-3 py-2">
                                        <img src="{{ Storage::url($song->thumb) }}" alt="{{ $song->title }}"
                                            class="w-16 h-16 object-cover">
                                    </td>
                                    <td class="border-dashed border-t border-gray-200 dark:border-gray-800 px-3 py-2">{{
                                        $song->title
                                        }}</td>
                                    <td class="border-dashed border-t border-gray-200 dark:border-gray-800 px-3 py-2">{{
                                        $song->genres
                                        }}</td>
                                    <td class="border-dashed border-t border-gray-200 dark:border-gray-800 px-3 py-2">{{
                                        $song->artists }}</td>
                                    <td class="border-dashed border-t border-gray-200 dark:border-gray-800 px-3 py-2">{{
                                        $song->created_at->format('Y-m-d H:i:s')}}</td>
                                    <td class="border-dashed border-t border-gray-200 dark:border-gray-800 px-3 py-2">
                                        <audio controls>
                                            <source src="{{ Storage::url($song->audio) }}" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                    </td>
                                    @can('manage-songs')
                                    <td class="border-dashed border-t border-gray-200 dark:border-gray-800 px-3 py-2">
                                        <div class="flex items-center">
                                            <a href="{{ route('songs.edit', $song) }}"
                                                class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">Edit</a>
                                            <form action="{{ route('songs.destroy', $song) }}" method="POST"
                                                class="ml-2">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded"
                                                    onclick="return confirm('Are you sure you want to delete this song?')">Delete</button>
                                            </form>
                                    </td>
                                    @endcan
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</x-app-layout>