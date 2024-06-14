if(screen.width < 520){
    // CONTROL OF SLIDER SERVICES VIEW MOBILE
    const carruselMobile = document.getElementById('carrusel')
    let itemCarrusel = document.querySelectorAll('.carrusel-contain-item'),
    itemCarruselLast = itemCarrusel[itemCarrusel.length -1],
    x1,
    x2
    
    carruselMobile.insertAdjacentElement('afterbegin',itemCarruselLast)
    
    carruselMobile.addEventListener('touchstart',function(e){
        let touch = e.changedTouches[0]
        x1 = parseInt(touch.clientX)
        
    })
    carruselMobile.addEventListener('touchend', function(e){
        let touch = e.changedTouches[0]
        x2 = parseInt(touch.clientX)  
        if(x1 > x2){
            itemCarrusel = document.querySelectorAll('.carrusel-contain-item')[0]
            carruselMobile.style.marginLeft = "-75%"
            carruselMobile.style.transition = "all .5s"
            setTimeout(function(){
                carruselMobile.style.marginLeft = "-25%"
                carruselMobile.style.transition = "none"
                carruselMobile.insertAdjacentElement('beforeend',itemCarrusel)
            },500)
        } else if(x1 < x2){
            itemCarrusel = document.querySelectorAll('.carrusel-contain-item')
            itemCarruselLast = itemCarrusel[itemCarrusel.length -1]
            carruselMobile.style.marginLeft = "+25%"
            carruselMobile.style.transition = "all .5s"
            setTimeout(function(){
                carruselMobile.style.marginLeft = "-25%"
                carruselMobile.style.transition = "none"
                carruselMobile.insertAdjacentElement('afterbegin',itemCarruselLast)
            },500)
        }
    })

    //CONTROL OF SLIDER CLIENT VIEW MOBILE
    const contClient = document.getElementById('cont-client')
    let itemClient = document.querySelectorAll('.item-client'),
    itemClientLast = itemClient[itemClient.length -1],
    xClient, xClient2

    if(contClient){
        contClient.insertAdjacentElement('afterbegin',itemClientLast)

        contClient.addEventListener('touchstart', function(e){
            let touchClient = e.changedTouches[0]
            xClient = parseInt(touchClient.clientX)    
        })
        contClient.addEventListener('touchend', function(e){
            let touchClient = e.changedTouches[0]
            xClient2 = parseInt(touchClient.clientX)
            if(xClient > xClient2){
                itemClient = document.querySelectorAll('.item-client')[0]
                contClient.style.marginLeft = "-100%"
                contClient.style.transition = "all .5s"
                setTimeout(function(){
                    contClient.style.marginLeft = "0"
                    contClient.style.transition = "none"
                    contClient.insertAdjacentElement('beforeend',itemClient)
                },500)
            }else if(xClient < xClient2){
                itemClient = document.querySelectorAll('.item-client')
                itemClientLast = itemClient[itemClient.length -1]
                contClient.style.marginLeft = "+100%"
                contClient.style.transition = "all .5s"
                setTimeout(function(){
                    contClient.style.marginLeft = "0"
                    contClient.style.transition = "none"
                    contClient.insertAdjacentElement('afterbegin',itemClientLast)
                },500)
            }
        })
        setInterval(function(){
            itemClient = document.querySelectorAll('.item-client')[0]
            contClient.style.marginLeft = "-100%"
            contClient.style.transition = "all .5s"
            setTimeout(function(){
                contClient.style.marginLeft = "0"
                contClient.style.transition = "none"
                contClient.insertAdjacentElement('beforeend',itemClient)
            },500)
        },5000)
    }

    // SCRIPT FOR ADVANTAJE
    const advantajeCont = document.getElementById('bkg-advantage-mob')
    
    let advantage = document.querySelectorAll('.itemAdv'),
    advantageText = document.querySelectorAll('.text-advantage-mob')

    window.addEventListener('scroll', function(){
        
        let screenDoc = document.documentElement.scrollTop
        
        for(let i = 0; i< advantage.length; i++){
            let higthAdvantage = advantage[i].offsetTop
            if(higthAdvantage - 400 < screenDoc){
                advantage[i].classList.remove('item-advantage-mob')
                advantage[i].classList.add('item-advantage-mob-active')
                advantageText[i].classList.remove('display-max')
                advantageText[i].classList.add('show-text')
            }else{
                advantage[i].classList.remove('item-advantage-mob-active')
                advantage[i].classList.add('item-advantage-mob')
                advantageText[i].classList.remove('show-text')
                advantageText[i].classList.add('display-max')
            }
        }
    })
}
