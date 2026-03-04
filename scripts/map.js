let map;

function abrirMapa() {
    document.getElementById("mapWrapper").classList.add("expandido");

    // Força o mapa a recalcular o tamanho após a animação de abrir
    setTimeout(() => {
        google.maps.event.trigger(map, "resize");
        // Opcional: centralizar em um local específico ao abrir
    }, 300);
}

function fecharMapa() {
    document.getElementById("mapWrapper").classList.remove("expandido");
}

function initMap() {
    // Ponto central inicial (ex: São Paulo ou Brasília)
    const centro = { lat:  -16.402211217222483, lng: -54.89779586228801 };

    // Inicializa o mapa
    map = new google.maps.Map(document.getElementById("map"), {
        center: centro,
        zoom: 4.2,
        mapTypeId: 'hybrid', // <--- MÁGICA AQUI: Força o modo Satélite
        mapTypeControl: true,    // Permite ao usuário trocar de volta se quiser
    });
}