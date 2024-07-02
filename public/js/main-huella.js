let auxMenuShow = false;
let auxSubMenuShow = false;
let auxSubMenuShowPort = false;

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

function viewProyect(proyect) {
    $("#modalLoginProyects").modal("show");
    // window.location.href = `/cliente-${proyect}`;
}

// CREAR FUNCION PARA ENVIAR EL PASSWORD Y VALIDAR SESSION ACTIVA
