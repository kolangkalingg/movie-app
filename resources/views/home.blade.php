<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie App</title>
    @vite('resources/css/app.css')
</head>

<body>

    <div class="w-full h-auto min-h-screen flex flex-col">
        {{-- header section --}}
        @include('navigasi')
        {{-- end header section --}}

        {{-- banner section --}}
        <div class="w-full h-[512px] flex flex-col relative bg-black">
            {{-- banner image section --}}
            <div class="flex flex-row items-center w-full relative slide">
                <img src="https://placeholder.com/960x540" class="absolute w-full h-full object-cover"
                    alt="">
                <div class="w-full h-full absolute bg-black bg-opacity-40"></div>
            </div>
            {{-- end image section --}}
        </div>
        {{-- end banner section --}}
    </div>
</body>

</html>
