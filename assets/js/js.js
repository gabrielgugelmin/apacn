$(function(){
  clickOutsideMenu();

  // MENU
  // click no hamburguer icon
  $('.MenuTrigger').on('click', function(e){
    e.preventDefault();   

    if( $('.Menu').hasClass('Menu--open') ){
      closeMenu();
    } else{
      openMenu();
    }
  });

  // abre um sub menu
  $('.Menu--hasSub > a').on('click', function(e){
    e.preventDefault();

    $(this).siblings('.Menu-sub').addClass('Menu-sub--subOpen');
    $(this).addClass('is-selected');
    $('.Menu').addClass('Menu--subOpen');
    $('#Header').addClass('is-expanded');
  });

  // volta ao menu principal
  $('.js-back').on('click', function(){
    $(this).parent().removeClass('Menu-sub--subOpen');
    $('.Menu--hasSub > a').removeClass('is-selected');
    $('.Menu').removeClass('Menu--subOpen');
    $('#Header').removeClass('is-expanded');
  });

  // menu fixo ao scollar
  $(window).scroll(function(){
    
    if( $(this).scrollTop() >= 0 ){
      $('#Header').addClass('is-scrolling');
    } else{
    	$('#Header').removeClass('is-scrolling');
    }
  });


  // SLIDER
/*  $('.js-slider').slick({
    prevArrow: '<button type="button" class="Slider-button Slider-button--prev"></button>',
    nextArrow: '<button type="button" class="Slider-button Slider-button--next"></button>'
  });*/

  // PARCEIROS
  $('.Slider.js-slider').slick({
    mobileFirst: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: '<button type="button" class="Slider-button Slider-button--prev"></button>',
    nextArrow: '<button type="button" class="Slider-button Slider-button--next"></button>',
    responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4
      }
    }
  ]
  });


  // BANNER 
  resizeBanner();
  $(window).on('resize', function(){
    resizeBanner();
    clickOutsideMenu();
  } );


  // DROPDOWN
  $('.Dropdown').on('click', function(){
    $(this).toggleClass('is-open');
  });

  $('.Dropdown li').on('click', function(){
    var valor = $(this).text();
    $('.Dropdown input').val(valor);
  });

  clickOutsideDropdown();


  /* VALIDAR FORM */
	$('.js-validateForm').submit(function(e){
    e.preventDefault();
    form = $(this);

    var qtdErro = 0;

    $(this).find('[data-validate=true]').each(function() {
    	$(this).removeClass('error');
			var value = $.trim( $(this).find('input, textarea').val() );

			if(!value.length > 0){
				$(this).addClass('error');
				qtdErro++;
			}
		});

    console.log(qtdErro);

		if(qtdErro == 0){

      var url = document.location.origin;

        console.log('#FormContato');
        var nome = $('#FormContato [name=contato_nome]').val();
        var email = $('#FormContato [name=contato_email]').val();
        var setor = $('#FormContato [name=contato_setor]').val();
        var mensagem = $('#FormContato [name=contato_mensagem]').val();

        //var posting = $.post(url + "/apacn/site/contactForm.php", { nome: nome, email: email, setor: setor, mensagem: mensagem } );

        return $.ajax({
          type: "POST",
          url: url + "/apacn/site/contactForm.php",
          data: $(this).serialize(),
          success: function (data) {
            var result = $.parseJSON(data);

            // Exibe a modal com as informações
            $('.popup').find('h3').text(result.titulo);
            $('.popup').find('p').text(result.corpo);
            $('.popup').addClass('open');

            // Limpa o form
            $('#FormContato').find('input, textarea').val('');
          }
        });
		}

	});

  $('.popup-close').on('click', function(){
    $('.popup').removeClass('open');
  });

  // mostra conteúdo do .item
  $('.js-openItem').on('click', function(){
    if( $('.Item__content').hasClass('is-open') ){
      $('.Item__content').removeClass('is-open');
      $('.Overlay').removeClass('is-open');
    } else{
      $('.Item__content').addClass('is-open');
      $('.Overlay').addClass('is-open');
    }
  });

  // fecha conteúdo do .item
  $('.js-closeItem').on('click', function(){
    $('.Item__content').removeClass('is-open');
    $('.Overlay').removeClass('is-open');
  });

});

function closeMenu(){
  $('.Menu').removeClass('Menu--open');
  $('.Menu').removeClass('Menu--subOpen');
  $('#Header').removeClass('is-expanded');

  $('.Menu-sub').removeClass('Menu-sub--subOpen');
  $('.MenuTrigger').removeClass('is-open');

  $('.Menu--hasSub > a').removeClass('is-selected');

  $('body').removeClass('overflowHidden');
}

function openMenu(){
  $('.MenuTrigger').addClass('is-open');
  $('.Menu').addClass('Menu--open');
  $('body').addClass('overflowHidden');
}

function resizeBanner(){
  var h = $(window).height() - 100;
  $('.Banner').height(h);
}

function viewport() {
  var e = window, a = 'inner';
  if (!('innerWidth' in window )) {
      a = 'client';
      e = document.documentElement || document.body;
  }
  return { width : e[ a+'Width' ] , height : e[ a+'Height' ] };
}

function checkWindowWidth(){
  var w = viewport().width;
  var size = '';
  if(w > 991){
    size = 'desktop';
  } else{
    size = 'mobile';
  }

  return size;
}

function clickOutsideMenu(){
  
  var x = checkWindowWidth();
  if(x == 'desktop'){
    $(document).on('mouseup', function (e){ 
      var elem = $('.Menu-sub');

      if (!elem.is(e.target) && elem.has(e.target).length === 0){
        closeMenu();
      }
    });
  } else{
    $(document).off('mouseup');
  }
}

function clickOutsideDropdown(){
  $(document).on('mouseup', function (e){ 
    var elem = $('.Dropdown');

    if (!elem.is(e.target) && elem.has(e.target).length === 0){
      elem.removeClass('is-open');
    }
  });
}