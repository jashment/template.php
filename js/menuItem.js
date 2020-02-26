"use strict";

var currentUrl = location.href

var resultsArray = currentUrl.split('/')

var numberOfParts = resultsArray.length

var pieceINeed = resultsArray[numberOfParts - 1]
console.log(pieceINeed)

var menu = document.querySelectorAll("ul#primaryNav li a");
console.log(menu)
console.log(menu[0].getAttribute("href"));

var i;

for (i = 0; i < menu.length; i++) {
    var activePage = menu[i].getAttribute("href")

    var currentArray = activePage.split("?")
    currentArray = currentArray[0]
    currentArray = currentArray.split('#')

    activePage = currentArray[0]

    if (activePage === pieceINeed) {
        menu[i].parentNode.className = "active"
        menu[i].parentNode.parentNode.parentNode.className = "parent"
    } else {
        menu[i].parentNode.className = ""
    }
}

