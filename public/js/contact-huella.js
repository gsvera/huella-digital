const canvas = document.getElementById("captchaCanvas");
const ctx = canvas.getContext("2d");
const captchaInput = document.getElementById("captchaInput");
const refreshButton = document.getElementById("refreshCaptcha");
const errorCaptcha = document.getElementById("error-captcha");
const btnSendMessage = document.getElementById("btn-send-message");
let drcp = document.getElementById("drcp");

function generateCaptcha() {
    const chars =
        "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    let captcha = "";
    for (let i = 0; i < 6; i++) {
        captcha += chars.charAt(Math.floor(Math.random() * chars.length));
    }
    return captcha;
}

function drawCaptcha() {
    let currentCaptcha = generateCaptcha();
    drcp.setAttribute("data-value", currentCaptcha);
    // Limpiar el canvas
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // Fondo del canvas
    ctx.fillStyle = "#f0f0f0";
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    // Configurar estilo de texto
    ctx.font = "30px Arial";
    ctx.fillStyle = "#000";

    // Dibujar el texto del CAPTCHA con algo de distorsión
    for (let i = 0; i < currentCaptcha.length; i++) {
        const char = currentCaptcha[i];
        const x = 20 + i * 20;
        const y = 30 + Math.random() * 10; // Distorsión en la altura
        ctx.save();
        ctx.translate(x, y);
        ctx.rotate((Math.random() - 0.5) * 0.4); // Rotación aleatoria
        ctx.fillText(char, 0, 0);
        ctx.restore();
    }

    for (let i = 0; i < 5; i++) {
        ctx.strokeStyle = `rgba(0,0,0,${Math.random()})`;
        ctx.beginPath();
        ctx.moveTo(Math.random() * canvas.width, Math.random() * canvas.height);
        ctx.lineTo(Math.random() * canvas.width, Math.random() * canvas.height);
        ctx.stroke();
    }
}

drawCaptcha();

refreshButton.addEventListener("click", () => {
    drawCaptcha();
    errorCaptcha.textContent = "";
    captchaInput.value = "";
});

function sendBoxContact() {
    var formContact = document.getElementById("form-contact");
    btnSendMessage.setAttribute("disabled", true);
    if (drcp.getAttribute("data-value") !== captchaInput.value) {
        errorCaptcha.textContent = "CAPTCHA incorrecto. Intente nuevamente.";
        drawCaptcha();
        btnSendMessage.removeAttribute("disabled");
        return;
    }
    formContact.submit();
}
