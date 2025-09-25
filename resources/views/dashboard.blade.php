<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
                <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="row justify-content-center mt-5">

                        <a href="/products" class="cardA col-md-5 m-3">
                            <div class="card shadow shadow-5 align-items-center p-5" style="background-color: #FFD230">
                                <i class="fa-3x fa-solid fa-cart-plus mb-2"></i>
                                <h3>Produtos</h3>
                            </div>
                        </a>

                        <a href="/imovels" class="cardA col-md-5 m-3">
                            <div class="card shadow shadow-5 align-items-center p-5" style="background-color: #FFD230">
                                <i class="fa-3x fa-solid fa-house mb-2"></i>
                                <h3>Imóveis</h3>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
        </h2>
    </x-slot>


</x-app-layout>