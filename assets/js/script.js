// login button
const login_btn = document.getElementById('btn-login');

//contenedor del login
const login_form = document.getElementById('login-form-container');

// boton para cerrar el formulario
const close_login_form = document.getElementById('form_btn-close');

// mostar formulario de login
login_btn.addEventListener('click', () => {
    login_form.style.display = 'grid';
});

//ocultar formulario
close_login_form.addEventListener('click', () => {
    login_form.style.display = 'none'; 
});

// desactivar boton
// checkbox
const chk_terminos = document.getElementById('terminos');
const chk_politica = document.getElementById('politica');

// boton
const btn_register = document.getElementById('btn-register');

const validar_chks = (chk1, chk2) => {
    if(chk1.checked && chk2.checked){
        btn_register.style.opacity = '1';
        btn_register.disabled = false;
    }else{
        btn_register.style.opacity = '.6';
        btn_register.disabled = true;
    }
}

chk_terminos.addEventListener('change', () =>{
    validar_chks(chk_terminos, chk_politica);
});

chk_politica.addEventListener('change', ()=> {
    validar_chks(chk_politica, chk_terminos);
});