/**
 * Table of contents
 * -----------------------------------
 * 1.Button Layout
 * DARK VERSION
 */

(function ($) {
  "use strict";
  var PATH = {};

  /******************** 1.Button Layout  ********************/
  PATH.ButtonsLayout = function () {
    var layoutMenu = document.querySelector(".layouts__menu__area");
    $(".usage_example").on("click", function () {
      var $this = $(this);
      var $show = $($this.attr("data-show"));
      if (layoutMenu) {
        layoutMenu.style.display = "none";
      }
      $(
        "#example_1, #example_2, #example_3, #example_4, #example_5, #example_6, #example_7, #example_8, #example_9"
      ).hide().removeClass("vChat-show");
      $(
        "#example_1, #example_2, #example_3, #example_4, #example_5, #example_6, #example_7, #example_8, #example_9"
      ).hide().removeClass("wHelp-show");
      $(
        "#example_1, #example_2, #example_3, #example_4, #example_5, #example_6, #example_7, #example_8, #example_9"
      ).hide().removeClass("teleSupport-show");

            $(
        "#example_1, #example_2, #example_3, #example_4, #example_5, #example_6, #example_7, #example_8, #example_9"
      ).hide().removeClass("mSupport-show");

      $show.slideDown(200, function () {
        setTimeout(function () {
          if ($show.find(".example_popup")[0] !== undefined) {
            // if it has popup
            $show.find(".example_button").trigger("click");
          }
        }, 100);
      });
    });

    // TRIGGER BUTTON ON ANIMATION BUTTONS CLICK

    // CHANGE EFFECT OF THE POPUP
    $("#change_effect, #change_effect_popup").on("change", function () {
      let current = $(this).val();
      let items = $(".example_popup");

      jQuery(".example_button")[0].click();

      items.removeClass(function (index, className) {
        return (className.match(/(^|\s)animation\S+/g) || []).join(" ");
      });
      items.each(function () {
        $(this).addClass("animation" + current);
      });
    });
    $("#change_effect_popup").trigger("change");
  };

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

  /******************** DOCUMENT READY FUNCTION ********************/
  $(function () {
    PATH.DibasicChange();
    PATH.ButtonsLayout();
  });

  /******************** WINDOW ON LOAD FUNCTION ********************/
  $(window).on("load", function () {});
})(jQuery);

/******************** DARK VERSION ********************/
function setTheme(themeName) {
  var themeColor = document.querySelector(".theme-color");
	if(themeColor) {
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
	  if(slider) {
		  slider.checked = true;
	  }
  } else {
    setTheme("theme-light");
    var slider = document.getElementById("slider");
	  if(slider) {
		  slider.checked = true;
	  }
  }
})();

function myFunction() {
  var layoutMenu = document.querySelector(".layouts__menu__area");
  if (layoutMenu.style.display === "none") {
    layoutMenu.style.display = "block";
  } else {
    layoutMenu.style.display = "none";
  }
}

// Add active class to the current button (highlight it)
var header = document.getElementById("usage_examples");
if(header) {
var btns = header.getElementsByClassName("usage_example");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function () {
    var current = document.getElementsByClassName("selected");
    current[0].className = current[0].className.replace(" selected", "");
    this.className += " selected";
  });
}
	}
