const errorCaptcha = document.getElementById("error-captcha");
let drcp = document.getElementById("drcp");
const boxNoBot = document.querySelector(".no-boot");

boxNoBot.addEventListener("click", (e) => {
    e.preventDefault();
    localStorage.removeItem("code");
    const boxButton = document.querySelector(".box-button-capt");
    const uuid = crypto.randomUUID();

    boxButton.classList.add("box-button-capt-select");

    fetch(`/checked-captcha`, {
        method: "POST",
        headers: headConexion,
        body: JSON.stringify({ code: uuid }),
    })
        .then((result) => result.json())
        .then((resp) => {
            if (!resp.error) {
                localStorage.setItem("code", uuid);
            }
        });

    setTimeout(() => {
        deleteCaptcha(uuid);
        boxButton.classList.remove("box-button-capt-select");
    }, 10000);
});

function validTrashCaptcha() {
    const codeCaptcha = localStorage.getItem("code");
    if (codeCaptcha) {
        deleteCaptcha(codeCaptcha);
    }
}

function deleteCaptcha(codeC) {
    fetch(`/remove-checked-captcha`, {
        method: "DELETE",
        headers: headConexion,
        body: JSON.stringify({ code: codeC }),
    })
        .then((result) => result.json())
        .then((resp) => {
            if (!resp.error) {
                localStorage.removeItem("code");
            }
        });
}

function sendBoxContact() {
    var formContact = document.getElementById("form-contact");
    var code = localStorage.getItem("code");

    if (code === null) {
        errorCaptcha.textContent = "CAPTCHA incorrecto. Intente nuevamente.";
        return;
    }
    var hiddenInput = document.createElement("input");
    hiddenInput.type = "hidden";
    hiddenInput.name = "code"; // Nombre del campo que se enviará
    hiddenInput.value = code;
    formContact.appendChild(hiddenInput);
    formContact.submit();
}

$(document).ready(() => {
    validTrashCaptcha();
});
