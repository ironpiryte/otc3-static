<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="{{ asset( 'storage/cyberdefensecenter_favicon.ico' ) }}" />

    <title>{{ isset( $title ) ? $title : 'OTC3 Demo' }}</title>

    <!-- Style Sheets  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <!-- Fonts -->

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>

<main class="pb-1">
    {{ $slot }}
</main>

<footer class="footer footer-center p-5 bg-base-300 text-base-content text-xs">
    <div class="container-fluid">
        <hr />
        <div class="row">
            <div class="col-md">
                <p>Copyright &copy; <span id="current_year"></span> Ryan Reynolds (not the actor)</p>
            </div>
            <div class="col-md footer_contact">
                <p class="mb-0 text-end">Would you like to know more?</p>
                <a class="pagination justify-content-end" href="mailto:ryan.reynolds5@msubillings.edu">Ryan.Reynolds2@oit.edu</a>
            </div>
        </div>
    </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
