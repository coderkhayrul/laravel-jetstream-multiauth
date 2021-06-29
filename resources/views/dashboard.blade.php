<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12 text-center">
        <h1>Hi... I Am You <strong>{{ Auth::user()->name }}</strong></h1>
    </div>
</x-app-layout>
