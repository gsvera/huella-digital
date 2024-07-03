let auxMenuShow = false;
let auxSubMenuShow = false;
let auxSubMenuShowPort = false;

const headConexion = {
    Accept: "application/json",
    "Content-Type": "application/json",
    "X-CSRF-TOKEN": window.CSRF_TOKEN, //the token is create in head html
};

function switchService(btn, idElement) {
    var contentServiceItems = document.querySelectorAll(".content-service");
    var btnService = document.querySelectorAll(".btn-service");

    btnService.forEach(function (item) {
        item.classList.remove("btn-service-selected");
    });

    btn.classList.add("btn-service-selected");

    contentServiceItems.forEach(function (item) {
        var btnIcon = document.getElementById(`${item.id}-icon`);

        if (item.id === idElement) {
            item.classList.remove("d-none");
            btnIcon?.setAttribute("src", btnIcon.src.replace("black", "pink"));
        } else {
            btnIcon?.setAttribute("src", btnIcon.src.replace("pink", "black"));
            item.classList.add("d-none");
        }
    });
}

function showMenuMobile(element) {
    var btnContactMobile = document.getElementById("btn-contact-mobile");
    var menuMobile = document.getElementById("menu-mobile");
    var imgButton = element.getElementsByTagName("img");
    var subMenuMobile = document.getElementById("sub-menu-mobile");
    var subMenuMobilePort = document.getElementById("sub-menu-mobile-port");
    var imgSubButton = document.getElementById("btn-submenu-arrow");
    var imgSubButtonPort = document.getElementById("btn-submenu-arrow-port");

    if (!auxMenuShow) {
        imgButton[0].setAttribute(
            "src",
            imgButton[0].src.replace("hamburguesa", "close")
        );
        btnContactMobile.classList.add("d-none");
        menuMobile.classList.remove("d-none");
        auxMenuShow = true;
    } else {
        imgButton[0].setAttribute(
            "src",
            imgButton[0].src.replace("close", "hamburguesa")
        );
        imgSubButton.setAttribute(
            "src",
            imgSubButton.src.replace("down", "right")
        );
        imgSubButtonPort.setAttribute(
            "src",
            imgSubButtonPort.src.replace("down", "right")
        );
        btnContactMobile.classList.remove("d-none");
        menuMobile.classList.add("d-none");
        subMenuMobile.classList.add("d-none");
        subMenuMobilePort.classList.add("d-none");
        auxMenuShow = false;
        auxSubMenuShow = false;
        auxSubMenuShowPort = false;
    }
}

function showSubMenuMobile(element) {
    var imgButton = document.getElementById("btn-submenu-arrow");
    var subMenuMobilePort = document.getElementById("sub-menu-mobile");

    if (!auxSubMenuShow) {
        imgButton.setAttribute("src", imgButton.src.replace("right", "down"));
        subMenuMobilePort.classList.remove("d-none");
        auxSubMenuShow = true;
    } else {
        subMenuMobilePort.classList.add("d-none");
        imgButton.setAttribute("src", imgButton.src.replace("down", "right"));
        auxSubMenuShow = false;
    }
}

function showSubMenuMobilePortafolio(element) {
    var imgButtonPort = document.getElementById("btn-submenu-arrow-port");
    var subMenuMobile = document.getElementById("sub-menu-mobile-port");

    if (!auxSubMenuShowPort) {
        imgButtonPort.setAttribute(
            "src",
            imgButtonPort.src.replace("right", "down")
        );
        subMenuMobile.classList.remove("d-none");
        auxSubMenuShowPort = true;
    } else {
        subMenuMobile.classList.add("d-none");
        imgButtonPort.setAttribute(
            "src",
            imgButtonPort.src.replace("down", "right")
        );
        auxSubMenuShowPort = false;
    }
}

function generateCurrentDate() {
    var fulldate = new Date();
    var day = fulldate.getDate();
    var month = fulldate.getMonth() + 1;
    var year = fulldate.getFullYear();

    if (day < 10) day = "0" + day;

    if (month < 10) month = "0" + month;

    return year + "-" + month + "-" + day;
}

function viewProyect(proyect) {
    if (sessionStorage.getItem("permission-proyect"))
        validExpiredToken(proyect);
    else {
        $("#id-proyect").val(proyect);
        $("#modalLoginProyects").modal("show");
    }
}

function sendPassProyect() {
    var objPassword = {
        token: $("#password").val(),
        currentDate: generateCurrentDate(),
    };
    fetch(`/valid-password`, {
        method: "POST",
        headers: headConexion,
        body: JSON.stringify(objPassword),
    })
        .then((res) => res.json())
        .then((result) => {
            if (!result.error) {
                sessionStorage.setItem("permission-proyect", result.data.token);
                window.location.href = `/cliente-${$("#id-proyect").val()}`;
            } else {
                $("#error-text").text(result.message);
            }
        });
}

function validExpiredToken(proyect) {
    var objPassword = {
        token: sessionStorage.getItem("permission-proyect"),
        currentDate: generateCurrentDate(),
    };

    fetch(`/valid-password`, {
        method: "POST",
        headers: headConexion,
        body: JSON.stringify(objPassword),
    })
        .then((res) => res.json())
        .then((result) => {
            if (result.error) {
                sessionStorage.removeItem("permission-proyect");
                window.location.href = "/";
            }
            if (proyect !== undefined) {
                window.location.href = `/cliente-${proyect}`;
            }
        });
}
