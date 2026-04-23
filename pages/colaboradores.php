<?php
 $tituloPagina = "Colaboradores";
 include '../body/head.php';
 include '../body/header.php';
 include '../config/conn.php';

 $sql = "SELECT * FROM rbr_colaboradores ORDER BY nome ASC";
 $result = $conn->query($sql);
?>

<main class="container py-5">
    <div class="row mb-5 align-items-center">
        <div class="col-md-6">
            <h2 class="display-6 fw-bold">Colaboradores</h2>
            <p class="text-muted">Buscar por Colaboradores:</p>
        </div>
        <div class="col-md-6">
            <div class="input-group shadow-sm">
                <a href="cadastrar.php" class="btn btn-primary">Cadastrar</a>                
                <button class="btn btn-primary" href="cadastrar.php">Buscar</button>
                <span class="input-group-text bg-white border-end-0">
                    <i class="bi bi-search"></i> </span>
                <input type="text" id="inputBusca" class="form-control border-start-0" placeholder="Digite um Nome, Cargo ou Cidade...">
            </div>
        </div>
    </div> 
    
    <div class="container-colaboradores">
        <?php
        if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                ?>
                <div class="card-colaborador">
                    <div class="foto-perfil">
                        <img src="images/users/usuario-padrao.png" alt="Foto de <?php echo $row['nome']; ?>">
                    </div>
                    <div class="info-colaborador">
                        <h3><?php echo $row['nome']; ?></h3>
                        <h5 class="nome-colaborador"><?php echo $row['nome']; ?></h5>
                        <p class="cargo-colaborador"><?php echo $row['cargo']; ?></p>
                        <p class="cidade-colaborador"><i class="bi bi-geo-alt"></i> <?php echo $row['cidade']; ?></p>
                        
                    </div>
                    <button class="btn-detalhes"> Ver Detalhes </button>
                </div>
                <?php
            }
        } else {
            echo "<p class='alert alert-info'>Nenhum colaborador encontrado.</p></div>";
        }
        ?>
    </div>
    </main>

<?php 
 include '../body/footer.php';
 include '../body/scripts.php';
?>
