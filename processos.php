<?php
 $tituloPagina = "Processos";
 include 'body/head.php';
 include 'body/header.php';
 include 'conn.php';
?>

<main>
  <div class="container px-3 py-4">

    <!-- TOOLBAR -->
    <div class="d-flex align-items-center justify-content-between mb-3">
      <span class="titulo-painel">Processos Fechados/Em alerta/Concluído</span>
      <div class="d-flex align-items-center gap-2">
        <button class="tool-btn" title="Remover">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none">
            <line x1="3" y1="8" x2="13" y2="8" stroke="#555" stroke-width="2.5" stroke-linecap="round"/>
          </svg>
        </button>
        <button class="tool-btn" title="Fechar">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none">
            <line x1="4" y1="4" x2="12" y2="12" stroke="#000000" stroke-width="2.5" stroke-linecap="round"/>
            <line x1="12" y1="4" x2="4" y2="12" stroke="#000000" stroke-width="2.5" stroke-linecap="round"/>
          </svg>
        </button>
        <button class="tool-btn" title="Adicionar">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none">
            <line x1="8" y1="3" x2="8" y2="13" stroke="#22aa22" stroke-width="2.5" stroke-linecap="round"/>
            <line x1="3" y1="8" x2="13" y2="8" stroke="#22aa22" stroke-width="2.5" stroke-linecap="round"/>
          </svg>
        </button>
        <button class="tool-btn" title="Buscar">
          <svg width="15" height="15" viewBox="0 0 16 16" fill="none">
            <circle cx="6.5" cy="6.5" r="4" stroke="#555" stroke-width="2"/>
            <line x1="9.5" y1="9.5" x2="13" y2="13" stroke="#555" stroke-width="2.5" stroke-linecap="round"/>
          </svg>
        </button>
        <input type="text" class="form-control search-bar-inicio" placeholder="Buscar processo...">
      </div>
    </div>

    <!-- PAINEL DE PROCESSOS -->
    <div class="painel-processos">
      <div class="d-flex flex-wrap gap-3">

        <!-- Fechado -->
        <div class="card-processo">
          <div class="status-wrap status-fechado">
            <div class="status-icon">
              <svg viewBox="0 0 60 60" width="46" height="46" fill="none">
                <line x1="8" y1="8" x2="52" y2="52" stroke="#000000" stroke-width="9" stroke-linecap="round"/>
                <line x1="52" y1="8" x2="8" y2="52" stroke="#000000" stroke-width="9" stroke-linecap="round"/>
              </svg>
            </div>
          </div>
          <div class="processo-id">BR251313112</div>
          <div class="processo-natureza">Natureza</div>
        </div>

        <!-- Fechado -->
        <div class="card-processo">
          <div class="status-wrap status-fechado">
            <div class="status-icon">
              <svg viewBox="0 0 60 60" width="46" height="46" fill="none">
                <line x1="8" y1="8" x2="52" y2="52" stroke="#000000" stroke-width="9" stroke-linecap="round"/>
                <line x1="52" y1="8" x2="8" y2="52" stroke="#000000" stroke-width="9" stroke-linecap="round"/>
              </svg>
            </div>
          </div>
          <div class="processo-id">1214039</div>
          <div class="processo-natureza">Natureza</div>
        </div>

        <!-- Em Alerta -->
        <div class="card-processo">
          <div class="status-wrap status-alerta">
            <div class="status-icon">
              <svg viewBox="0 0 60 60" width="46" height="46" fill="none">
                <text x="30" y="48" text-anchor="middle" font-size="54" font-weight="900" fill="#1a1a1a" font-family="sans-serif">!</text>
              </svg>
            </div>
          </div>
          <div class="processo-id">1520261031</div>
          <div class="processo-natureza">Natureza</div>
        </div>

        <!-- Concluído -->
        <div class="card-processo">
          <div class="status-wrap status-concluido">
            <div class="status-icon">
              <svg viewBox="0 0 60 60" width="46" height="46" fill="none">
                <polyline points="8,32 24,48 52,14" stroke="white" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </div>
          <div class="processo-id">1520263031</div>
          <div class="processo-natureza">Natureza</div>
        </div>

        <!-- Concluído -->
        <div class="card-processo">
          <div class="status-wrap status-concluido">
            <div class="status-icon">
              <svg viewBox="0 0 60 60" width="46" height="46" fill="none">
                <polyline points="8,32 24,48 52,14" stroke="white" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </div>
          <div class="processo-id">BR251313112</div>
          <div class="processo-natureza">Natureza</div>
        </div>

        <!-- Concluído -->
        <div class="card-processo">
          <div class="status-wrap status-concluido">
            <div class="status-icon">
              <svg viewBox="0 0 60 60" width="46" height="46" fill="none">
                <polyline points="8,32 24,48 52,14" stroke="white" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </div>
          <div class="processo-id">1214039</div>
          <div class="processo-natureza">Natureza</div>
        </div>

        <!-- Concluído -->
        <div class="card-processo">
          <div class="status-wrap status-concluido">
            <div class="status-icon">
              <svg viewBox="0 0 60 60" width="46" height="46" fill="none">
                <polyline points="8,32 24,48 52,14" stroke="white" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </div>
          <div class="processo-id">1520261031</div>
          <div class="processo-natureza">Natureza</div>
        </div>
      </div>
    </div>

  </div>
</main>

<style>
  .titulo-painel {
    font-size: 1rem;
    font-weight: 600;
    color: #222;
  }

  /* Botões toolbar */
  .tool-btn {
    width: 54px; height: 34px;
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

  .search-bar-inicio {
    max-width: 320px;
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
    outline: none;
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

  /* Card */
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
  .card-processo:nth-child(1) { animation-delay: 0.04s; }
  .card-processo:nth-child(2) { animation-delay: 0.08s; }
  .card-processo:nth-child(3) { animation-delay: 0.12s; }
  .card-processo:nth-child(4) { animation-delay: 0.16s; }
  .card-processo:nth-child(5) { animation-delay: 0.20s; }
  .card-processo:nth-child(6) { animation-delay: 0.24s; }
  .card-processo:nth-child(7) { animation-delay: 0.28s; }
  .card-processo:nth-child(8) { animation-delay: 0.32s; }

  /* Status wrap — mesmo padrão do sos-wrap */
  .status-wrap {
    position: relative;
    width: 90px; height: 90px;
  }
  .status-wrap::before {
    content: '';
    position: absolute;
    inset: -4px;
    border-radius: 50%;
    background: radial-gradient(circle at 35% 30%, #aaa, #777);
    box-shadow: 2px 2px 6px rgba(0,0,0,0.4), -1px -1px 3px rgba(255,255,255,0.2);
  }
  .status-icon {
    position: relative; z-index: 1;
    width: 90px; height: 90px;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    cursor: pointer;
    transition: all 0.12s;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0,0,0,0.5);
  }
  .status-icon:hover { filter: brightness(1.12); }
  .status-icon:active { transform: scale(0.95); box-shadow: 0 2px 6px rgba(0,0,0,0.4); }

  .status-fechado .status-icon { background: radial-gradient(circle at 38% 32%, #ff7c7c, #ff0000); }
  .status-alerta .status-icon  { background: radial-gradient(circle at 38% 32%, #ffbb22, #f5a500 50%, #cc8800); }
  .status-concluido .status-icon { background: radial-gradient(circle at 38% 32%, #66ee44, #44cc22 50%, #338811); }

  .processo-id {
    font-size: 0.78rem; font-weight: 600; color: #222; text-align: center;
  }
  .processo-natureza {
    font-size: 0.78rem; color: #444; text-align: center;
  }
</style>


<?php 
 include 'body/footer.php';
 include 'body/scripts.php';
?>
