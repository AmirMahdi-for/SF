<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            مدیریت فروشنده ها
        </h2>
    </x-slot>
    <div class="flex justify-end">
        <a href="{{route('shop.create')}}" class="inline-flex items-center px-4 py-2
        bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white
         uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none
          focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
          تعریف فروشنده جدید
        </a>
    </div>

    @if($shops->count())
        <hr class="my-4">
        <table class="table">
            <thead>
                <tr>
                    <th> # </th>
                    <th> عنوان </th>
                    <th> نام </th>
                    <th> تلفن </th>
                    <th> تاریخ شروع </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($shops as $key => $shop)
                    <tr>
                        <th>{{$key+1}}</th>
                        <td>{{$shop->title}}</td>
                        <td>{{$shop->full_name}}</td>
                        <td>{{$shop->phone}}</td>
                        <td>{{persianDate($shop->created_at)}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif


</x-app-layout>
