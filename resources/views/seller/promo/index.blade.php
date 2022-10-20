@extends('layouts.seller')
@section('content')

<div class="flex justify-between mb-1 mx-10 pt-2">
    <h1 class="font-semibold text-black text-2xl">Tambah Promo</h1>
    <a href="/promo_create" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm py-2 px-3 text-center mr-2 mb-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Tambah Promo
    </a>
</div>

<div class="overflow-x-auto relative shadow-md sm:rounded-lg mx-1">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Nama Promo
                </th>
                <th scope="col" class="py-3 px-6">
                    Promo
                </th>
                <th scope="col" class="py-3 px-6">
                    Category
                </th>
                <th scope="col" class="py-3 px-6">
                    Price
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Apple MacBook Pro 17"
                </th>
                <td class="py-4 px-6">
                    Sliver
                </td>
                <td class="py-4 px-6">
                    Laptop
                </td>
                <td class="py-4 px-6">
                    $2999
                </td>
                <td class="py-4 px-6">
                    <a href="/promo_edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                        <span class="pl-3">
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                        </span>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
    
@endsection