const themeButton = document.getElementById("theme-toggle");

themeButton.addEventListener("click", function () {
    document.body.classList.toggle("dark-mode");
});

const menuButton = document.getElementById("menu-toggle");
const navLinks = document.querySelector(".nav-links");

menuButton.addEventListener("click", function () {
    navLinks.classList.toggle("active");
});

const formulario = document.querySelector("#form-contacto");
const aviso = document.querySelector("#aviso-contacto");

function revisarFormulario(event) {

    event.preventDefault();

    const nombre = document.querySelector("#name").value;
    const correo = document.querySelector("#email").value;
    const mensaje = document.querySelector("#message").value;
    if (nombre === "") {
        aviso.textContent = "Por favor ingrese su nombre.";
        aviso.classList.add("error");
        aviso.classList.remove("exito");
    }
    else if (!correo.includes("@")) {
        aviso.textContent = "Ingrese un correo electrónico válido.";
        aviso.classList.add("error");
        aviso.classList.remove("exito");
    }
    else if (mensaje === "") {
        aviso.textContent = "Por favor escriba su mensaje.";
        aviso.classList.add("error");
        aviso.classList.remove("exito");
    }
    else {
        aviso.textContent =
        "✔ Gracias por contactarnos. Su solicitud fue enviada correctamente.";
        aviso.classList.add("exito");
        aviso.classList.remove("error");
        formulario.reset();
    }
}
formulario.addEventListener("submit", revisarFormulario);
