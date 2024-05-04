<aside class="h-[95vh] w-80 transition-all relative z-10">
    <nav class="h-full flex flex-col bg-white border-r shadow-sm">
        <div class="py-4 pb-2 flex justify-end items-center">
            <button class="toggle-sidebar -mr-2 p-1.5 w-7 h-7 rounded-lg bg-gray-50 hover:bg-gray-100 transition-colors">
                <x-uiw-left-circle-o class="inline-block h-7 w-7 left-circle" />
                <x-uiw-right-circle-o class="h-7 w-7 hidden right-circle" />
            </button>
        </div>
        <ul class="flex-1 px-3">
            <x-sidebar-item icon="ri-dashboard-fill" text="Dashboard" :active="Route::currentRouteName() === 'home'" link="/"
                :alert="false" />
            <x-sidebar-item icon="fas-hotel" text="Hotels" :active="Route::currentRouteName() === 'hotels.index'" link="/hotels" :alert="false" />
            <x-sidebar-item icon="gmdi-admin-panel-settings-r" text="Admins" :active="Route::currentRouteName() === 'admins.index'" link="/admins"
                :alert="false" />
            <x-sidebar-item icon="fluentui-status-20" text="Statuses" :active="Route::currentRouteName() === 'status.index'" link="/statuses"
                :alert="false" />
        </ul>
        <div class="border-t flex p-3 group relative">

            <div class="flex items-center justify-center w-12 h-12 ml-1 rounded-md bg-blue-300">
                {{ substr(auth()->user()->username, 0, 2) }}
            </div>
            <div class="flex justify-between items-center w-52 ml-3 sidebar-text-item overflow-hidden transition-all">
                <div>
                    <h4 class="font-semibold">{{ auth()->user()->username }}</h4>
                    <span class="text-xs text-gray-600">{{ auth()->user()->email }}</span>
                </div>
                <button class="sidebar-profile-toggle cursor-pointer">
                    <x-fontisto-more-v-a class="h-8 w-8 p-1.5   bg-gray-50 hover:bg-gray-100 transition-colors" />
                </button>
            </div>
            <div
                class="sidebar-profile-buttons  invisible opacity-20 flex  transition-all rounded-xl group-hover:opacity-100 group-hover:visible  absolute left-full  gap-2 p-1.5 -mt-8  flex-col ">
                <span
                    class="sidebar-text-item-right-2 flex invisible opacity-20 transition-all group-hover:visible group-hover:opacity-100 p-1.5 rounded-lg bg-green-50 hover:bg-green-100 px-10  items-center gap-2 cursor-pointer">
                    Profile
                    <x-css-profile class="h-5 w-5" />
                </span>
                <form action="logout" method="get">
                    <button
                        class="sidebar-text-item-right-2 flex invisible opacity-20  transition-all group-hover:visible group-hover:opacity-100 p-1.5 rounded-lg bg-red-100 hover:bg-red-500 px-10 items-center gap-2 cursor-pointer hover:text-white">Logout
                        <x-eos-logout class="h-5 w-5" /></button>
                </form>
            </div>

        </div>
    </nav>
</aside>
@section('javascript')
    <script>
        $(document).ready(function() {
            $(".sidebar-profile-toggle").click(function() {
                // Target the sibling element containing hidden buttons
                $(".sidebar-profile-buttons").toggleClass(
                    " invisible opacity-20 visible opacity-100 p-0" // Corrected class list order for better readability
                );
                $(".sidebar-text-item-right-2").toggleClass("hidden flex")
            });
        });
    </script>
@endsection
