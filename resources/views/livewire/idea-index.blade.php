<div>
    <div
        x-data
        @click="const target = $event.target.tagName.toLowerCase()
                const ignores = ['button', 'svg', 'path', 'a'];
                if(!ignores.includes(target)){
                    $event.target.closest('.idea-container').querySelector('.idea-link').click()
                }
            "
        class="idea-container bg-white rounded-xl flex hover:shadow-md
            transition duration-150 ease-in cursor-pointer">
        <div class="hidden md:block border-r border-gray-100 px-5 py-8">

            <div class="text-center">
                <div class="font-semibold text-2xl @if($hasVoted) text-blue-600 @endif">{{$votesCount}}</div>
                <div class="text-gray-500">Votes</div>
            </div>

            <div class="mt-8">
                @if($hasVoted)
                    <button class="w-20 bg-blue-600 text-white border border-blue-600 hover:border-blue-700
                    transition duration-150 ease-in font-bold text-xs uppercase rounded-xl px-4 py-3">
                        voted
                    </button>
                @else
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in font-bold text-xs uppercase rounded-xl px-4 py-3">
                        vote
                    </button>
                @endif

            </div>
        </div>
        <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
            <div class="flex-none mx-2 md:mx-4 md:mx-0">
                <a href="#">
                    <img src="{{ $idea->user->getAvatar() }}" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
            </div>

            <div class="mx-2 md:mx-4 w-full flex flex-col justify-between">
                <h4 class="text-xl font-semibold mt-3 md:mt-0">
                    <a href="{{route('idea.show', $idea)}}" class="idea-link hover:underline">{{$idea->title}}</a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">
                    {{$idea->description}}
                </div>
                <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                    <div class="flex items-center text-gray-400 text-xs font-semibold md:space-x-2">
                        <div>{{$idea->created_at->diffForHumans()}}</div>
                        <div>•</div>

                        <div>{{$idea->category->name}}</div>
                        <div>•</div>

                        <div class="text-gray-900">3 comments</div>
                    </div>
                    <div class="flex items-center space-x-2 mt-4 md:mt-0"
                         x-data="{isOpen: false}">
                        <div class="{{ $idea->status->classes }} text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                            {{ $idea->status->name }}
                        </div>
                        <button @click="isOpen = !isOpen" class="relative bg-gray-100 hover:bg-gray-200 transition duration-150 ease-in border rounded-full h-7 py-2 px-3">
                            <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></path></svg>
                            <ul @click.away="isOpen = false" x-show="isOpen" x-transition.origin.top.left="" @keydown.escape.window="isOpen = false" style="display:none"
                                class="absolute w-44 font-semibold bg-white shadow-lg rounded-xl py-3 text-left md:ml-8 top-8 md:top-6 right-0 md:left-0">
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
                            <button class="w-20 -ml-5 bg-blue-600 border border-blue-600 font-bold text-xs uppercase rounded-xl hover:border-blue-700
                                            transition duration-150 ease-in px-4 py-3">
                                Voted
                            </button>
                        @else
                            <button class="w-20 -ml-5 bg-gray-200 border border-gray-200 font-bold text-xs uppercase rounded-xl hover:border-gray-400
                                            transition duration-150 ease-in px-4 py-3">
                                Vote
                            </button>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>{{--End idea--}}
</div>
