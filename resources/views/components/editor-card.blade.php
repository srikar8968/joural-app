<div class="bg-gray-50 py-2 break-inside-avoid text-center sm:text-left">
    <div class="sm:pl-12 w-full">
        <div class="bg-gray-200 py-2 px-4 border-t border-l border-r border-gray-300 rounded-t text-sm">
            Cosmetology & Oro Facial Surgery
        </div>
    </div>
    <div class="relative sm:flex items-center w-full">
        <div class="hidden sm:flex w-24 h-24 bg-gray-50 border border-gray-300 shrink-0 rounded-full relative z-10 -mr-12">
            <div class="absolute z-10 bg-gray-50 -left-2 -top-2" style="height: 6.5rem; width: calc(3.5rem - 1px)"></div>
            <img class="absolute border border-gray-300 z-20 top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 object-cover w-20 h-20 rounded-full" src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png" alt="{{ $editor->name }}">
        </div>
    
        <div class="bg-white border border-gray-300 py-4 px-4 sm:pr-6 sm:pl-16 rounded-b">
            <div 
                class="sm:hidden h-28 w-28 rounded-full mb-4 mx-auto bg-gray-100 oveflow-hidden relative border-l border-r border-gray-300"
                style="
                    background-image: url('https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png');
                    background-size: contain;
                    background-repeat: no-repeat;
                    background-position: center">
            </div>
            <h3><a href="/">{{ $editor->name }}</a></h3>
            <span class="inline-block mb-2 text-sm font-bold">{{ $editor->role }}</span>
            <p class="text-sm text-gray-700">{{ $editor->info }}</p>
        </div>
    </div>
</div>