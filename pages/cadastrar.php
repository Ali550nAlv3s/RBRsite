<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Captura os dados
    $cargo   = $_POST['cargo']    ?? '';
    $setor   = $_POST['setor']    ?? '';
    $cidade  = $_POST['cidade']   ?? '';
    $uf      = $_POST['uf']       ?? '';

    // Decide qual nome salvar
    if (!empty($_POST['nomecompleto'])) {
        $nome_para_banco = $_POST['nomecompleto'];
    } else {
        $nome_para_banco = $_POST['razaosocial'] ?? '';
    }

    // Prepared Statement — protege contra SQL Injection
    $stmt = $conn->prepare("INSERT INTO colaboradores (nome, cargo, setor, cidade, uf) 
                            VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nome_para_banco, $cargo, $setor, $cidade, $uf);

    if ($stmt->execute()) {
        echo "<script>alert('Colaborador cadastrado com sucesso!'); window.location.href='colaboradores.php';</script>";
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}


$tituloPagina = "Cadastrar Colaborador";
include '../body/head.php';
include '../body/header.php';
include '../config/conn.php';

$sql = "SELECT * FROM rbr_colaboradores ORDER BY nome ASC";
$result = $conn->query($sql);
?>

<main class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card bg-dark text-white shadow">
                <div class="card-header border-secondary d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Cadastro de Colaboradores</h3>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input tipo-pessoa" type="radio" name="tipo_pessoa" id="pf" value="PF" checked>
                            <label class="form-check-label" for="pf">PF</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input tipo-pessoa" type="radio" name="tipo_pessoa" id="pj" value="PJ">
                            <label class="form-check-label" for="pj">PJ</label>
                        </div>
                    </div>
                </div>
                <form action="cadastrar.php" method="POST" class="card-body">
                    <div id="campos-pj" style="display: none;">
                        <div class="card-body mb-3">
                            <label class="form-label">Nome Fantasia</label>
                            <input type="text" name="nomefantasia" class="form-control bg-secondary text-white border-0" placeholder="Nome Fantasia">
                        </div>
                        <div class="card-body mb-3">
                            <label class="form-label">Razão Social</label>
                            <input type="text" name="razaosocial" class="form-control bg-secondary text-white border-0" placeholder="Razão social">
                        </div>
                        <div class="card-body mb-3">
                            <label class="form-label">CNPJ</label>
                            <input type="text" name="cpnj" class="form-control bg-secondary text-white border-0" placeholder="00.000.000/0000-00">
                        </div>
                    </div>
                    <div id="campos-pf">
                        <div class="card-body mb-1">
                            <label class="form-label">Nome Completo</label>
                            <input type="text" name="nomecompleto" class="form-control bg-secondary text-white border-0" placeholder="Nome Completo">
                        </div>
                        <div class="card-body mb-1">
                            <label class="form-label"> CPF </label>
                            <input type="text" name="cpf" class="form-control bg-secondary text-white border-0" placeholder="000.000.000-00">
                        </div>
                    </div>

                    <hr class="borded-secondary">

                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Cargo</label>
                            <select name="cargo" class="form-select bg-secondary text-white border-0  mb-3" required>
                                <option value="" selected disabled>Selecione Cargo/Função</option>
                                <option value="Regulador">Regulador</option>
                                <option value="ProntaResposta">Pronta Resposta</option>
                                <option value="Chapa">Chapa</option>
                                <option value="Frete">Frete</option>
                                <option value="Munck">Munck</option>
                                <option value="Vigia">Vigia Armado</option>
                                <option value="Outro">Outro</option>
                            </select>
                            <input type="text" name="cargonome" class="form-control bg-secondary text-white border-0" placeholder="Outro? Descreva..." required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Contatos</label>
                            <input type="text" id="telefone" name="contato" class="form-control bg-secondary text-white border-0 mb-2" placeholder="(00) 00000-0000" required>

                            <input type="text" id="telefone2" name="contato2" class="form-control bg-secondary text-white border-0 mb-2" placeholder="(00) 00000-0000" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label"> E-mail</label>
                            <input type="email" id="email" name="email" class="form-control bg-secondary text-white border-0" placeholder="regular@regularbr.com">
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label class="form-label">Endereço</label>
                                <input id="endereco" type="text" name="endereco" class="form-control bg-secondary text-white border-0">
                            </div>
                            <div class="col-8 col-md-9">
                                <label class="form-label">Cidade</label>
                                <input id="cidade_input" type="text" name="cidade" class="form-control bg-secondary text-white border-0">
                            </div>

                            <div class="col-4 col-md-3 mb-4">
                                <label class="form-label">UF</label>
                                <select id="uf_input" name="uf" class="form-select bg-secondary text-white border-0" required>
                                    <option value="" selected disabled></option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">AP</option>
                                    <option value="AM">AM</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MT">MT</option>
                                    <option value="MS">MS</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP">SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Endereço (Busca Automática)</label>
                                <input type="text" id="endereco_google" name="endereco" class="form-control bg-secondary text-white border-0" placeholder="Rua, número, bairro...">
                            </div>
                            <hr class="borded-secondary">
                            <div class="col-12 mb-4">
                                <div id="map" style="width: 100%; height: 250px; border-radius: 8px; background: #333;"></div>
                            </div>
                            <hr class="borded-secondary">

                            <div class="row">
                            <label class="form-label"> Dados Bancários $ </label>
                            <div class="col-4 col-md-9">
                            <input id="Agencia" name="agencia" type="text" class=" mb-3 form-control bg-secondary text-white border-0">
                            </div>
                            <div class="col-4 col-md-3 mb-4">
                                <input id="Agencia" name="agencia" type="text" class=" mb-3 form-control bg-secondary text-white border-0">
                            </div>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Cadastrar Colaborador</button>
                            </div>
                            <div>
                                <input type="hidden" id="endereco_lat" name="endereco_lat">
                                <input type="hidden" id="endereco_lng" name="endereco_lng">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
</main>



<?php
include '../body/footer.php';
include '../body/scripts.php';
?>