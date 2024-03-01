const formLogin = document.getElementById('formLogin');
const formRecupera = document.getElementById('formRecupera');
const formCadastro = document.getElementById('formCadastro');

function mostrarElemento(elemento) {
    elemento.style.display = "block";
}

function esconderElemento(elemento) {
    elemento.style.display = "none";
}

document.getElementById('btnEsqueciSenha').addEventListener('click', function (e) {
    e.preventDefault();

    esconderElemento(formLogin);
    mostrarElemento(formRecupera);
});

document.getElementById("btnVoltarLogin").addEventListener('click', (e)=>{
    e.preventDefault();

    esconderElemento(formRecupera);
    mostrarElemento(formLogin);
});

document.getElementById("btnCadastro").addEventListener('click', (e) =>{
    e.preventDefault();

    esconderElemento(formLogin);
    mostrarElemento(formCadastro);
});

document.getElementById('btnLogin').addEventListener('click', (e) => {
    e.preventDefault();
    
    esconderElemento(formCadastro);
    mostrarElemento(formLogin);
});
