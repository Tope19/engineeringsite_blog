var UIController = (function () {
    var DOMstrings = {
        bars: '.hamburger-menu-bar',
        times: '.hamburger-menu-times',
        signin: '.signIn',
        signup: '.signUp',
        signContainer: '.sign--container',
        signIcon: '.fa-lock',
        signIcon2: '.fa-user',
        close: '.cancelIcon',
        signContent: '.sign__box--content',
        signContent2: '.sign__box--content2',
        signBox: '.sign__box',
        check: 'check',
        forms: '.form__input--2',
        gifAnimation: '.sign__gif',
        infoBox: '.section-info',
        infoModal: '.section-info__box',
        openInfo: '.openInfo'
    };

    return {
        getDOMStrings: function () {
            return {
                bars: document.querySelector(DOMstrings.bars),
                times: document.querySelector(DOMstrings.times),
                signin: document.querySelector(DOMstrings.signin),
                signup: document.querySelector(DOMstrings.signup),
                signContainer: document.querySelector(DOMstrings.signContainer),
                signIcon: document.querySelector(DOMstrings.signIcon),
                signIcon2: document.querySelector(DOMstrings.signIcon2),
                signContent: document.querySelector(DOMstrings.signContent),
                signContent2: document.querySelector(DOMstrings.signContent2),
                signBox: document.querySelector(DOMstrings.signBox),
                close: document.querySelectorAll(DOMstrings.close),
                check: document.getElementById(DOMstrings.check),
                forms: document.querySelectorAll(DOMstrings.forms),
                gifAnimation: document.querySelector(DOMstrings.gifAnimation),
                infoBox: document.querySelector(DOMstrings.infoBox),
                infoModal: document.querySelector(DOMstrings.infoModal),
                infoItems: document.querySelectorAll(DOMstrings.openInfo)
            }
        },

        getDOMElement: function () {
            return DOMstrings;
        }
    }
})();


var controller = (function (UIctrl) {
    var DOM = UIctrl.getDOMStrings();

    DOM.bars.addEventListener('click', function () {
        document.getElementById('navBar').style.height = '28rem';
        DOM.bars.style.display = 'none';
        DOM.times.style.display = 'block';
    });

    DOM.times.addEventListener('click', function () {
        document.getElementById('navBar').style.height = '0';
        DOM.times.style.display = 'none';
        DOM.bars.style.display = 'block';
    });

    function openBox() {
        DOM.signContainer.style.visibility = 'visible';
        DOM.signContainer.style.opacity = '1';
        DOM.signBox.style.transform = 'translateX(-50%) scale(1)';
    }

    function infoModal() {
        DOM.infoBox.style.visibility = 'visible';
        DOM.infoBox.style.opacity = '1';
        DOM.infoModal.style.transform = 'translate(-50%, 15%) scale(1)';
    }


    function closeBox() {
        DOM.signContainer.style.visibility = 'hidden';
        DOM.signContainer.style.opacity = '0';
        DOM.signBox.style.transform = 'translateX(-50%) scale(.8)';
        DOM.infoBox.style.visibility = 'hidden';
        DOM.infoBox.style.opacity = '0';
        DOM.infoModal.style.transform = 'translate(-50%, 30%) scale(.8)';
    }

    DOM.check.addEventListener('click', function (event) {
        if (DOM.forms[0].value === "") {
            DOM.forms[0].style.border = "2px solid red";
            event.preventDefault();
        } else if (DOM.forms[1].value === "") {
            DOM.forms[1].style.border = "2px solid red";
            event.preventDefault();
        } else {
            DOM.forms[0].style.border = '1px solid green';
            DOM.forms[1].style.border = '1px solid green';
            DOM.gifAnimation.style.visibility = 'visible';
            DOM.gifAnimation.style.transform = 'scale(1)';
        }
    });

    function moveLeft() {
        DOM.signContent.style.left = '50%';
        DOM.signContent2.style.left = '150%';
    }

    function opacityMove() {
        DOM.signContent.style.left = '-100%';
        DOM.signContent2.style.left = '50%';
        DOM.gifAnimation.style.visibility = 'hidden';
    }

    DOM.signin.addEventListener('click', function () {
        openBox();
        moveLeft();
    });
    DOM.signup.addEventListener('click', function () {
        openBox();
        opacityMove();
    });
    DOM.signIcon.addEventListener('click', function () {
        openBox();
        moveLeft();
    });
    DOM.signIcon2.addEventListener('click', function () {
        openBox();
        opacityMove();
    });

    for (var i = 0; i < DOM.close.length; i++) {
        DOM.close[i].addEventListener('click', closeBox);
    }

    for (var i = 0; i < DOM.infoItems.length; i++) {
        DOM.infoItems[i].addEventListener('click', infoModal);
    }
}(UIController));




function openModal() {
    document.getElementById("myModal").style.display = "block";
}

function closeModal() {
    document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
}