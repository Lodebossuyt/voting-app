<x-app-layout>
   <div>
       <a href="{{ $backUrl }}" class="flex items-center font-semibold hover:underline">
           <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
               <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
           </svg>
           <span class="ml-2">
               All ideas (or back to chosen categories + filters)
           </span>
       </a>
   </div>

    @livewire('idea-show', ['idea'=>$idea, 'votesCount'=>$votesCount])

    <div class="comments-container relative space-y-6 md:ml-22 mt-1 pt-4">
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="md:mx-4 w-full">
                    {{--<h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title can go here</a>
                    </h4>--}}
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, pariatur!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-gray-400 text-xs font-semibold space-x-2">
                            <div class="font-bold text-gray-900">Jhon doe</div>
                            <div>&bull;</div>

                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2"
                             x-data="{isOpen: false}">
                            <div class="hidden md:block bg-gray-200 text-sm font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Open
                            </div>
                            <button @click="isOpen = !isOpen" class="relative bg-gray-100 hover:bg-gray-200 transition duration-150 ease-in border rounded-full h-7 py-2 px-3">
                                <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                                <ul @click.away="isOpen = false"
                                    x-show="isOpen"
                                    x-transition.origin.top.left
                                    @keydown.escape.window="isOpen = false"
                                    style="display:none"
                                    class="absolute w-44 font-semibold bg-white shadow-lg
                                    rounded-xl py-3 text-left md:ml-8 top-8 md:top-6 right-0 md:left-0 z-10">
                                    <li><a href="#" class="hover:bg-gray-100 transition block duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 transition block duration-150 ease-in px-5 py-3">Delete posts</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> {{--comment--}}
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="md:mx-4 w-full">
                    {{--<h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title can go here</a>
                    </h4>--}}
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, pariatur!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-gray-400 text-xs font-semibold space-x-2">
                            <div class="font-bold text-gray-900">Jhon doe</div>
                            <div>&bull;</div>

                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2"
                             x-data="{isOpen: false}">
                            <div class="hidden md:block bg-gray-200 text-sm font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Open
                            </div>
                            <button @click="isOpen = !isOpen" class="relative bg-gray-100 hover:bg-gray-200 transition duration-150 ease-in border rounded-full h-7 py-2 px-3">
                                <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                                <ul @click.away="isOpen = false"
                                    x-show="isOpen"
                                    x-transition.origin.top.left
                                    @keydown.escape.window="isOpen = false"
                                    style="display:none"
                                    class="absolute w-44 font-semibold bg-white shadow-lg
                                    rounded-xl py-3 text-left md:ml-8 top-8 md:top-6 right-0 md:left-0 z-10">
                                    <li><a href="#" class="hover:bg-gray-100 transition block duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 transition block duration-150 ease-in px-5 py-3">Delete posts</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> {{--comment--}}
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="md:mx-4 w-full">
                    {{--<h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title can go here</a>
                    </h4>--}}
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, pariatur!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-gray-400 text-xs font-semibold space-x-2">
                            <div class="font-bold text-gray-900">Jhon doe</div>
                            <div>&bull;</div>

                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2"
                             x-data="{isOpen: false}">
                            <div class="hidden md:block bg-gray-200 text-sm font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Open
                            </div>
                            <button @click="isOpen = !isOpen" class="relative bg-gray-100 hover:bg-gray-200 transition duration-150 ease-in border rounded-full h-7 py-2 px-3">
                                <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                                <ul @click.away="isOpen = false"
                                    x-show="isOpen"
                                    x-transition.origin.top.left
                                    @keydown.escape.window="isOpen = false"
                                    style="display:none"
                                    class="absolute w-44 font-semibold bg-white shadow-lg
                                    rounded-xl py-3 text-left md:ml-8 top-8 md:top-6 right-0 md:left-0 z-10">
                                    <li><a href="#" class="hover:bg-gray-100 transition block duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 transition block duration-150 ease-in px-5 py-3">Delete posts</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> {{--comment--}}
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="md:mx-4 w-full">
                    {{--<h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title can go here</a>
                    </h4>--}}
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, pariatur!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-gray-400 text-xs font-semibold space-x-2">
                            <div class="font-bold text-gray-900">Jhon doe</div>
                            <div>&bull;</div>

                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2"
                             x-data="{isOpen: false}">
                            <div class="hidden md:block bg-gray-200 text-sm font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Open
                            </div>
                            <button @click="isOpen = !isOpen" class="relative bg-gray-100 hover:bg-gray-200 transition duration-150 ease-in border rounded-full h-7 py-2 px-3">
                                <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                                <ul @click.away="isOpen = false"
                                    x-show="isOpen"
                                    x-transition.origin.top.left
                                    @keydown.escape.window="isOpen = false"
                                    style="display:none"
                                    class="absolute w-44 font-semibold bg-white shadow-lg
                                    rounded-xl py-3 text-left md:ml-8 top-8 md:top-6 right-0 md:left-0 z-10">
                                    <li><a href="#" class="hover:bg-gray-100 transition block duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 transition block duration-150 ease-in px-5 py-3">Delete posts</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> {{--comment--}}
        {{--<div class="comment-container border border-blue-300 is-admin relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
                    <p class="text-center uppercase text-blue-500 text-sm font-bold mt-1">Admin</p>
                </div>

                <div class="mx-4 w-full">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">Status changed to under considiration</a>
                    </h4>
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, pariatur!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-gray-400 text-sm font-semibold space-x-2">
                            <div class="font-bold text-blue-900">Andrea</div>
                            <div>&bull;</div>

                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2"
                             x-data="{isOpen: false}">
                            <div class="bg-gray-200 text-sm font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Open
                            </div>
                            <button @click="isOpen = !isOpen" class="relative bg-gray-100 hover:bg-gray-200 transition duration-150 ease-in border rounded-full h-7 py-2 px-3">
                                <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                                <ul @click.away="isOpen = false"
                                    x-show="isOpen"
                                    x-transition.origin.top.left
                                    @keydown.escape.window="isOpen = false"
                                    style="display:none"
                                    class="absolute w-44 font-semibold bg-white shadow-lg rounded-xl py-3 text-left ml-8 z-10">
                                    <li><a href="#" class="hover:bg-gray-100 transition block duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 transition block duration-150 ease-in px-5 py-3">Delete posts</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}{{--admin comment--}}
    </div>{{--end comments section--}}


</x-app-layout>
