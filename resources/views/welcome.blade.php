{{-- @php
        echo "<pre>";print_r(array_chunk($categories, 4));die;
@endphp --}}

<x-app-layout>
    <div class="home-wrapper py-12 md:py-24 w-full relative">
        <div class="absolute inset-0 bg-blue-600 opacity-50"></div>
        <div class="container relative">
            <h1 class="text-4xl md:text-5xl lg:text-7xl mb-4 font-semibold leading-tight text-white">Duis pellentesque fermentum magna</h1>
            <p class="text-lg md:text-xl text-white">Cras vel maximus magna. Proin iaculis placerat enim, id hendrerit neque maximus a. Cras hendrerit velit eu enim tempus, quis iaculis augue dignissim. Proin viverra laoreet nulla sit amet faucibus.</p>
        </div>
    </div>

    <div class="bg-gradient-to-t from-blue-900 to-blue-700 py-4 border-t border-b border-blue-800">
        <div class="container">
            <div class="flex flex-wrap items-center justify-between text-blue-50 text-center">
                <div class="w-1/2 md:w-1/4 p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="w-12 h-12 text-blue-100 mx-auto"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                    <h3 class="mt-4">Submission</h3>
                </div>
                <div class="w-1/2 md:w-1/4 p-4 border-l md:border-r border-blue-700">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="w-12 h-12 text-blue-100 mx-auto"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                    <h3 class="mt-4">Quality Check</h3>
                </div>
                <div class="w-1/2 md:w-1/4 p-4 border-r border-blue-700">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="w-12 h-12 text-blue-100 mx-auto"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                    <h3 class="mt-4">Peer Review Process</h3>
                </div>
                <div class="w-1/2 md:w-1/4 p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="w-12 h-12 text-blue-100 mx-auto"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    <h3 class="mt-4">Publishing</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="py-8 md:py-16 bg-white">
        <div class="container">
            <h2 class="text-2xl mb-4 font-bold text-gray-700">About Us</h2>
            <p class="text-sm leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quam mauris, semper sed sapien sit amet, pretium dapibus mauris. Fusce auctor a mauris sed imperdiet. Donec scelerisque placerat velit vitae fringilla. Vivamus ut fermentum ipsum. Duis vestibulum enim ac lacus gravida, ornare semper ipsum maximus. Sed posuere nunc orci, semper dictum enim feugiat eu. Praesent finibus porta elit eget porttitor. Praesent enim dui, tincidunt nec felis vitae, tempor vulputate eros. Quisque faucibus pulvinar semper. Morbi a semper nibh, a sollicitudin mi.<br/><br/>
            Donec nec varius felis. Vivamus et sem quis urna pulvinar gravida. Quisque dolor erat, sagittis at urna quis, tempor interdum mauris. Aliquam vitae eros vel sapien cursus mattis sit amet hendrerit massa. Cras in dolor placerat, varius eros rhoncus, dignissim magna. Nullam tortor turpis, viverra a posuere nec, consectetur ut diam.</p>
        </div>
    </div>

    <div class="bg-gradient-to-t from-gray-400 via-gray-300 to-gray-50 border-t border-b border-gray-300 py-12">
        <div class="container">
            <h2 class="mb-2 text-blue-800 text-lg font-bold pl-4">Clinical & Medical Journals</h2>
            <div class="flex flex-wrap leading-loose text-sm py-4">
                @foreach ($categoryChunk->all() as $categories)
                    <ul class="w-1/2 md:w-1/4 px-4 {{ $loop->index === 0 ? '' : 'border-l border-gray-400' }}">
                        @foreach ($categories as $category)
                            <li>
                                <a title="{{ $category->name }}" href="{{ route('journals.category', $category->slug) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endforeach
            </div>
        </div>
    </div>

    <div class="bg-gray-100 py-12">
        <div class="container">
            <h2 class="text-2xl mb-2 font-bold text-gray-700">Latest Journals</h2>
            <p class="mb-6 text-sm">Praesent vel justo vitae purus ultricies fermentum id quis lacus. Pellentesque vulputate mauris felis, at aliquet diam ornare ac. Integer mi magna, sodales a condimentum eu, tristique lacinia justo.</p>
            <x-journal-list :journals="$journals" />
        </div>
    </div>
</x-app-layout>