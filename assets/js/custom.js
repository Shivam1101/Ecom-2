  /*----------------------------
        Category toggle function
    ------------------------------*/
  var searchToggle = $(".categories-button-active");
  searchToggle.on("click", function(e) {
      e.preventDefault();
      if ($(this).hasClass("open")) {
          $(this).removeClass("open");
          $(this).siblings(".categories-dropdown-active-large").removeClass("open");
      } else {
          $(this).addClass("open");
          $(this).siblings(".categories-dropdown-active-large").addClass("open");
      }
  });



  /*====== Sidebar menu Active ======*/
  function mobileHeaderActive() {
      var navbarTrigger = $(".burger-icon"),
          endTrigger = $(".mobile-menu-close"),
          container = $(".mobile-header-active"),
          wrapper4 = $("body");

      wrapper4.prepend('<div class="body-overlay-1"></div>');

      navbarTrigger.on("click", function(e) {
          e.preventDefault();
          container.addClass("sidebar-visible");
          wrapper4.addClass("mobile-menu-active");
      });

      endTrigger.on("click", function() {
          container.removeClass("sidebar-visible");
          wrapper4.removeClass("mobile-menu-active");
      });

      $(".body-overlay-1").on("click", function() {
          container.removeClass("sidebar-visible");
          wrapper4.removeClass("mobile-menu-active");
      });
  }
  mobileHeaderActive();

  /*---------------------
      Mobile menu active
  ------------------------ */
  var $offCanvasNav = $(".mobile-menu"),
      $offCanvasNavSubMenu = $offCanvasNav.find(".dropdown");

  /*Add Toggle Button With Off Canvas Sub Menu*/
  $offCanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i class="fi-rs-angle-small-down"></i></span>');

  /*Close Off Canvas Sub Menu*/
  $offCanvasNavSubMenu.slideUp();

  /*Category Sub Menu Toggle*/
  $offCanvasNav.on("click", "li a, li .menu-expand", function(e) {
      var $this = $(this);
      if (
          $this
          .parent()
          .attr("class")
          .match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/) &&
          ($this.attr("href") === "#" || $this.hasClass("menu-expand"))
      ) {
          e.preventDefault();
          if ($this.siblings("ul:visible").length) {
              $this.parent("li").removeClass("active");
              $this.siblings("ul").slideUp();
          } else {
              $this.parent("li").addClass("active");
              $this.closest("li").siblings("li").removeClass("active").find("li").removeClass("active");
              $this.closest("li").siblings("li").find("ul:visible").slideUp();
              $this.siblings("ul").slideDown();
          }
      }
  });


  /*-----More Menu Open----*/
  $(".more_slide_open").slideUp();
  $(".more_categories").on("click", function() {
      $(this).toggleClass("show");
      $(".more_slide_open").slideToggle();
  });

  /*-----------------
         Menu Stick
     -----------------*/
  var header = $(".sticky-bar");
  var win = $(window);
  win.on("scroll", function() {
      var scroll = win.scrollTop();
      if (scroll < 200) {
          header.removeClass("stick");
          $(".header-style-2 .categories-dropdown-active-large").removeClass("open");
          $(".header-style-2 .categories-button-active").removeClass("open");
      } else {
          header.addClass("stick");
      }
  });

  // $("#news-flash").vTicker({
  //     speed: 500,
  //     pause: 3000,
  //     animation: "fade",
  //     mousePause: false,
  //     showItems: 1
  // });
  /*------ ScrollUp -------- */
  // $.scrollUp({
  //     scrollText: '<i class="fi-rs-arrow-small-up"></i>',
  //     easingType: "linear",
  //     scrollSpeed: 900,
  //     animation: "fade"
  // });

  /*-------------------------------
          Sort by active
      -----------------------------------*/
  if ($(".sort-by-product-area").length) {
      var $body = $("body"),
          $cartWrap = $(".sort-by-product-area"),
          $cartContent = $cartWrap.find(".sort-by-dropdown");
      $cartWrap.on("click", ".sort-by-product-wrap", function(e) {
          e.preventDefault();
          var $this = $(this);
          if (!$this.parent().hasClass("show")) {
              $this.siblings(".sort-by-dropdown").addClass("show").parent().addClass("show");
          } else {
              $this.siblings(".sort-by-dropdown").removeClass("show").parent().removeClass("show");
          }
      });
      /*Close When Click Outside*/
      $body.on("click", function(e) {
          var $target = e.target;
          if (!$($target).is(".sort-by-product-area") && !$($target).parents().is(".sort-by-product-area") && $cartWrap.hasClass("show")) {
              $cartWrap.removeClass("show");
              $cartContent.removeClass("show");
          }
      });
  }

  /*-----------------------
        Shop filter active 
    ------------------------- */
    $(".shop-filter-toogle").on("click", function (e) {
        e.preventDefault();
        $(".shop-product-fillter-header").slideToggle();
    });
    var shopFiltericon = $(".shop-filter-toogle");
    shopFiltericon.on("click", function () {
        $(".shop-filter-toogle").toggleClass("active");
    });
    
   // /*---------------------
   //      Price range
   //  --------------------- */
   //   if ($("#slider-range").length) {
   //       var sliderrange = $("#slider-range");
   //       var amountprice = $("#amount");
   //       $(function () {
   //           sliderrange.slider({
   //               range: true,
   //               min: 16,
   //               max: 400,
   //               values: [0, 300],
   //               slide: function (event, ui) {
   //                   amountprice.val("$" + ui.values[0] + " - $" + ui.values[1]);
   //               }
   //           });
   //           amountprice.val("$" + sliderrange.slider("values", 0) + " - $" + sliderrange.slider("values", 1));
   //       });
   //   }
  /*------ Print Invoice -------- */
  function printSection(el) {
      var getFullContent = document.body.innerHTML;
      var printsection = document.getElementById(el).innerHTML;
      document.body.innerHTML = printsection;
      window.print();
      document.body.innerHTML = getFullContent;
  }



  
    /*-----Modal----*/

    $(".modal").on("shown.bs.modal", function (e) {
        $(".product-image-slider").slick("setPosition");
        $(".slider-nav-thumbnails").slick("setPosition");

        $(".product-image-slider .slick-active img").elevateZoom({
            zoomType: "inner",
            cursor: "crosshair",
            zoomWindowFadeIn: 500,
            zoomWindowFadeOut: 750
        });
    });
