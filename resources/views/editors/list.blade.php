<x-app-layout>
    <div class="bg-gray-100 px-8 py-4">
        <div class="breadcrumb flex flex-wrap text-gray-700 text-sm mb-2 px-4">
            <a href="/">Home</a>
            <span class="inline-block px-2">/</span>
            <span class="text-gray-400">Editors</span>
        </div>
        {{-- <div class="container py-4"> --}}
            <div class="border border-gray-600 rounded overflow-hidden mb-4 bg-gray-50">
                <h2 class="bg-gray-600 text-white py-3 px-6">International Editors-in-Chief</h2>
                
                <div class="columns-1 md:columns-2 md:columns-3 2xl:columns-4 gap-2 p-4">
                    @foreach ($editors as $editor)
                        <x-editor-card :editor="$editor"></x-editor-card>
                    @endforeach
                </div>

                <div class="text-sm p-4">
                    {{ $editors->onEachSide(5)->links() }}
                </div>
            </div>
        {{-- </div> --}}
    </div>
</x-app-layout>