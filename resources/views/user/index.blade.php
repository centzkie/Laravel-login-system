@include('partial.header')
<?php $array = array ('title' =>'Customer System')?>
<x-nav :data="$array"/>

<header class="max-w-lg mx-auto mt-5">
    <a href="#">
        <h1 class= "text-4xl font-bold text-black text-center"> Customer List </h1>
    </a>
</header>
<section mt-5>
    <div class= "overflow-x-auto relative">
        <table class="w-96 mx-auto text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th class="py-2 px-6" scope = "col">
                        ID
                    </th>
                    <th class="py-2 px-6" scope = "col">
                        name
                    </th>
                    <th class="py-2 px-6" scope = "col">
                        email name
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                <tr class="bg-gray-300 boarder-b text-black">
                    <td class= "py-2 px-6">
                        {{$item->id}}
                    </td>
                    <td class= "py-2 px-6">
                        {{$item->name}}
                    </td>
                    <td class= "py-2 px-6">
                        {{$item->email}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@include('partial.footer')