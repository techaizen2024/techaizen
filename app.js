const navbar = document.querySelector('.navbar')
const hamburger = document.querySelector('.hamburger')
const navlinks = document.querySelector('.nav-links')

window.addEventListener('scroll', () => {
    if(this.scrollY >= 100) {
         navbar.classList.add('scrolled')
    } else {
        navbar.classList.remove('scrolled')
    }
})

hamburger.addEventListener('click', () => {
    navlinks.classList.toggle('active')
    hamburger.classList.toggle('active')
})

const typed = new Typed('#element', {
    strings: [
        'Creative TechAigen', 
        'End To End Solution'
    ],
    typeSpeed: 50,
  });

  var typed = new typed('#hero-titles')