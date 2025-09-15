<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Reservar Mesa - Savor Bistrô</title>

  @vite(['resources/css/reserva.css', 'resources/js/reserva.js'])
  {{-- Se preferir, mova o @vite do JS para o final do body, ou apenas mantenha e use DOMContentLoaded no JS (abaixo) --}}
</head>
<body>
  <header class="topbar">
    <div class="logo">☰ <strong>SAVOR BISTRÔ</strong></div>
  </header>

  <main class="container">
    <section class="reserva-box">
      <h1>Reservar mesa</h1>

      <div class="reserva-content">
        <form id="reserva-form">
          <input type="text" name="nome" placeholder="Nome" required>
          <input type="text" name="telefone" placeholder="Telefone de contato" required>
          <input type="date" name="data" required>
          <input type="time" name="hora" required>
          <input type="number" name="pessoas" placeholder="Número de pessoas" required>
          <input type="hidden" name="mesa" id="mesa-input">
          <button type="submit">Confirmar reserva</button>
        </form>

        <div class="mapa">
            <p>Escolha sua(s) Mesa(s) no Mapa</p>
            <div class="restaurant" id="restaurant"></div>
          </div>
          
          {{-- Injetando mesas ocupadas vindas do banco --}}
          <script>
            window.ocupadasFromServer = @json($ocupadas ?? []);
          </script>
          
      </div>
    </section>
  </main>
</body>
</html>
