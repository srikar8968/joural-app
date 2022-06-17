<x-app-layout>
    <div class="container">
        <div class="breadcrumb flex flex-wrap text-gray-700 text-sm mt-3 px-4">
            <a href="{{ route('home') }}">Home</a>
            <span class="inline-block px-2">/</span>
            <a href="{{ route('journals') }}">Journals</a>
            <span class="inline-block px-2">/</span>
            <span class="text-gray-400">{{ $category->name }}</span>
        </div>
        <div class="flex items-start flex-wrap lg:flex-nowrap bg-gray-100 mb-4">
            <div class="lg:pr-4 w-full my-2">
                <div class="bg-white py-4 border border-gray-400 rounded shadow-lg">
                    <div class="border border-gray-800 rounded overflow-hidden mt-0 m-4 bg-gray-50">
                        <h2 class="bg-gray-800 text-white py-2 px-4">{{ $category->name }}</h2>
                        <p class="p-4 text-sm">
                            {{-- {{ $category->description }} --}}
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non imperdiet nulla, non porta quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In accumsan efficitur dui, eget laoreet nulla molestie eu. In in interdum lorem, eu egestas lacus. Nullam iaculis, tellus a lobortis tempus, risus dolor vehicula ex, eu dignissim nisl urna in velit. Quisque gravida, magna a luctus blandit, erat eros rhoncus metus, nec feugiat elit risus sit amet enim.
                        </p>
                    </div>
                    
                    <x-journal-list :journals="$journals" />

                    <div class="text-sm p-4">
                        {{ $journals->onEachSide(5)->links() }}
                    </div>
                </div>
            </div>
            <x-journal-col />
        </div>
    </div>
</x-app-layout>