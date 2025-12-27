/**
 * Table of contents
 * -----------------------------------
 * 01.CURRENT TIME
 * 02.OPEN BUTTON
 * 03.CHECK AVAILABILITY
 * 04.GET WEEK DAY
 * 05.MULTI USER AVAILABILITY
 * 06.MULTI USER SEARCH
 * 07.BUTTONS AVAILABILITY
 * 08.SINGLE CHAT AVAILABILITY
 * -----------------------------------
 */

"use strict";
let vChat = document.querySelectorAll(".vChat");
let vChatMulti = document.querySelectorAll(".vChat-multi");
let vcBubble = document.querySelectorAll(".vc-bubble");
let currentTime = document.querySelector(".current-time");
let vcUserAvailability = document.querySelectorAll(".vcUserAvailability");
let vChatSendMessage = document.querySelector(".vChat__send-message");
let vChatMultiPopupContent = document.querySelector(
  ".vChat-multi__popup--content"
);
let user = document.querySelector(".user");

/******************** 01.CURRENT TIME  ********************/
let today = new Date();
if (currentTime !== null) {
  let time =
    today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
  currentTime.innerText = time;
}

/******************** 02.OPEN BUTTON  ********************/
const openChatBtn = () => {
  vChat.forEach((item) => {
    item.classList?.toggle("vChat-show");
  });
  vChatMulti.forEach((item) => {
    item.classList?.toggle("vChat-show");
  });
};
vcBubble.forEach((item) => {
  item.addEventListener("click", openChatBtn);
});

/******************** 03.CHECK AVAILABILITY  ********************/
function is_available(available, now) {
  let is_available = false;
  let almost_available = false;
  for (let key in available) {
    if (available.hasOwnProperty(key)) {
      if (get_day_of_week(key) == now.day()) {
        let start = moment(available[key].split("-")[0], "HH:mm"); // available[key] is in this format: 8:00-18:33
        let end = moment(available[key].split("-")[1], "HH:mm"); // available[key] is in this format: 8:00-18:33
        if (moment().isAfter(start) && moment().isBefore(end)) {
          is_available = true;
        } else if (now.isBefore(start)) {
          almost_available = true;
        }
      }
    }
  }
  return { is_available: is_available, almost_available: almost_available };
}

/******************** 04.GET WEEK DAY  ********************/
function get_day_of_week(name) {
  name = name.toLowerCase();
  if (name == "sunday") {
    return 0;
  } else if (name == "monday") {
    return 1;
  } else if (name == "tuesday") {
    return 2;
  } else if (name == "wednesday") {
    return 3;
  } else if (name == "thursday") {
    return 4;
  } else if (name == "friday") {
    return 5;
  } else if (name == "saturday") {
    return 6;
  }
}

/******************** 05.MULTI USER AVAILABILITY  ********************/
const searchInfo = vChatMultiPopupContent?.getAttribute("data-search");
const isGrid = document
  .querySelector(".vChat-multi")
  ?.classList.contains("vChat-grid");

if (vcUserAvailability !== undefined) {
  if (searchInfo === "true") {
    vChatMultiPopupContent.classList.add("vc-search");
  }
  if (vcUserAvailability.length > 3 && !isGrid) {
    vChatMultiPopupContent.classList.add("vc-scroll");
  }
  if (vcUserAvailability.length > 4 && isGrid) {
    vChatMultiPopupContent.classList.add("vc-scroll");
  }
  vcUserAvailability.forEach((item) => {
    const availableTimes = item.getAttribute("data-userAvailability");
    const timezone = item.getAttribute("data-timezone");
    let now = timezone ? moment().tz(timezone) : moment();
    let available = is_available(JSON.parse(availableTimes), now);
    if (available.is_available || availableTimes == null) {
      vcUserAvailability.forEach((item) => {
        const availableTime = item.getAttribute("data-userAvailability");
        if (availableTime === availableTimes) {
          item.classList.add("avatar-active");
          item.classList.remove("avatar-inactive");
        }
      });
    } else {
      vcUserAvailability.forEach((item) => {
        const availableTime = item.getAttribute("data-userAvailability");
        if (availableTime === availableTimes) {
          item.classList.add("avatar-inactive");
          item.setAttribute("disabled", "");
          item.classList.remove("avatar-active");
        }
      });
    }
  });
}
/******************** 06.MULTI USER SEARCH  ********************/
function searchUser() {
  var searchKeyword, i, txtValue;
  let input = document.getElementById("search-input");
  let filter = input.value.toUpperCase();
  let multiUser = document.getElementById("multi-user");
  let user = multiUser.getElementsByClassName("user");

  for (i = 0; i < user.length; i++) {
    searchKeyword = user[i].getElementsByClassName("user__info--name")[0];
    txtValue = searchKeyword.textContent || searchKeyword.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      user[i].style.display = "";
    } else {
      user[i].style.display = "none";
    }
  }
}

/******************** 07.BUTTONS AVAILABILITY  ********************/
let vcButtons = document.querySelectorAll(".vcButtons");
if (vcButtons !== undefined) {
  vcButtons.forEach((item) => {
    const availableTimes = item.getAttribute("data-btnavailablety");
    const timezone = item.getAttribute("data-timezone");
    let now = timezone ? moment().tz(timezone) : moment();
    let available = is_available(JSON.parse(availableTimes), now);
    if (available.is_available) {
      vcButtons.forEach((item) => {
        const availableTime = item.getAttribute("data-btnavailablety");
        if (availableTime === availableTimes) {
          item.classList.add("avatar-active");
          item.classList.remove("avatar-inactive");
        }
      });
    } else {
      vcButtons.forEach((item) => {
        const availableTime = item.getAttribute("data-btnavailablety");
        if (availableTime === availableTimes) {
          item.classList.add("avatar-inactive");
          item.setAttribute("disabled", "");
          item.classList.remove("avatar-active");
        }
      });
    }
  });
}

/******************** 08.SINGLE CHAT AVAILABILITY  ********************/
const chatAvailability = document.querySelector(".chat-availability");

if (chatAvailability) {
  const chatAvailableTime = chatAvailability.getAttribute("data-availability");
  if (chatAvailableTime !== undefined) {
    let now = moment();
    let available = is_available(JSON.parse(chatAvailableTime), now);

    if (available.is_available || chatAvailableTime == null) {
      chatAvailability.classList.add("avatar-active");
      chatAvailability.classList.remove("avatar-inactive");
    } else {
      chatAvailability.classList.add("avatar-inactive");
      chatAvailability.classList.remove("avatar-active");
    }
  }
}

/******************** 09.ADD ALERT  ********************/
const viber__target = document.querySelectorAll(".viber__target");
viber__target.forEach((item) => {
  item.addEventListener("click", function () {
    setTimeout(() => {
      Swal.fire({
        title: "Please install the viber app on your device.",
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText:
          '<a href="https://www.viber.com/en/download/" target="_blank" style="color:#ffffff"><i class="fab fa-viber"></i> Download now</a>',
        confirmButtonAriaLabel: "Download now",
        cancelButtonText: '<i class="fa fa-thumbs-cross"></i> Cancel',
        cancelButtonAriaLabel: "Cancel",
      });
    }, 3000);
  });
});
