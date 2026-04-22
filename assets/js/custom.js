(function ($) {
  "use strict";
  var PATH = {};

  /******************** 1.Button Layout  ********************/
  PATH.ButtonsLayout = function () {
    var layoutMenu = document.querySelector(".layouts__menu__area");

    // 🔥 SHOW FUNCTION (centralized)
    function showExample($this) {
      var $show = $($this.attr("data-show"));

      if (layoutMenu) {
        layoutMenu.style.display = "none";
      }

      $(
        "#example_1, #example_2, #example_3, #example_4, #example_5, #example_6, #example_7, #example_8, #example_9",
      )
        .hide()
        .removeClass("vChat-show wHelp-show teleSupport-show mSupport-show");

      $show.stop(true, true).slideDown(200, function () {
        setTimeout(function () {
          if ($show.find(".example_popup")[0] !== undefined) {
            $show.find(".example_button").trigger("click");
          }
        }, 100);
      });
    }

    // 🔥 CLICK EVENT (FIXED)
    $(".usage_example").on("click", function () {
      var $this = $(this);

      // selected class
      $(".usage_example.selected").removeClass("selected");
      $this.addClass("selected");

      showExample($this);

      // ✅ URL update WITHOUT triggering hashchange loop
      var id = $this.attr("data-show");
      if (id) {
        history.pushState(null, null, id);
      }
    });

    // 🔥 HASH HANDLER
    function handleHash() {
      var hash = window.location.hash;

      if (hash) {
        var $targetBtn = $('.usage_example[data-show="' + hash + '"]');

        if ($targetBtn.length) {
          $(".usage_example.selected").removeClass("selected");
          $targetBtn.addClass("selected");

          showExample($targetBtn);

          // ✅ scroll to #shortcode instead of top
          setTimeout(function () {
            var target = document.getElementById("shortcode");
            if (target) {
              target.scrollIntoView({
                behavior: "smooth",
                block: "start",
              });
            }
          }, 50);
        }
      }
    }

    // 🔥 INITIAL LOAD
    setTimeout(function () {
      handleHash();
    }, 100);

    // 🔥 HASH CHANGE (manual URL change)
    $(window).on("hashchange", function () {
      handleHash();
    });

    // CHANGE EFFECT
    $("#change_effect, #change_effect_popup").on("change", function () {
      let current = $(this).val();
      let items = $(".example_popup");

      $(".example_button")[0].click();

      items.removeClass(function (index, className) {
        return (className.match(/(^|\s)animation\S+/g) || []).join(" ");
      });

      items.each(function () {
        $(this).addClass("animation" + current);
      });
    });

    $("#change_effect_popup").trigger("change");
  };

  /******************** DEVICE CHANGE ********************/
  PATH.DibasicChange = () => {
    var mobileView = document.querySelector(".mobile-view");
    var desktopView = document.querySelector(".desktop-view");
    var layoutPopup = document.querySelector(".layouts__popup");

    if (mobileView) {
      mobileView.addEventListener("click", () => {
        layoutPopup.classList.add("layouts__popup-width");
      });
    }

    if (desktopView) {
      desktopView.addEventListener("click", () => {
        layoutPopup.classList.remove("layouts__popup-width");
      });
    }
  };

  /******************** INIT ********************/
  $(function () {
    PATH.DibasicChange();
    PATH.ButtonsLayout();
  });
})(jQuery);

/******************** DARK VERSION ********************/
function setTheme(themeName) {
  var themeColor = document.querySelector(".theme-color");
  if (themeColor) {
    themeColor.classList.remove("theme-light", "night-mode");
    localStorage.setItem("reboot_theme", themeName);

    if (themeName !== "") {
      themeColor.classList.add(themeName);
    } else {
      themeColor.classList.add("theme-light");
    }
  }
}

function toggleTheme() {
  if (localStorage.getItem("reboot_theme") === "night-mode") {
    setTheme("");
  } else {
    setTheme("night-mode");
  }
}

(function () {
  if (localStorage.getItem("reboot_theme") === "night-mode") {
    setTheme("night-mode");
    var slider = document.getElementById("slider");
    if (slider) slider.checked = true;
  } else {
    setTheme("theme-light");
    var slider = document.getElementById("slider");
    if (slider) slider.checked = true;
  }
})();

/******************** MENU TOGGLE ********************/
function myFunction() {
  var layoutMenu = document.querySelector(".layouts__menu__area");
  if (layoutMenu.style.display === "none") {
    layoutMenu.style.display = "block";
  } else {
    layoutMenu.style.display = "none";
  }
}
