<x-app-layout>
    <div class="container">
        <div class="breadcrumb flex flex-wrap text-gray-700 text-sm mt-3 px-4">
            <a href="/">Home</a>
            <span class="inline-block px-2">/</span>
            <span class="text-gray-400">Journals</span>
        </div>
        <div class="flex items-start flex-wrap lg:flex-nowrap bg-gray-100 mb-4">
            <div class="lg:pr-4 w-full my-2">
                <div class="bg-white rounded shadow-lg">
                    <h2 class="text-xl rounded-t pl-4 py-4 border border-gray-400 font-semibold text-gray-800">Latest Journals</h2>
                    
                    <x-journal-list :journals="$journals" />

                    <div class="text-sm p-4 border border-t-0 border-gray-400 rounded-b">
                        {{ $journals->onEachSide(5)->links() }}
                    </div>
                </div>
            </div>
            <x-journal-col />
        </div>
    </div>
</x-app-layout>