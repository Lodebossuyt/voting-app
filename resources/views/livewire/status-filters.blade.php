<div>
    <nav class="hidden md:flex items-center justify-between text-xs text-gray-400">
        <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
            <li><a wire:click.prevent="setStatus('All')" href="" class="border-b-4 pb-3 @if($status === 'All') border-blue-400 text-gray-900 @endif transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500">All Ideas (87)</a></li>
            <li><a wire:click.prevent="setStatus('Considering')" href="" class="@if($status === 'Considering') border-blue-400 text-gray-900 @endif transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500">Considering (6)</a></li>
            <li><a wire:click.prevent="setStatus('In Progress')" href="" class="@if($status === 'In Progress') border-blue-400 text-gray-900 @endif transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500">In Progress (1)</a></li>
        </ul>

        <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
            <li><a wire:click.prevent="setStatus('Implemented')" href="" class="@if($status === 'Implemented') border-blue-400 text-gray-900 @endif transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500">Implemented (10)</a></li>
            <li><a wire:click.prevent="setStatus('Closed')" href="" class="@if($status === 'Closed') border-blue-400 text-gray-900 @endif transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500">Closed (55)</a></li>
        </ul>
    </nav>
</div>
