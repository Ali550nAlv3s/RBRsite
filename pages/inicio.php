<?php
 $tituloPagina = "Tela Inicial";
require_once '../body/head.php';
require_once '../body/header.php';
require_once '../config/conn.php';
?>

<main>
  <div class="container py-4">

    <!-- TOP BAR: usuário + notificações -->
    <div class="d-flex align-items-center justify-content-between mb-4">
      <div class="d-flex align-items-center gap-3">
        <div class="avatar-circle">
          <svg viewBox="0 0 24 24" fill="#cccccc" width="42" height="42">
            <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/>
          </svg>
        </div>
        <div>
          <div class="fw-semibold text-white">Bem Vindo</div>
          <div class="text-secondary small">@nome do usuário</div>
          <div class="text-secondary small">(cargo)</div>
        </div>
      </div>

      <div class="text-center" style="cursor:pointer">
        <div class="fw-bold" style="color:#cc1111; font-size:1rem;">+100</div>
        <div class="notif-icon">
          <svg viewBox="0 0 24 24" fill="#333" width="22" height="22">
            <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
          </svg>
        </div>
      </div>
    </div>

    <!-- TOOLBAR -->
    <div class="d-flex align-items-center justify-content-end gap-2 mb-3">
      <button class="tool-btn btn-minus" title="Remover">
        <svg width="15" height="15" viewBox="0 0 16 16" fill="none">
          <line x1="3" y1="8" x2="13" y2="8" stroke="#555" stroke-width="2.5" stroke-linecap="round"/>
        </svg>
      </button>
      <button class="tool-btn btn-close-custom" title="Fechar">
        <svg width="15" height="15" viewBox="0 0 16 16" fill="none">
          <line x1="4" y1="4" x2="12" y2="12" stroke="#cc1111" stroke-width="2.5" stroke-linecap="round"/>
          <line x1="12" y1="4" x2="4" y2="12" stroke="#cc1111" stroke-width="2.5" stroke-linecap="round"/>
        </svg>
      </button>
      <button class="tool-btn btn-plus" title="Adicionar">
        <svg width="15" height="15" viewBox="0 0 16 16" fill="none">
          <line x1="8" y1="3" x2="8" y2="13" stroke="#22aa22" stroke-width="2.5" stroke-linecap="round"/>
          <line x1="3" y1="8" x2="13" y2="8" stroke="#22aa22" stroke-width="2.5" stroke-linecap="round"/>
        </svg>
      </button>
      <button class="tool-btn btn-search" title="Buscar">
        <svg width="15" height="15" viewBox="0 0 16 16" fill="none">
          <circle cx="6.5" cy="6.5" r="4" stroke="#555" stroke-width="2"/>
          <line x1="9.5" y1="9.5" x2="13" y2="13" stroke="#555" stroke-width="2.5" stroke-linecap="round"/>
        </svg>
      </button>
      <input type="text" class="form-control search-bar-inicio" placeholder="Buscar processo...">
    </div>

    <!-- PAINEL DE PROCESSOS -->
    <div class="painel-processos">
      <div class="d-flex flex-wrap gap-3">

        <div class="card-processo">
          <div class="sos-wrap">
            <div class="sos-btn">SOS</div>
          </div>
          <div class="processo-id">BR251313112</div>
          <div class="processo-natureza">Natureza</div>
        </div>

        <div class="card-processo">
          <div class="sos-wrap">
            <div class="sos-btn">SOS</div>
          </div>
          <div class="processo-id">1214039</div>
          <div class="processo-natureza">Natureza</div>
        </div>

        <div class="card-processo">
          <div class="sos-wrap">
            <div class="sos-btn">SOS</div>
          </div>
          <div class="processo-id">1520261031</div>
          <div class="processo-natureza">Natureza</div>
        </div>

        <div class="card-processo">
          <div class="sos-wrap">
            <div class="sos-btn">SOS</div>
          </div>
          <div class="processo-id">1520263031</div>
          <div class="processo-natureza">Natureza</div>
        </div>

      </div>
    </div>

  </div>
</main>

<style>
  /* Avatar */
  .avatar-circle {
    width: 70px; height: 70px;
    border-radius: 50%;
    background: #2a2a2a;
    border: 3px solid #555;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
  }

  /* Notificação */
  .notif-icon {
    width: 42px; height: 42px;
    background: #bbb; border-radius: 8px;
    border: 2px solid #999;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto;
  }

  /* Botões toolbar */
  .tool-btn {
    width: 34px; height: 34px;
    border-radius: 50%;
    border: 2px solid #aaa;
    background: #c0c0c0;
    display: flex; align-items: center; justify-content: center;
    cursor: pointer;
    box-shadow: 2px 2px 4px rgba(0,0,0,0.2), -1px -1px 3px rgba(255,255,255,0.4);
    transition: all 0.15s;
    padding: 0;
  }
  .tool-btn:hover { background: #b0b0b0; transform: scale(1.05); }

  /* Search bar toolbar */
  .search-bar-inicio {
    max-width: 380px;
    height: 34px;
    background: #d8d8d8;
    border: 1px solid #aaa;
    border-radius: 6px;
    font-size: 0.82rem;
    box-shadow: inset 1px 1px 3px rgba(0,0,0,0.1);
    color: #222;
  }
  .search-bar-inicio:focus {
    background: #d0d0d0;
    border-color: #888;
    box-shadow: inset 1px 1px 3px rgba(0,0,0,0.15);
  }

  /* Painel */
  .painel-processos {
    background: #888;
    border-radius: 12px;
    padding: 1.4rem;
    box-shadow: inset 0 2px 8px rgba(0,0,0,0.2), 0 2px 4px rgba(0,0,0,0.15);
    min-height: 200px;
  }

  /* Card de processo */
  .card-processo {
    background: #c0c0c0;
    border-radius: 14px;
    width: 155px;
    padding: 1rem 0.8rem;
    display: flex; flex-direction: column; align-items: center; gap: 0.75rem;
    box-shadow: 3px 3px 8px rgba(0,0,0,0.3), -1px -1px 4px rgba(255,255,255,0.3);
    border: 1px solid #b0b0b0;
    cursor: pointer;
    transition: transform 0.15s;
    animation: fadeUp 0.4s ease both;
  }
  .card-processo:hover { transform: translateY(-3px); }

  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(14px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  .card-processo:nth-child(1) { animation-delay: 0.05s; }
  .card-processo:nth-child(2) { animation-delay: 0.12s; }
  .card-processo:nth-child(3) { animation-delay: 0.19s; }
  .card-processo:nth-child(4) { animation-delay: 0.26s; }

  /* SOS */
  .sos-wrap {
    position: relative;
    width: 90px; height: 90px;
  }
  .sos-wrap::before {
    content: '';
    position: absolute;
    inset: -4px;
    border-radius: 50%;
    background: radial-gradient(circle at 35% 30%, #aaa, #777);
    box-shadow: 2px 2px 6px rgba(0,0,0,0.4), -1px -1px 3px rgba(255,255,255,0.2);
  }
  .sos-btn {
    position: relative; z-index: 1;
    width: 90px; height: 90px;
    border-radius: 50%;
    background: radial-gradient(circle at 38% 32%, #ee3333, #cc1111 45%, #991010);
    display: flex; align-items: center; justify-content: center;
    font-family: system-ui, sans-serif;
    font-size: 1.5rem; font-weight: 700;
    color: white; letter-spacing: 0.05em;
    text-shadow: 0 1px 3px rgba(0,0,0,0.5);
    box-shadow:
      inset 0 3px 8px rgba(255,100,100,0.4),
      inset 0 -3px 8px rgba(0,0,0,0.4),
      0 4px 12px rgba(0,0,0,0.5);
    cursor: pointer;
    transition: all 0.12s;
  }
  .sos-btn:hover {
    background: radial-gradient(circle at 38% 32%, #ff5555, #dd1111 45%, #880808);
    box-shadow:
      inset 0 3px 8px rgba(255,120,120,0.5),
      inset 0 -3px 8px rgba(0,0,0,0.5),
      0 6px 18px rgba(180,0,0,0.5);
  }
  .sos-btn:active {
    transform: scale(0.95);
    box-shadow: inset 0 4px 10px rgba(0,0,0,0.5), 0 2px 6px rgba(0,0,0,0.4);
  }

  .processo-id {
    font-size: 0.78rem; font-weight: 600; color: #222; text-align: center;
  }
  .processo-natureza {
    font-size: 0.78rem; color: #444; text-align: center;
  }
</style>


<?php 
 require_once '../body/footer.php';
 require_once '../body/scripts.php';
?>
