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
                    <th> ایمیل </th>
                    <th> نام کاریری </th>
                    <th> تاریخ شروع </th>
                    <th colspan="2"> عملیات </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($shops as $key => $shop)
                    <tr>
                        <th>{{$key+1}}</th>
                        <td>{{$shop->title}}</td>
                        <td>{{$shop->full_name}}</td>
                        <td>{{$shop->phone}}</td>
                        <td>{{$shop->user->email ?? '-'}}</td>
                        <td>{{$shop->user->name ?? '-'}}</td>
                        <td>{{persianDate($shop->created_at)}}</td>
                        <td>
                            <a href="{{route('shop.edit', $shop->id)}}" class="inline-flex items-center px-4 py-2
                                bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white
                                uppercase tracking-widest hover:bg-green-700 active:bg-green-900 focus:outline-none
                                focus:border-green-900 focus:ring focus:ring-green-300 disabled:opacity-25 transition">
                                ویرایش
                                </a>
                        </td>
                        <td>
                            <form action="{{route('shop.destroy', $shop->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="delete-record inline-flex items-center px-4 py-2
                                    bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white
                                    uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none
                                    focus:border-red-900 focus:ring focus:ring-red-300 disabled:opacity-25 transition">
                                    حذف
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif


</x-app-layout>
