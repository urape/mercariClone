<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mercari Clone</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body class="r">
    @include('layoutes.header')
    <main>
        @yield('content')
    </main>
    <a href="./sell"">
        <div class=" text-white rounded-circle p-3 text-center exhibit" style="width: 160px;height: 160px;">
        <div class="mt-3">SELL</div>
        <svg aria-hidden="true" width="60" height="60" viewBox="0 0 18 16" class="">
            <path fill="currentColor" fill-rule="nonzero"
                d="M6.3 0L4.653 1.778H1.8c-.99 0-1.8.8-1.8 1.778v10.666C0 15.2.81 16 1.8 16h14.4c.99 0 1.8-.8 1.8-1.778V3.556c0-.978-.81-1.778-1.8-1.778h-2.853L11.7 0H6.3zM9 13.333c-2.484 0-4.5-1.99-4.5-4.444 0-2.453 2.016-4.445 4.5-4.445s4.5 1.992 4.5 4.445c0 2.453-2.016 4.444-4.5 4.444zm0-1.6c1.59 0 2.88-1.273 2.88-2.844S10.59 6.044 9 6.044c-1.59 0-2.88 1.274-2.88 2.845 0 1.57 1.29 2.844 2.88 2.844z">
            </path>
        </svg>
        </div>
    </a>
    @include('layoutes.footer')
    <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>