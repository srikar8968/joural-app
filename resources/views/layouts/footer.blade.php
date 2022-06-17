<footer class="bg-gray-600 border-t border-gray-700">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="flex items-center justify-center w-full md:w-1/3 border-b md:border-b-0 py-4 md:py-8 px-4 md:border-l border-gray-500 text-gray-300 text-sm">
                <x-application-logo class="block h-10 fill-current mr-4" />
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="flex flex-col items-center w-full md:w-1/3 border-b md:border-b-0 py-4 md:py-8 px-4 md:border-l md:border-r border-gray-500">
                <x-nav-link class="items-center flex text-white mb-2" href="#" :active="false">
                    About Us
                </x-nav-link>
                <x-nav-link class="items-center flex text-white" :href="route('home')" :active="false">
                    Contact Us
                </x-nav-link>
            </div>
            <div class="flex flex-col items-center w-full md:w-1/3 border-b md:border-b-0 py-4 md:py-8 px-4 md:border-r border-gray-500">
                <x-nav-link class="items-center flex text-white mb-2" href="#" :active="false">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-3.5 h-3.5 mr-1"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    <span>&nbsp;{{ __('+91 9563654125') }}</span>
                </x-nav-link>
                <x-nav-link class="items-center flex text-white" :href="route('home')" :active="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-3.5 h-3.5 mr-1"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    &nbsp;{{ __('info@journal.com') }}
                </x-nav-link>
            </div>
        </div>
    </div>
    <div class="bg-gray-700 py-3 text-gray-300 text-xs">
        <div class="container">
            <span>Copyright © 2022 - Open Access Publisher. All Rights Reserved.</span>
        </div>
    </div>
</footer>