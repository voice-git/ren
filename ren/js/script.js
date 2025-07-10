jQuery(function () {
  AOS.init();
  // ハンバーガーボタン
  jQuery(".open-hamburger").hide();
  jQuery(".hamburger-btn").click(function () {
    jQuery(".bar").toggleClass("cross");
    jQuery(".hamburger-btn__bar").toggleClass("wrap");
    jQuery('.open-hamburger').fadeToggle(300);
  });
  jQuery(".about-hamburger-btn").click(function () {

    jQuery('.open-hamburger').fadeToggle(300);
  });
  jQuery(".chase-header-btn").click(function () {

    jQuery(".bar").toggleClass("cross");
    jQuery(".hamburger-btn__bar").toggleClass("wrap");
    jQuery('.open-hamburger').fadeToggle(300);
  });
  jQuery(".product-header-btn").click(function () {

    jQuery('.open-hamburger').fadeToggle(300);
  });
  jQuery(".open-hamburger-btn").click(function () {

    jQuery(".open-hamburger").fadeToggle(300);
    jQuery(".bar").toggleClass("cross");
    jQuery(".hamburger-btn__bar").toggleClass("wrap");
  });

  //アコーディオン
  jQuery(".open-hamburger__accordion").click(function () {
    jQuery(".open-hamburger__category").toggleClass("none");
    jQuery(".open-hamburger__arrow").toggleClass("click__arrow");
  });
  jQuery(".online-shop__container").hide();
  jQuery(".online-shop__title").click(function () {
    jQuery(".online-shop__container").fadeToggle(300);
  });

  //追従ヘッダー
  jQuery(".chase-header").hide();
  jQuery(function () {
    if(jQuery('.history').length) {
      var height = jQuery('.history').offset().top;
      jQuery(window).on("scroll", function () {
        if (jQuery(this).scrollTop() > height) {
          jQuery(".chase-header").fadeIn('slow');
        } else {
          jQuery(".chase-header").fadeOut();
        }
      });
    }
    
  });

  jQuery(function () {
    if(jQuery('.about__img').length) {
      var aboutHeight = jQuery('.about__img').offset().top;
      jQuery(window).on("scroll", function () {
        if (jQuery(this).scrollTop() > aboutHeight) {
          jQuery(".chase-header").fadeIn('slow');
        } else {
          jQuery(".chase-header").fadeOut();
        }
      });
    }

  });

	jQuery(function () {
    if(jQuery('.list__title').length) {
      var productHeight = jQuery('.list__title').offset().top;
      jQuery(window).on("scroll", function () {
        if (jQuery(this).scrollTop() > productHeight) {
          jQuery(".chase-header").fadeIn('slow');
        } else {
          jQuery(".chase-header").fadeOut();
        }
      });
    }

  });
	
  jQuery(function () {
    if(jQuery('.product__top').length) {
      var productHeight = jQuery('.product__top').offset().top;
      jQuery(window).on("scroll", function () {
        if (jQuery(this).scrollTop() > productHeight) {
          jQuery(".chase-header").fadeIn('slow');
        } else {
          jQuery(".chase-header").fadeOut();
        }
      });
    }

  });

  jQuery(function () {
    if(jQuery('.details__inner--right').length) {
      var detailsHeight = jQuery('.details__inner--right').offset().top;
      jQuery(window).on("scroll", function () {
        if (jQuery(this).scrollTop() > detailsHeight) {
          jQuery(".chase-header").fadeIn('slow');
        } else {
          jQuery(".chase-header").fadeOut();
        }
      });
    }

  });
	jQuery(function () {
    if(jQuery('.contact').length) {
      var detailsHeight = jQuery('.contact').offset().top;
      jQuery(window).on("scroll", function () {
        if (jQuery(this).scrollTop() > detailsHeight) {
          jQuery(".chase-header").fadeIn('slow');
        } else {
          jQuery(".chase-header").fadeOut();
        }
      });
    }

  });

  jQuery(function () {
    if(jQuery('.news__select').length) {
      var detailsHeight = jQuery('.news__select').offset().top;
      jQuery(window).on("scroll", function () {
        if (jQuery(this).scrollTop() > detailsHeight) {
          jQuery(".chase-header").fadeIn('slow');
        } else {
          jQuery(".chase-header").fadeOut();
        }
      });
    }

  });

  jQuery(function () {
    if(jQuery('.post').length) {
      var detailsHeight = jQuery('.post').offset().top;
      jQuery(window).on("scroll", function () {
        if (jQuery(this).scrollTop() > detailsHeight) {
          jQuery(".chase-header").fadeIn('slow');
        } else {
          jQuery(".chase-header").fadeOut();
        }
      });
    }

  });

  jQuery(function () {
    if(jQuery('.guide').length) {
      var detailsHeight = jQuery('.guide').offset().top;
      jQuery(window).on("scroll", function () {
        if (jQuery(this).scrollTop() > detailsHeight) {
          jQuery(".chase-header").fadeIn('slow');
        } else {
          jQuery(".chase-header").fadeOut();
        }
      });
    }

  });
  /*スムーススクロール*/
  jQuery('a').click(function () {
    var speed = 2000;
    var adjust = -94;
    var href = jQuery(this).attr("href");
    var target = jQuery(href == "#" || href == "" ? 'html' : href);
    // target が存在するか確認
    if (target.length) {
	    var position = target.offset().top + adjust;
	    jQuery("html, body").animate({ scrollTop: position }, speed, "swing");
    }
    return false;
  });

	//商品一覧のボタン表示・非表示
	jQuery(function() {
  voiceItem01 =jQuery('.list__outer').children('.list__inner');
  voiceCount01 = jQuery(voiceItem01).length;
  if(voiceCount01 < 20) {
    jQuery('.list__button').hide();
  }
  for($i=0; $i<20; $i++) {
    jQuery(voiceItem01).eq($i).show();
  }
  var moreNum = 20;
  jQuery('.list__outer a:nth-child(n + ' + (moreNum + 1) + ')').addClass('is-hidden');
  jQuery('.list__button').on('click', function () {
    jQuery('.list__outer a.is-hidden').slice(0, moreNum).removeClass('is-hidden');
    if (jQuery('.list__outer a.is-hidden').length == 0) {
      jQuery('.list__button').fadeOut();
    }
  });
});
	
  //お知らせ一覧のさらに表示ボタンのクリックイベント
  var moreNum = 9;
  jQuery('.news__outer a:nth-child(n + ' + (moreNum + 1) + ')').addClass('is-hidden');
  jQuery('.news__button').on('click', function () {
    jQuery('.news__outer a.is-hidden').slice(0, moreNum).removeClass('is-hidden');
    if (jQuery('.news__outer a.is-hidden').length == 0) {
      jQuery('.news__button').fadeOut();
    }
  });

  //オンラインショップのクリックイベント
  jQuery('.online-shop__arrow--bottom').hide();
  jQuery('.online-shop__title').click(function () {
    jQuery(".online-shop__arrow").toggleClass("online-shop__arrow--bottom");
    jQuery(".online-shop__border").toggleClass("online-shop__border--none");
  })
});

//カラミーボタンのテキストの表示

jQuery(function () {
	jQuery('td').children('select').css('opacity','0');
  jQuery('select').change(function() {
    jQuery('.details__dummy').html(jQuery('td').children('select').find('option:selected').text());
  });
  jQuery('.details__dummy').html(jQuery('td').children('select').find('option:selected').text());
});

//お知らせのテキストの表示
jQuery(function () {
  jQuery('.news__option').html(jQuery('.news__select--right').find('option:selected').text());
  jQuery('.news__option--left').html(jQuery('.news__select--left').find('option:selected').text());
});

// ローディングアニメーション（リニューアル後使う）
//  jQuery(function () {
//   if (sessionStorage.getItem('access')) {
//     jQuery('.loading__outer').hide();
//     jQuery('.loading__ren').hide();
//     jQuery('.loading').hide();
//   }
// });
// jQuery(function () {
//   setTimeout('ani1()', 1000);
//   setTimeout('ani2()', 1000);
//   setTimeout('ani3()', 4000);
//   jQuery('.loading__outer').hide();
//   jQuery('.loading__ren').hide();
// });
// function ani1() {
//   if (!sessionStorage.getItem('access')) {
//     jQuery('.loading__outer').fadeIn(1000);
//     jQuery('.loading__outer').fadeOut(2000);
//   }

// }
// function ani2() {
//   if (!sessionStorage.getItem('access')) {
//     jQuery('.loading__ren').fadeIn(1000);
//     jQuery('.loading__ren').fadeOut(2000);
//   }
// }
// function ani3() {
//   if (!sessionStorage.getItem('access')) {
//     jQuery('.loading').fadeOut(2000);
// 	  sessionStorage.setItem('access', 0);
//   }
// }
// ローディングアニメーション（現在使用）
 jQuery(function () {
  if (sessionStorage.getItem('access')) {
    jQuery('.loading__img01').hide();
    jQuery('.loading__ren01').hide();
    jQuery('.loading').hide();
  }
});
jQuery(function () {
  setTimeout('ani1()', 1000);
  setTimeout('ani2()', 3000);
  setTimeout('ani3()', 4000);
  jQuery('.loading__img01').hide();
  jQuery('.loading__ren01').hide();
});
function ani1() {
  if (!sessionStorage.getItem('access')) {
    jQuery('.loading__img01').fadeIn(1000);
    jQuery('.loading__img01').fadeOut(1000);
  }

}
function ani2() {
  if (!sessionStorage.getItem('access')) {
    jQuery('.loading__ren01').fadeIn(1000);
    jQuery('.loading__ren01').fadeOut(1000);
  }
}
function ani3() {
  if (!sessionStorage.getItem('access')) {
    jQuery('.loading').fadeOut(2000);
	  sessionStorage.setItem('access', 0);
  }
}
jQuery(function() {
  slideCount  = jQuery('.swiper-slide').length;
  for ($i=0; $i < slideCount; $i++) {
    slideImg01 = jQuery('.swiper-slide').eq($i+1).find('img').attr('src');
    jQuery('.swiper-pagination-5').children('.swiper-pagination-bullet').eq($i).html('<img class="details__img--thumb" src="' + slideImg01 + '">');
  }
});

jQuery(function () {
  jQuery('.details__select--inner').on('change', function () {
    var $this = jQuery(this)
    var $option = $this.find('option:selected');
    jQuery(this).next('.label').text($option.text());

    // onchange後にフォーカスしてるのが嫌な場合
    $this.blur();

  });
  jQuery('.details__number--inner').on('change', function () {
    var $this = jQuery(this)
    var $option = $this.find('option:selected');
    jQuery(this).next('.label-num').text($option.text());

    // onchange後にフォーカスしてるのが嫌な場合
    $this.blur();

  });
});

// 追従メニュー表示
document.addEventListener("DOMContentLoaded", function () {
  const banner = document.querySelector(".fixedbanner");

  window.addEventListener("scroll", function () {
    if (window.scrollY > 500) {
      banner.classList.add("visible");   // 500pxを超えたらフェードイン
    } else {
      banner.classList.remove("visible"); // 500px以下ならフェードアウト
    }
  });
});
