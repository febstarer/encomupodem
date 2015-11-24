var locale = {
  CLOSE: {
    ca: "Tanca",
    es: "Cerrar",
    en: "Close"
  },
  COOKIES_MESSAGE: {
    ca: "El nostre portal web web utilitza cookies amb la finalitat de millorar l'experiència de l'usuari. Al fer servir els nostres serveis acceptes l'ús que fem de les 'cookies'.",
    es: "Nuestro sitio web utiliza cookies con el fin de mejorar la experiencia del usuario. Al utilizar nuestros servicios aceptas el uso que hacemos de las 'cookies'.",
    en: "Our web site uses cookies to improve the user experience. Using our services you agree to the use of the 'cookies'."
  },
  COOKIES_MORE_INFO: {
    ca: "Més informació",
    es: "Más información",
    en: "More information"
  }
}
var config = {
  LANGUAGE: 'ca',
  THEME_URL: '/sites/all/themes/maya/'
};

(function($){
  // ON READY
  $(window).ready(function(){
    config.LANGUAGE = $('html').attr('lang');

    // For all links with rel external or the specified here, open link in new tab
    $('body').on('click', 'a[rel="external"], a[rel="license"]', function(e){
      e.preventDefault();
      window.open($(this).attr('href'));
    });

    // cookies
    if (getCookie('encomu_cookie_message') != 'accepted'){
      $('#page').prepend('<div class="cookies-message"><p>'+locale.COOKIES_MESSAGE[config.LANGUAGE]+' <button data-action="close" title="'+locale.CLOSE[config.LANGUAGE]+'">X</button></p></div>');
      setCookie('encomu_cookie_message', 'accepted', 90);
      var $cookies_message = $('.cookies-message');
      $cookies_message.on('click', 'button[data-action="close"]', function(e){
        e.preventDefault();
        $cookies_message.fadeOut(300);
      });
    }

  });

})(jQuery);

