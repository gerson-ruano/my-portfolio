const nav = document.querySelector('nav');

window.addEventListener('scroll', function() {
  if (window.scrollY > 0) {
    nav.classList.add('fixed');
  } else {
    nav.classList.remove('fixed');
  }
});


