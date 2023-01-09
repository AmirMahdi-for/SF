<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            مدیریت فروشنده ها
        </h2>
    </x-slot>

    <form class="grid" action="{{route('shop.store')}}" method="post">
        @csrf

        <div class="my-3">
            <x-jet-label for="title" value="عنوان" />
            <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
        </div>

        <div class="my-3">
            <x-jet-label for="first_name" value="نام" />
            <x-jet-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required/>
        </div>

        <div class="my-3">
            <x-jet-label for="last_name" value="نام خانوادگی" />
            <x-jet-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required/>
        </div>

        <div class="my-3">
            <x-jet-label for="phone" value="تلفن" />
            <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required/>
        </div>

        <div class="my-3">
            <x-jet-label for="address" value="آدرس" />
            <x-jet-input id="address" class="block mt-1 w-full" type="text-area" name="address" :value="old('address')" required/>
        </div>
    </form>

</x-app-layout>
