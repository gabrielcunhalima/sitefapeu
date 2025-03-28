<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

  <!-- jQuery and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Bootstrap and Icons -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
  <!-- Custom CSS -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="shortcut icon" href="{{ asset('images/fapeu_ico.ico') }}">

  <!--Acessibilidade -->
  <script src="https://cdn.userway.org/widget.js" data-account="YinJfS8smr"></script>


  <title>@yield('title')</title>
</head>

<style>
  .navbar-toggler {
    border: none;
    background-color: transparent;
  }

  a {
    text-decoration: none !important;
  }

  /* Link Hover */
  .link-hover {
    transition: transform 0.3s ease, background-color 0.3s ease;
  }

  .link-hover:hover {
    transform: translateY(-10px);
    background-color: #0F4B2F;
  }
</style>

<body>

  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-custom font-montserrat">
      <div class="container">
        <div class="logofapeu">
          <a class="navbar-brand logofapeu" href="{{ route('homepage.home') }}">
            <img src="/images/logo2branca.png" alt="Logo Fapeu" height="110">
          </a>
        </div>
    </nav>
  </header>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <main class="pt-4">
    @yield('conteudo')
  </main>
  <div class="pt-5">
    @include('layout.footer')
  </div>


  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script> -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

</body>

</html>