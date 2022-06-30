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
           <input type="search" placeholder="find an idea" class="w-full rounded-xl border-none bg-white px-4 py-2 pl-8 placeholder:text-gray-900">
           <div class="absolute top-0 flex items-center h-full ml-2">
               <svg class="w-4 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
               </svg>
           </div>

       </div>
   </div>
</x-app-layout>