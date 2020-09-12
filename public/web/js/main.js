document.querySelector('.skip--btn').addEventListener('click', function () {
  document.querySelector('.loader').style.display = 'none';
});

// Scroll Function 
if (window.innerWidth > 1200) {
  var prevScrollpos = window.pageYOffset;
  window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > 2) {
      document.getElementById("navbar").style.backgroundColor = '#000000';
      //document.getElementById("navbar").style.boxShadow = '0 .2rem 2rem #4d4d4d';
    } else {
      //document.getElementById("navbar").style.boxShadow = '0 0 0';
      document.getElementById("navbar").style.backgroundColor = '#000000';
    }
    prevScrollpos = currentScrollPos;
  }
}



// Flickity
var elem = document.querySelector('.main-carousel');
var flkty = new Flickity(elem, {
  pageDots: false,
  prevNextButtons: false,
  autoPlay: 1500,
  cellAlign: 'left',
  contain: true
});

// element argument can be a selector string
//   for an individual element
var flkty = new Flickity('.main-carousel2', {
  pageDots: false,
  autoPlay: 1500,
  cellAlign: 'left',
  contain: true
});


var flkty = new Flickity('main-carousel3', {
  pageDots: true,
  autoPlay: 1500,
  prevNextButtons: false,
  cellAlign: 'center',
  contain: true
});


// Sidebar 
function openNav() {
  var x = document.getElementById('sideBar');
  var y = document.querySelector('.fa-bars');

  if (x.style.display === "block") {
    x.style.display = "none";
    y.style.webkitTransform = 'rotate(90deg)';
  } else {
    x.style.display = "block";
    y.style.webkitTransform = 'rotate(0)';
  }

  console.log('I was clicked');
}




// Tabs
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}