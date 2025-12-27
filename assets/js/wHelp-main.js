/**
 * Table of contents
 * -----------------------------------
 * 01.CURRENT TIME
 * 02.OPEN BUTTON
 * 03.CHECK TERMS AND CONDITION
 * 04.CHECK AVAILABILITY
 * 05.GET WEEK DAY
 * 06.MULTI USER AVAILABILITY
 * 07.MULTI USER SEARCH
 * 08.BUTTONS AVAILABILITY
 * 09.SINGLE CHAT AVAILABILITY
 * 10.ADD SUBJECT OR BODY TEXT
 * DARK VERSION
 * -----------------------------------
 */

"use strict";
let wHelp = document.querySelectorAll(".wHelp");
let wHelpMulti = document.querySelectorAll(".wHelp-multi");
let wHelpBubble = document.querySelectorAll(".wHelp-bubble");
let currentTime = document.querySelector(".current-time");
let wHelpUserAvailability = document.querySelectorAll(".wHelpUserAvailability");
let wHelpMultiPopupContent = document.querySelector(
  ".wHelp-multi__popup--content"
);
let user = document.querySelector(".user");
let wHelpCheckButton = document.querySelectorAll(".wHelp__send-message");

/******************** 01.CURRENT TIME  ********************/

let today = new Date();
if (currentTime !== null) {
  let time =
    today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
  currentTime.innerText = time;
}
/******************** 02.OPEN BUTTON  ********************/
const openChatBtn = () => {
  wHelp.forEach((item) => {
    item.classList?.toggle("wHelp-show");
  });
  wHelpMulti.forEach((item) => {
    item.classList?.toggle("wHelp-show");
  });
};
wHelpBubble.forEach((item) => {
  item.addEventListener("click", openChatBtn);
});

/******************** 04.CHECK AVAILABILITY  ********************/
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

/******************** 05.GET WEEK DAY  ********************/
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

/******************** 06.MULTI USER AVAILABILITY  ********************/
const searchInfo = wHelpMultiPopupContent?.getAttribute("data-search");
const isGrid = document
  .querySelector(".wHelp-multi")
  ?.classList.contains("wHelp-grid");

if (wHelpUserAvailability !== undefined) {
  if (searchInfo === "true") {
    wHelpMultiPopupContent.classList.add("wHelp-search");
  }
  if (wHelpUserAvailability.length > 3 && !isGrid) {
    wHelpMultiPopupContent.classList.add("wHelp-scroll");
  }
  if (wHelpUserAvailability.length > 4 && isGrid) {
    wHelpMultiPopupContent.classList.add("wHelp-scroll");
  }
  wHelpUserAvailability.forEach((item) => {
    const availableTimes = item.getAttribute("data-userAvailability");
    const timezone = item.getAttribute("data-timezone");
    let now = timezone ? moment().tz(timezone) : moment();
    let available = is_available(JSON.parse(availableTimes), now);
    if (available.is_available || availableTimes == null) {
      wHelpUserAvailability.forEach((item) => {
        const availableTime = item.getAttribute("data-userAvailability");
        if (availableTime === availableTimes) {
          item.classList.add("avatar-active");
          item.classList.remove("avatar-inactive");
        }
      });
    } else {
      wHelpUserAvailability.forEach((item) => {
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
/******************** 07.MULTI USER SEARCH  ********************/
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

/******************** 08.BUTTONS AVAILABILITY  ********************/
let whButtons = document.querySelectorAll(".whButtons");
if (whButtons !== undefined) {
  whButtons.forEach((item) => {
    const availableTimes = item.getAttribute("data-btnavailablety");
    const timezone = item.getAttribute("data-timezone");
    let now = timezone ? moment().tz(timezone) : moment();
    let available = is_available(JSON.parse(availableTimes), now);
    if (available.is_available) {
      whButtons.forEach((item) => {
        const availableTime = item.getAttribute("data-btnavailablety");
        if (availableTime === availableTimes) {
          item.classList.add("avatar-active");
          item.classList.remove("avatar-inactive");
        }
      });
    } else {
      whButtons.forEach((item) => {
        const availableTime = item.getAttribute("data-btnavailablety");
        if (availableTime === availableTimes) {
          item.classList.add("avatar-inactive");
          item.classList.remove("avatar-active");
        }
      });
    }
  });
}

/******************** 09.SINGLE CHAT AVAILABILITY  ********************/
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

/******************** 10.ADD SUBJECT OR BODY TEXT  ********************/
let value = document.querySelector(".WhatsApptextform")?.getAttribute("href");
let userName = document.getElementById("name");
let userMessage = document.getElementById("message");
if (userName) {
  userName.addEventListener("keyup", (event) => {
    changeHrefValue();
  });
}
if (userMessage) {
  userMessage.addEventListener("keyup", (event) => {
    changeHrefValue();
  });
}

const changeHrefValue = () => {
  let inputChangeValue = {
    nameValue: userName.value,
    messageValue: userMessage.value,
  };
  let changeValue = value.replace(
    /nameValue|messageValue/gi,
    function (matched) {
      return inputChangeValue[matched];
    }
  );
  document.querySelector(".WhatsApptextform").href = changeValue;
};
