$(function(){
    $('.carousel').slick({
    //   dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      centerMode: true,
      variableWidth: true
    });
    $('.game_list').slick({
      //   dots: true,
        // infinite: true,
        arrows: true,
        speed: 300,
        slidesToShow: 1,
        centerMode: false,
        variableWidth: true
      });
  });