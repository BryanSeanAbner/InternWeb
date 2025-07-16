<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Halaman Home</title>
    <style>
    html, body, main, .container, .min-h-full, .content, section, div {
        background: transparent !important;
    }
    </style>
</head>
<body class="h-full">

<div style="min-height:100vh; background: linear-gradient(135deg, #003B99 0%, #003B99 80%, #37FFA9 80%, #37FFA9 100%);">
  <div>
    <x-header>{{ $title }}</x-header>
    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        {{ $slot}}
      </div>
    </main>
  </div>
</div>

</body>
</html>