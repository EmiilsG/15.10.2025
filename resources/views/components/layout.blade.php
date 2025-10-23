<!DOCTYPE html>
<html lang="lv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'My App' }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

  <header class="site-header">
    <div class="container">
      <h1>{{ $title ?? 'Produktu saraksts' }}</h1>
    </div>
  </header>

  @include('components.navigation')

  @if (session('success'))
    <div class="alert-success container">
      {{ session('success') }}
    </div>
  @endif

  <main class="main-content container">
    {{ $slot }}
  </main>

  <footer class="site-footer">
    <div class="container">
      &copy; {{ date('Y') }} My App
    </div>
  </footer>

</body>
</html>
