'use strict';   // Mode strict du JavaScript

/*************************************************************************************************/
/* *********************************** FONCTIONS UTILITAIRES *********************************** */
/*************************************************************************************************/


function showImage(source) {
	document.write('<img src= "' + source + '">')
}

function getRandomInteger(min, max)
{
	return Math.floor(Math.random() * (max - min + 1)) + min;
}

function requestInteger(message, min, max)
{
    var integer;
	
	do
    {
        integer = parseInt(window.prompt(message));
    }
    while(isNaN(integer) == true || integer < min || integer > max);

    return integer;
}

function initEvent(selector, event, eventHandler)
{
    document.querySelector(selector).addEventListener(event, eventHandler);
}


/*Local Storage*/
function saveDomStorage(name, data) {
    var jsonData = JSON.stringify(data);
    localStorage.setItem(name, jsonData);
}

function loadDomStorage(name) {
    var jsonData = localStorage.getItem(name);
    return JSON.parse(jsonData);
}


/* Change feuille de style */
function changeStyle(origin, target) {
    var head_links = document.querySelectorAll('head link');
    for (var i = 0; i < head_links.length; i++) {
        if (head_links[i].getAttribute('href') == origin) {
            head_links[i].setAttribute('href', target);
        }
    }
}

