<!DOCTYPE html>
<html lang="lv">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>{{ $title ?? 'My App' }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
@include('components.sidebar')
<aside class="sidebar">

</aside>

  <div class="container">

    <header class="item-a site-header">
      <h1>{{ $title ?? 'Produktu saraksts' }}</h1>
    </header>

    @include('components.navigation')

    <main class="item-b main-content">
      {{ $slot }}
    </main>



    <footer class="item-d site-footer">
      &copy; {{ date('Y') }} My App
    </footer>

  </div>

</body>
</html>
