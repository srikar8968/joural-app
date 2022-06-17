
@isset($categories)
    <div class="w-full lg:w-80 bg-white border border-gray-400 rounded shrink-0 my-2">
        <h4 class="py-3 text-blue-600 px-4 text-sm font-semibold bg-gray-50 rounded-t border-b border-gray-400">Clinical & Medical Journals</h4>
        <ul class="text-sm text-gray-700">
            @foreach ($categories as $category)
                <li class="py-2 px-4 border-b">
                    <x-nav-link href="{{ route('journals.category', $category->slug) }}">{{ $category->name }}</x-nav-link>
                </li>
            @endforeach
        </ul>   
    </div>
@endisset
