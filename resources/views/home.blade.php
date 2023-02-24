<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
<div class="w-100 my-8 h-36 bg-blue-900">
    <h3 class="p-4 inline-block text-1xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200">MedWarden — вебдодаток для визначення проблем зі здоров’ям</h1>
    <img class="w-60 inline-block" src="{{ asset('storage/image/doctors.png') }}" alt="">   
</div>

<p class="mt-2 w-1/3 m-9 pl-2 border-l-double border-red-700 border-l-8 rounded-sm text-justify text-lg text-slate-700">“MedWarden” – це зручний інструмент, призначення якого вивявляти проблеми зі здоров’ям у пацієнтів. У сервісі передбачено дві можливості – пацієнт може самостій пройти тест для визначення діагнозу, або зв’язатися із медичним експертом, який сам поставить попередній діагноз.</p>
</x-app-layout>
