<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Welcomee! what i did") }} <br />
                    {{ __("Authentication: Users will be able to create an account securely with the authentication system, log in and manage their personal information.") }} <br />
                    {{ __("Calendar Create: Users will be able to view, add and delete their events. We could develop calendars for different time periods!") }} <br />
                    {{ __("Workgroup Management: We created groups so that users can customize calendars among themselves. But I had to leave this to the second phase :)") }} <br />
                </div>
            </div>
        </div>
    </div>
    <div class="py-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Fatures") }} <br />
                    {{ __("Auth: I am developed with Laravel 10.x and include Laravel Auth features.") }} <br />
                    {{ __("FrontEnd: In this regard, I used Laravel's draft interface again. I am for simplicity.") }} <br />
                    {{ __("Vite: You know Vite! It is a very fast and nice tool to develop the front side. For this reason, I take advantage of Vite features.") }} <br />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
