<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('All Games') }}
            </h2>
            <a
                href="{{ route('games.create') }}"
                class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-indigo-600 border border-transparent rounded-lg active:bg-indigo-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                <span>Add New Game</span>
                <svg class="w-4 h-4 ml-2 -mr-1" fill="currentColor" aria-hidden="true" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                          clip-rule="evenodd"/>
                </svg>
            </a>
        </div>
    </x-slot>

    @if(session('info'))
        <div class="max-w-7xl mx-auto px-8 mt-8">
            <div class="inline-flex items-center bg-white leading-none text-purple-600 rounded-full p-2 shadow text-teal text-sm">
                <span class="inline-flex bg-indigo-600 text-white rounded-full h-6 px-3 justify-center items-center">INFO</span>
                <span class="inline-flex px-2">{{ session('info') }}</span>
            </div>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <!-- component -->
                <section class="py-12">
                    <div class="container mx-auto">
                        <div class="flex flex-wrap px-6">

                            @foreach($games as $game)

                                <div class="w-full lg:w-1/2   md:px-4 lg:px-6 py-5">
                                    <div class="bg-white hover:shadow-xl">
                                        <div class="">
                                            <img
                                                src="{{ $game->image_url }}"
                                                alt="{{ $game->name }}"
                                                class="h-56 w-full border-white border-8 hover:opacity-25">
                                        </div>
                                        <div class="px-4 py-4 md:px-10">
                                            <h1 class="font-bold text-lg">
                                                {{ $game->name }}
                                            </h1>
                                            <p class="py-4">
                                                {{ $game->description }}
                                            </p>
                                            <div class="flex flex-wrap items-center justify-between pt-8">
                                                <div class="w-full md:w-1/3 text-sm font-medium">
                                                    Status:
                                                    @if($game->status === 'running')
                                                        <span
                                                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                                                        >
                                                            {{ strtoupper($game->status) }}
                                                        </span>
                                                    @else
                                                        <span
                                                            class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full dark:text-yellow-100 dark:bg-yellow-700"
                                                        >
                                                            {{ strtoupper($game->status) }}
                                                        </span>
                                                    @endif

                                                </div>
                                                <div class="2/3">
                                                    <div class="flex items-center space-x-4 text-sm font-medium">
                                                        <a
                                                            href="{{ $game->game_url }}" target="_blank"
                                                            class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-indigo-600 border border-transparent rounded-lg active:bg-indigo-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                                            Jugar
                                                        </a>
                                                        <a href="{{ route('games.edit', $game->id) }}"
                                                           class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-indigo-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                           aria-label="Edit">
                                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                                 viewBox="0 0 20 20">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                                            </svg>
                                                        </a>
                                                        <form action="{{ route('games.destroy', $game->id) }}"
                                                              method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button
                                                                type="submit" onclick="return confirm('Are you sure?')"
                                                                aria-label="Delete"
                                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-indigo-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray">
                                                                <svg class="w-5 h-5" aria-hidden="true"
                                                                     fill="currentColor" viewBox="0 0 20 20">
                                                                    <path fill-rule="evenodd"
                                                                          d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                          clip-rule="evenodd"></path>
                                                                </svg>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        </div>

                    </div>
                </section>

            </div>
        </div>
    </div>
</x-app-layout>
