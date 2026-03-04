function login(){
    const usuario = document.getElementById("usuario").value;
    const senha = document.getElementById("senha").value;

    if(usuario === "admin" && senha === "admin123"){
        alert("Login realizado com sucesso!");
        window.location.href = "index.html"; // Redireciona para a página principal
    } else {
        alert("Usuário ou senha incorretos. Tente novamente.");
    } 
}

function logout(){
    localStorage.removeItem("usuarioLogado");
    location.realod();
}

if (localStorage.getItem('logado') === 'true') {
    document.getElementById('loginSection').style.display = 'none';
    document.getElementById('logoutSection').style.display = 'block';
}
