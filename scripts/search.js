document.querySelectorAll('.tipo-pessoa').forEach((radio) => {
    radio.addEventListener('change', function() {
        const camposPF = document.getElementById('campos-pf');
        const camposPJ = document.getElementById('campos-pj');

        if (camposPF && camposPJ) { // Verifica se os elementos existem
            if (this.value === 'PF') {
                camposPF.style.display = 'block';
                camposPJ.style.display = 'none';
            } else {
                camposPF.style.display = 'none';
                camposPJ.style.display = 'block';
            }
        }
    });
});

if (telefone) { // Só executa se o campo existir na página
    tel.addEventListener('input', (e) => {
        let value = e.target.value.replace(/\D/g, ""); // Remove tudo que não é número
        let formattedValue = "";

        if (value.length > 0) {
            formattedValue = "(" + value.substring(0, 2);
            if (value.length > 2) {
                formattedValue += ") " + value.substring(2, 7);
            }
            if (value.length > 7) {
                formattedValue += "-" + value.substring(7, 11);
            }
        }
        
        e.target.value = formattedValue;
    });
}

const mobileMenu = document.querySelector('.mobile-menu');
const navList = document.querySelector('.nav-list');

mobileMenu.addEventListener('click', () => {
    // Alterna a classe active no menu e na lista
    navList.classList.toggle('active');
    mobileMenu.classList.toggle('active');
});