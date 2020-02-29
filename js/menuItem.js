"use strict";

var currentUrl = location.href

var resultsArray = currentUrl.split('/')

var numberOfParts = resultsArray.length

var pieceINeed = resultsArray[numberOfParts - 1]

var menu = document.querySelectorAll("ul#primaryNav li a");
var menu2 = document.querySelectorAll("ul#primaryNav li ul li a")

var i;

for (i = 0; i < menu.length; i++) {
    var activePage = menu[i].getAttribute("href")
    // console.log(activePage)
    var currentArray = activePage.split("?")
    // console.log(currentArray)
    var currentArray2 = currentArray[0]
    // console.log(currentArray2)
    var currentArray3 = currentArray2.split('#')
    // console.log(currentArray3)
    var activePage2 = currentArray3[0]
    // console.log(activePage2)

    if (activePage2 === pieceINeed) {
        console.log(activePage2)
        console.log(pieceINeed)
        menu[i].parentNode.className = "active"
        menu[i].parentNode.parentNode.parentNode.className = "parent"
    } else {
        menu[i].parentNode.className = ""
        console.log(activePage2)
        console.log(pieceINeed)
    }
}

for (i = 0; i < menu2.length; i++) {
    var activePage = menu2[i].getAttribute("href")
    // console.log(activePage)
    var currentArray = activePage.split("?")
    // console.log(currentArray)
    var currentArray2 = currentArray[0]
    // console.log(currentArray2)
    var currentArray3 = currentArray2.split('#')
    // console.log(currentArray3)
    var activePage2 = currentArray3[0]
    // console.log(activePage2)
    // console.log(pieceINeed)
    if (activePage === pieceINeed) {
        // console.log(activePage)
        // console.log(pieceINeed)
        // menu2[i].parentNode.className = "active"
        menu2[i].parentNode.parentNode.parentNode.childNodes[1] = "active"
        menu2[i].parentNode.parentNode.parentNode.className = "parent"
        // console.log(menu2[i].parentNode.parentNode.parentNode)
    } else {
        menu2[i].parentNode.className = ""

    }
}

