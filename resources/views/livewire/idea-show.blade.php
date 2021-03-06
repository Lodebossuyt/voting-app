<div>
    <div class="idea-and-buttons-container">
        <div class="idea-container bg-white rounded-xl flex mt-4">
            <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                <div class="flex-none mx-4">
                    <a href="#">
                        <img src="{{ $idea->user->getAvatar() }}" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="mx-2 md:mx-4 w-full">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">{{$idea->title}}</a>
                    </h4>
                    <div class="text-gray-600 mt-3">
                        {{$idea->description}}
                    </div>
                    <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                        <div class="flex items-center text-gray-400 text-xs font-semibold space-x-2">
                            <div class="hidden md:block font-bold text-gray-900">{{$idea->user->name}}</div>
                            <div class="hidden md:block">&bull;</div>

                            <div>{{$idea->created_at->diffForHumans()}}</div>
                            <div>&bull;</div>

                            <div>{{$idea->category->name}}</div>
                            <div>&bull;</div>

                            <div class="text-gray-900">3 comments</div>
                        </div>
                        <div class="flex items-center space-x-2 mt-4 md:mt-0"
                             x-data="{isOpen: false}">
                            <div class="{{$idea->status->classes}} text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                {{ $idea->status->name }}
                            </div>
                            <button @click="isOpen = !isOpen" class="relative bg-gray-100 hover:bg-gray-200 transition duration-150 ease-in border rounded-full h-7 py-2 px-3">
                                <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                                <ul @click.away="isOpen = false"
                                    x-show="isOpen"
                                    x-transition.origin.top.left
                                    @keydown.escape.window="isOpen = false"
                                    style="display:none"
                                    class="absolute z-10 w-44 font-semibold bg-white shadow-lg rounded-xl py-3 text-left md:ml-8 top-8 md:top-6 right-0 md:left-0">
                                    <li><a href="#" class="hover:bg-gray-100 transition block duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 transition block duration-150 ease-in px-5 py-3">Delete posts</a></li>
                                </ul>
                            </button>
                        </div>
                        <div class="flex items-center md:hidden mt-4 md:mt-0">
                            <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
                                <div class="text-sm font-bold leading-none @if($hasVoted) text-blue-600 @endif">
                                    {{$votesCount}}
                                </div>
                                <div class="text-xxs font-semibold leading-none text-gray-400">
                                    Votes
                                </div>
                            </div>
                            @if($hasVoted)
                                <button wire:click.prevent="vote" class="w-20 -ml-5 bg-blue-600 text-white border border-blue-600 font-bold text-xs uppercase rounded-xl hover:border-blue-700
                                            transition duration-150 ease-in px-4 py-3">
                                    Voted
                                </button>
                            @else
                                <button wire:click.prevent="vote" class="w-20 -ml-5 bg-gray-200 border border-gray-200 font-bold text-xs uppercase rounded-xl hover:border-gray-400
                                            transition duration-150 ease-in px-4 py-3">
                                    Vote
                                </button>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div> {{--End idea container--}}


        <div class="buttons-container flex items-center justify-between mt-6">
            <div class="flex flex-col md:flex-row items-center space-x-4 md:ml-6">
                <div
                    x-data="{isOpen: false}"
                    class="relative">
                    <button
                        @click="isOpen = !isOpen"
                        type="button"
                        class="flex items-center justify-center h-11 w-32 text-sm bg-blue-500 font-semibold rounded-xl border border-blue-500 hover:bg-blue-700 transition duration-150 ease-in px-6 py-3"
                    >
                        <span class="text-white">Reply</span>
                    </button>
                    <div
                        @click.away="isOpen = false"
                        x-show="isOpen"
                        x-transition.origin.top.left
                        @keydown.escape.window="isOpen = false"
                        style="display:none"
                        class="absolute z-10 w-64 md:w-104 text-left font-semibold text-sm bg-white shadow-xl rounded-xl mt-2">
                        <form action="#" class="space-y-4 px-4 py-6">
                            <div>
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4"
                                      class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2"
                                      placeholder="Go ahead don't be shy."></textarea>
                            </div>

                            <div class="flex flex-col md:flex-row md:items-center md:space-x-3">
                                <button
                                    type="button"
                                    class="flex items-center justify-center h-11 md:w-1/2 w-full text-sm bg-blue-500 font-semibold rounded-xl border border-blue-500 hover:bg-blue-700 transition duration-150 ease-in px-6 py-3"
                                >
                                    <span class="text-white">Post comment</span>
                                </button>
                                <button
                                    type="button"
                                    class="flex items-center justify-center md:w-1/2 w-full mt-2 md:mt-0 h-11 text-sm
                                bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400
                                transition duration-150 ease-in px-6 py-3"
                                >
                                    <svg class="h-5 w-5 text-gray-600 -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                    </svg>
                                    <span class="ml-1">Attach</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                @auth
                    @if(auth()->user()->isAdmin())
                        <livewire:set-status :idea="$idea"/>
                    @endif
                @endauth
            </div>
            <div class="hidden md:flex items-center space-x-3">
                <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                    <div class="text-xl leading-snug @if($hasVoted) text-blue-600 @endif">  {{$votesCount}}</div>
                    <div class="text-gray-400 text-sm leading-none">votes</div>
                </div>
                @if($hasVoted)
                    <button wire:click.prevent="vote"
                        type="button"
                        class="w-32 h-11 text-sm text-white bg-blue-600 uppercase font-semibold rounded-xl border border-blue-600 hover:border-blue-700 transition duration-150 ease-in px-6 py-3"
                    >
                        <span class="mr-2">Voted</span>
                    </button>
                @else
                    <button wire:click.prevent="vote"
                        type="button"
                        class="w-32 h-11 text-sm bg-gray-200 uppercase font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"
                    >
                        <span class="mr-2">Vote</span>
                    </button>
                @endif

            </div>
        </div>{{--end buttons container--}}

    </div> {{--end ideas and button container--}}
</div>
