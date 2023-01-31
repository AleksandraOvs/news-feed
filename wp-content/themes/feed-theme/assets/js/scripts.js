jQuery(document).ready(function($)  {
  //   $('.burger').click(function(event){
  //     $('.header,.burger,.navbar-nav,.header__contacts,.navigation').toggleClass('active')
  //  }),

  const btn = document.querySelector(".color-switcher");

  btn.addEventListener('click', function() {
    document.body.classList.toggle('dark');
  })
  })
