<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in Admin!") }}
                    {{Auth::guard('admin')->user()->name}}

                    <a href="{{route('admin_logout')}}">logout</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
