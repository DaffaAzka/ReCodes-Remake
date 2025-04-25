<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recodes Remake</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <style>

        .pattern-bg {
            background-image: none;
        }

        @media (max-width: 766px) {
            .pattern-bg {
                background-image: url("{{ asset('storage/pattern.jpg') }}");
            }
        }

    </style>
</head>
<body class="bg-gray-100 dark:bg-neutral-900">

    @if (!request()->is('login') && !request()->is('register')  && !request()->is('/') && !request()->is('register')  && !request()->is('verify'))
    <livewire:navbar />
    @endif


    {{ $slot }}

</body>
</html>
