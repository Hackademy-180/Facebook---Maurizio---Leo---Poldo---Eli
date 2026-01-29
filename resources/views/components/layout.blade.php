<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facebook</title>
    <script src="https://kit.fontawesome.com/cf222a42b2.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@next/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <x-navbar />
    {{$slot}}
    <x-footer />

 <script src="https://cdn.jsdelivr.net/npm/aos@next/dist/aos.js"></script>
  <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
</body>
</html>