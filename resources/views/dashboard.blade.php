<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12" style="background-color: #fff8e1;"> 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#fff3cd] overflow-hidden shadow-sm sm:rounded-lg p-6" style="background-color: #fff3cd; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <div class="text-gray-900 text-center">
                    <h3 class="text-2xl font-bold" style="color: #856404;">Welcome to Your Dashboard!</h3>
                    <p class="text-lg mt-4" style="color: #856404;">You're logged in!</p>

                   
                    <div class="mt-6 flex justify-center"> 
                        <a href="{{ url('/') }}" 
                           style="display: inline-block; background-color: #ffc107; color: #856404; padding: 10px 20px; border-radius: 4px; font-weight: bold; text-decoration: none; transition: background-color 0.3s; margin-right: 20px;">
                            Home
                        </a>

                        <!-- Create New Upload button -->
                        <a href="{{ url('/uploads/create') }}" 
                           style="display: inline-block; background-color: #ffc107; color: #856404; padding: 10px 20px; border-radius: 4px; font-weight: bold; text-decoration: none; transition: background-color 0.3s; margin-left: 20px;">
                            Create New Upload
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
