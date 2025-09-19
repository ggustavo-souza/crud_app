<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            * {
                font-family: Verdana, Geneva, Tahoma, sans-serif;
            }

            .cardA {
                text-decoration: none;
                color: inherit;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .cardA:hover {
                transform: scale(1.1);
            }
        </style>
    @endif
</head>

<body>
    <main class="container">
        <div class="row justify-content-center mt-5">

            <a href="/products" class="cardA col-md-5 m-3">
                <div class="card shadow shadow-5 align-items-center p-5" style="background-color: #FFD230">
                    <i class="fa-3x fa-solid fa-cart-plus mb-2"></i>
                    <h3>Produtos</h3>
                </div>
            </a>

            <a href="/imoveis" class="cardA col-md-5 m-3">
                <div class="card shadow shadow-5 align-items-center p-5" style="background-color: #FFD230">
                    <i class="fa-3x fa-solid fa-house mb-2"></i>
                    <h3>Imóveis</h3>
                </div>
            </a>

        </div>
    </main>
</body>

</html>