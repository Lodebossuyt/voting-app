<x-app-layout>
    <div class="filter flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl px-4 py-2 border-none">
                <option value="Category one">Category One</option>
                <option value="Category one">Category Two</option>
                <option value="Category one">Category Three</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="category" class="w-full rounded-xl px-4 py-2 border-none">
                <option value="Category one">Filter One</option>
                <option value="Category one">Filter Two</option>
                <option value="Category one">Filter Three</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <input type="search" placeholder="find an idea"
                   class="w-full rounded-xl border-none bg-white px-4 py-2 pl-8 placeholder:text-gray-900">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>
        </div>
    </div>

    {{--Start Ideascontainer--}}
    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container bg-white rounded-xl flex hover:shadow-md transition duration-150 ease-in cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">

                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in font-bold text-xs uppercase rounded-xl px-4 py-3">
                        vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda atque dolorem omnis praesentium ratione repellendus sapiente temporibus voluptate. Alias error facilis nam non perferendis quae rerum veritatis? A accusamus, blanditiis corporis culpa cumque dolorum enim, esse est exercitationem in ipsa labore numquam officiis omnis perferendis perspiciatis praesentium recusandae totam vero voluptate! Asperiores consequatur nesciunt numquam odit ut. Blanditiis culpa dicta eligendi, fugit labore magnam, molestiae, officiis quos recusandae reiciendis repudiandae ullam velit voluptas. Aliquam aut autem beatae dolor doloribus enim inventore ipsa, officiis quidem quis sed, sit tempore, veritatis vitae voluptatibus! Debitis dolores et maxime! Ab atque beatae expedita sequi.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-gray-400 text-sm font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>

                            <div>Category 1</div>
                            <div>&bull;</div>

                            <div class="text-gray-900">3 comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-200 text-sm font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Open
                            </div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 transition duration-150 ease-in rounded-full h-7 py-2 px-3">
                                <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                                <ul class="absolute w-44 font-semibold bg-white shadow-lg rounded-xl py-3 text-left ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 transition block duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 transition block duration-150 ease-in px-5 py-3">Delete posts</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--End Ideascontainer--}}
    {{--Start Ideascontainer--}}
    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container bg-white rounded-xl flex hover:shadow-md transition duration-150 ease-in cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">

                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in font-bold text-xs uppercase rounded-xl px-4 py-3">
                        vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda atque dolorem omnis praesentium ratione repellendus sapiente temporibus voluptate. Alias error facilis nam non perferendis quae rerum veritatis? A accusamus, blanditiis corporis culpa cumque dolorum enim, esse est exercitationem in ipsa labore numquam officiis omnis perferendis perspiciatis praesentium recusandae totam vero voluptate! Asperiores consequatur nesciunt numquam odit ut. Blanditiis culpa dicta eligendi, fugit labore magnam, molestiae, officiis quos recusandae reiciendis repudiandae ullam velit voluptas. Aliquam aut autem beatae dolor doloribus enim inventore ipsa, officiis quidem quis sed, sit tempore, veritatis vitae voluptatibus! Debitis dolores et maxime! Ab atque beatae expedita sequi.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-gray-400 text-sm font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>

                            <div>Category 1</div>
                            <div>&bull;</div>

                            <div class="text-gray-900">3 comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-200 text-sm font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Open
                            </div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 transition duration-150 ease-in rounded-full h-7 py-2 px-3">
                                <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                                <ul class="absolute w-44 font-semibold bg-white shadow-lg rounded-xl py-3 text-left ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 transition block duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 transition block duration-150 ease-in px-5 py-3">Delete posts</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--End Ideascontainer--}}
    {{--Start Ideascontainer--}}
    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container bg-white rounded-xl flex hover:shadow-md transition duration-150 ease-in cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">

                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in font-bold text-xs uppercase rounded-xl px-4 py-3">
                        vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda atque dolorem omnis praesentium ratione repellendus sapiente temporibus voluptate. Alias error facilis nam non perferendis quae rerum veritatis? A accusamus, blanditiis corporis culpa cumque dolorum enim, esse est exercitationem in ipsa labore numquam officiis omnis perferendis perspiciatis praesentium recusandae totam vero voluptate! Asperiores consequatur nesciunt numquam odit ut. Blanditiis culpa dicta eligendi, fugit labore magnam, molestiae, officiis quos recusandae reiciendis repudiandae ullam velit voluptas. Aliquam aut autem beatae dolor doloribus enim inventore ipsa, officiis quidem quis sed, sit tempore, veritatis vitae voluptatibus! Debitis dolores et maxime! Ab atque beatae expedita sequi.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-gray-400 text-sm font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>

                            <div>Category 1</div>
                            <div>&bull;</div>

                            <div class="text-gray-900">3 comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-200 text-sm font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Open
                            </div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 transition duration-150 ease-in rounded-full h-7 py-2 px-3">
                                <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                                <ul class="absolute w-44 font-semibold bg-white shadow-lg rounded-xl py-3 text-left ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 transition block duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 transition block duration-150 ease-in px-5 py-3">Delete posts</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--End Ideascontainer--}}
    {{--Start Ideascontainer--}}
    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container bg-white rounded-xl flex hover:shadow-md transition duration-150 ease-in cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">

                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in font-bold text-xs uppercase rounded-xl px-4 py-3">
                        vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda atque dolorem omnis praesentium ratione repellendus sapiente temporibus voluptate. Alias error facilis nam non perferendis quae rerum veritatis? A accusamus, blanditiis corporis culpa cumque dolorum enim, esse est exercitationem in ipsa labore numquam officiis omnis perferendis perspiciatis praesentium recusandae totam vero voluptate! Asperiores consequatur nesciunt numquam odit ut. Blanditiis culpa dicta eligendi, fugit labore magnam, molestiae, officiis quos recusandae reiciendis repudiandae ullam velit voluptas. Aliquam aut autem beatae dolor doloribus enim inventore ipsa, officiis quidem quis sed, sit tempore, veritatis vitae voluptatibus! Debitis dolores et maxime! Ab atque beatae expedita sequi.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-gray-400 text-sm font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>

                            <div>Category 1</div>
                            <div>&bull;</div>

                            <div class="text-gray-900">3 comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-200 text-sm font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Open
                            </div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 transition duration-150 ease-in rounded-full h-7 py-2 px-3">
                                <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                                <ul class="absolute w-44 font-semibold bg-white shadow-lg rounded-xl py-3 text-left ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 transition block duration-150 ease-in px-5 py-3">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 transition block duration-150 ease-in px-5 py-3">Delete posts</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--End Ideascontainer--}}
</x-app-layout>
