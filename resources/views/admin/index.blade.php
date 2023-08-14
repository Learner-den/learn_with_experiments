<x-admin-layout>

<!-- We have copy the following code from <x-slot name="header"> to </x-slot> -->
<!-- from dashboard.blade.php and replaced the text __('Dashborad') wit __('Admin') -->

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin') }}
        </h2>
</x-slot>


</x-admin-layout>