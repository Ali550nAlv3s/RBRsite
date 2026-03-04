<?php
 $tituloPagina = "Mapa";
 include 'body/head.php';
 include 'body/header.php';
 include 'conn.php';
?>

<main class="container">
<h2 class="mt-4">Mapa</h2>

<button class="btn btn-secondary mb-3" onclick="abrirMapa()">
    Expandir mapa
</button>

<div class="map-wrapper" id="mapWrapper">
    <button class="btn btn-danger fechar-mapa" onclick="fecharMapa()">✕</button>
    <div id="map"></div>
</div>
</main>

<?php 
 include 'body/footer.php';
 include 'body/scripts.php';
?>
