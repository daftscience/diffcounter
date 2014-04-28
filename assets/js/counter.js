var editing = false;
var adding = true;
var countTo = 100;
var KeyID;
var diffName;
var nag = false;
var seedCells = {
    Neutrophils: "neut",
    "Bands Cells": "band",
    Lymphocytes: "lymph",
    Monocytes: "mono",
    Eosinophils: "eos",
    Basophils: "baso",
    Metamyelocytes: "meta",
    Myelocytes: "myelo",
    Promyelocytes: "pro",
    Blasts: "blast",
    NRBCs: "nrbc",
    Others: "other",
    Megakaryocytes: "mega",
    "Plasma Cells": "plasma"
};
var whichIE;
window.onload = function () {
    
//attach onlcicks    
    $("#subtractBTN").click(function(){ toggleSubtract('toggle'); });
    $("#resetBTN").click(function(){ resetForm(); });
    $("#editBTN").click(function(){ toggleDisable(); });
    $("#printBTN").click(function(){ window.print(); });
    
    //    document.getElementsByClassName('count')
    // IE7 support for querySelectorAll in 226 bytes... It's a little slow but better than a 20kb solution when you need something cross platform and lightweight.
if(whichIE == 7){
    window.alert("omg y u still using ie 7?");
    (function(d,s){d=document,s=d.createStyleSheet();d.querySelectorAll=function(r,c,i,j,a){a=d.all,c=[],r=r.replace(/\[for\b/gi,'[htmlFor').split(',');for(i=r.length;i--;){s.addRule(r[i],'k:v');for(j=a.length;j--;)a[j].currentStyle.k&&c.push(a[j]);s.removeRule(0)}return c}})()
}
    var anchors = document.querySelectorAll('.count');
    for (var i = 0; i < anchors.length; i++) {
        var anchor = anchors[i];
        anchor.onclick = function () {
            increment(this);
        }
        anchor.onfocus = function () {
            this.style.backgroundColor = window.focused
        };
        anchor.onblur = function () {
            this.style.backgroundColor = ''
        };
    }
    diffName = document.getElementById("diffName");
    resetForm();
}
jQuery(document).keydown(function (e) {
    KeyCheck(e);
    $('#debug').html("Key pressed: " + e.keyCode + "<br /> Editing =" + editing + "<br /> Adding = " + adding + "<br /> Nagging = " + nag);
});

//This functions is here because IE thinks it only needs to show the fa-awesome 
//icons the first time the page is loaded.  I don't think its being called? look into this
function refresh() {
    $(function () {
        var head = document.getElementsByTagName('head')[0],
            style = document.createElement('style');
        style.type = 'text/css';
        style.styleSheet.cssText = ':before,:after{content:none !important';
        head.appendChild(style);
        setTimeout(function () {
            head.removeChild(style);
        }, 0);
    });
}

//resize header on scroll
$(document).on("scroll", function () {
    if ($(document).scrollTop() > 100) {
        $("header").addClass("shrink");
    } else {
        $("header").removeClass("shrink");
    }
});

function resetForm() {
    //Returns counter to addition mode. 
    toggleSubtract('add');
    //Returns max counter to 100
    // Loops through inputs and reselts all inputs in cellForm
    var inputs = document.getElementsByTagName("INPUT");
    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].className == 'count') {
            inputs[i].value = "";
        }
    }
    var elements = document.querySelectorAll('.progress-bar.progress-bar-theme');
    for (var j = 0, len = elements.length; j < len; j++) {
        elements[j].style.width = 0 + '%';
        elements[j].children[0].innerHTML = 0 + '%';
    }
    var inputs = document.querySelectorAll('.count');
    for (var i = 0; i < inputs.length; i++) {
        inputs[i].readOnly = "readonly";
    }
    recalc();
    editing = false;
    toggleLockIcon();
    changeAlert('ready');
    //	  disabled = "true";
    //diffName.value = '';
    diffName.disabled = true;

    document.getElementById('c100').click();




} //CLeaned..kinda?
//Changes the status on the top.
function changeAlert(activateAlert) {
    //    document.getElementsByClassName('changeable')
    var list = $(document.querySelectorAll('.changeable'));
    $.each(list, function (index, data) {
        jQuery(this).hide();
    });
    jQuery('#' + activateAlert).show();
} //cleaned

function toggleLockIcon() {
//    window.alert("toggle lock icons");
    var list = $(document.querySelectorAll('.lockIcons'));
    $.each(list, function (index, data) {
        jQuery(this).removeClass("fa-lock");
        jQuery(this).removeClass("fa-unlock");
        if (editing == false) {
            //			window.alert("locking soon edititing = "+ editing);
            jQuery(this).addClass("fa-lock");
            //			window.alert("should be locked");
        } else {
            //		  window.alert("unlocking soon");
            jQuery(this).addClass("fa-unlock");
            //			window.alert("should be unlocked");
        }
    });

}

function toggleSubtract(mode) {
    switch (mode) {
    case 'toggle':
        if (!adding) {
            changeAlert('ready');
        } else {
            changeAlert('subtract');
        }
        adding = !adding;
        break;
    case 'subtract':
        adding = false;
        changeAlert('subtract');
        recalc(); //just incase, to make sure nothing funny happened.
        //Also this is a quick way to clean up the zeros
        break;
    case 'add':
        adding = true;
        changeAlert('ready');
        recalc(); //just incase, to make sure nothing funny happened.
        //Also this is a quick way to clean up the zeros
        break;
    default:
        adding = true;
    }
    $('#subtractIcon').addClass("fa-minus");
    $('#subtractIcon').addClass("fa-plus");
    $('#subtractBTN').addClass("btn-warning");
    $('#subtractBTN').addClass("btn-success");

    if (!adding) {
        //adding opposite because button will enable the other event, not the current state.
        $('#subtractIcon').removeClass("fa-minus");
        $('#subtractBTN').removeClass("btn-warning");
    } else {
        $('#subtractIcon').removeClass("fa-plus");
        $('#subtractBTN').removeClass("btn-success");
    }

}

function toggleDisable() {
    //switch back to addition mode.
    document.getElementById('safeFocus').focus();
    var ae = document.activeElement.nodeName.toLowerCase();
    try {
        // Support: IE9+
        // If the <body> is blurred, IE will switch windows, see #9520
        if (document.activeElement && ae !== "body" && ae !== "html") {
            // Blur any element that currently has focus, see #4261
            $(document.activeElement).blur();
        }
    } catch (error) { window.alert("error");    
    }
    
    toggleSubtract('addEdit');

    //check if the disabled flag is set and toggle it. Change content to refect the new mode.
    if ($('#edit').is(':visible')) {
        changeAlert('ready');
    } else {
        changeAlert('edit');
    }
    diffName.disabled = editing;
    editing = !editing;
    //window.alert("icons should toggle here");
    toggleLockIcon();
    //Runs through all the variables and toggles whether or not they are 
    //enabled. This will also change the appearence of them to reflect the
    //current mode. 
    var tot = 0;
    var inputs = document.querySelectorAll('.count');
    for (var i = 0; i < inputs.length; i++) {
        inputs[i].readOnly = !inputs[i].readOnly;
    }
    recalc();
} //kinda cleaned

function increment(cell) {
    var tot = parseInt(document.getElementById('total').innerHTML);
    //    var max = parseInt(document.getElementById('maxNum').value);
    if (editing) {
        return;
    }
    if (adding && tot < countTo) {
        cell.value++;
    } else {
        if (!adding && cell.value > 0 && cell.value != '') {
            cell.value--;
        }
    }

    //    if (!hasIE_ughhh) {
    cell.focus();
    //    }
    recalc();
} //inda cleaned

function setfocus(cell) {
    if (cell.style.display === "block") {
        var x = window.scrollX,
            y = window.scrollY;
        cell.focus();
        window.scrollTo(x, y);
    }
}

function KeyCheck(evt) {
    //Reads the key presses
    //    window.alert(diffName.id);
    KeyID = evt.keyCode;
    if ($(diffName).is(":focus")) {
        if (KeyID == "13") {
            //            window.alert("test");
            $(diffName).blur();
            KeyID = 69;
        } else {
            return;
        }
    }
    //document.get(Element
    var cell = '';
    //Picks the Key
    switch (KeyID) {
    case 98:
    case 49:
        // 2
        cell = 'neut';
        break;
    case 97:
    case 50:
        //1 
        cell = 'band';
        break;
    case 99:
    case 51:
        //3
        cell = 'lymph';
        break;
    case 102:
    case 52:
        //6
        cell = 'mono';
        break;
    case 101:
    case 53:
        //5
        cell = 'eos';
        break;
    case 100:
    case 54:

        //4
        cell = 'baso';
        break;
    case 103:
    case 55:
        //7
        cell = 'meta';
        break;
    case 104:
    case 56:
        //8
        cell = 'myelo';
        break;
    case 105:
    case 57:
        //9
        cell = 'pro';
        break;
    case 110:
    case 48:
        //0 or . I forget
        cell = 'blast';
        break;
    case 96:
        //0 or . I forget
        cell = 'nrbc';
        break;
    case 65:
        //o
        cell = 'other';
        break;
    case 106:
        //* or / i forget
        cell = 'mega';
        break;
    case 111:
        //* or / i forget
        cell = 'plasma';
        break;
        // Modes
    case 36:
    case 38:
    case 33:
    case 37:
    case 12:
    case 39:
    case 35:
    case 40:
    case 34:
        //$('#numlock').show();
        return;
    case 144: //dismiss numlock
        // $('#numlock').hide();
        return;
    case 68: //debug mode:
        $('#debug').toggle();
        evt.preventDefault();
        return;
    case 69: //edit mode
        //For some reason internet explorer will display the page properly if I do this times three. #whatTheFuck!
        toggleDisable();
        evt.preventDefault();
        return;
    case 82: //reset
        resetForm();
        evt.preventDefault();
        return;
    case 78:
        //n
        return;
    case 189:
    case 109:
        //-
        toggleSubtract('toggle');
        evt.preventDefault();
        return;
    case 187:
    case 107:
        //+
        toggleSubtract('add');
        evt.preventDefault();
        return;
    default:
        return;
    }
    var cellElem = document.getElementById(cell);
    //increments

    if (!editing) {
        increment(cellElem);
        evt.preventDefault();
    }
}


function recalc() {
    var tot = 0;
    var inputs = document.getElementsByTagName("INPUT");
    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].className == 'count') {
            var unNormalized = [inputs[i].id, "Norm"];
            var cellNorm = unNormalized.join('');
            //window.alert(cellNorm);
            if (inputs[i].value === '0') {
                inputs[i].value = '';
            }
            var intRegex = /^\d+$/;
            intCheck = parseInt(inputs[i].value);
            if (intRegex.test(intCheck) && inputs[i].id != 'nrbc' && inputs[i].id != 'mega') {
                tot += intCheck;
            }
        }
    }

    document.getElementById('total').innerHTML = tot;
    normalize();


    //Check if finished with diff
    //    document.getElementById('maxNum').value

    if (tot < countTo) {
        nag = false;
    }
    if (tot > countTo && !nag) {
        window.alert("someone's an overachiever, you've somehow counted more than " + countTo + " cells!");
        nag = true;
    }
    if (tot == countTo && !nag) {
        if (!editing && !nag) {
            changeAlert('done');
            window.alert('way to go!');
            nag = true;
        }
    }
}
if (window.addEventListener) {
    // create the keys and konami variables
    var keys = [],
        konami = "38,38,40,40,37,39,37,39,66,65",
        debug = "38,38,38,40,40,40",
        jillian = "74,73,76,76,73,65,78",
        kitty = "75,73,84,84,89";

    // bind the keydown event to the Konami function
    window.addEventListener("keydown", function (e) {
        // push the keycode to the 'keys' array
        keys.push(e.keyCode);
        // and check to see if the user has entered the Konami code
        if (keys.toString().indexOf(konami) >= 0) {
            // do something such as:
            document.getElementById('tardis').play();
            $('#wylajb').show();
            // and finally clean up the keys array
            keys = [];
        }
        if (keys.toString().indexOf(debug) >= 0) {
            // do something such as:
            $('#debug').toggle();
            // and finally clean up the keys array
            keys = [];
        }
        if (keys.toString().indexOf(kitty) >= 0) {
            // do something such as:
            window.location.href = "https://www.youtube.com/watch?v=Dt4zvJNXbdI";
            // and finally clean up the keys array
            keys = [];
        }

    }, true);
} //cleaned
function seedHTML(whichTable) {

    if (whichTable === "cells") {
        for (var cell in seedCells) {
            if (seedCells.hasOwnProperty(cell)) {
                document.write("<tr><td>");

                if (!hasIE_ughhh) {
                    document.write("<input type='number' id='");
                } else {
                    document.write("<input type='text' id='");
                }

                document.write(seedCells[cell]);
                document.write("' value='' class='count' readOnly/>");
                document.write("</td><td>");
                document.write(cell + "</td></tr>");
            }
        }
    } else {
        for (var cell in seedCells) {
            if (seedCells.hasOwnProperty(cell)) {
                document.write("<div class='progress progress-striped'>");
                document.write("<div id='" + seedCells[cell] + "Prog'");
                document.write("class='progress progress-bar progress-bar-theme text-right' role='progressbar'");
                document.write("aria-valuenow='100' aria-valuemin='0' aria-valuemax='100'");
                document.write("style='width: 0%; min-width='100px;''>");
                document.write("<span class='progress-text text-right'>0%</span></div></div>");
            }
        }

    }
}
function normalize() {
    var runningTotal = document.getElementById('total').innerHTML;
    var inputs = document.getElementsByTagName("INPUT");
    var tot = 0;
    for (var i = 0; i < inputs.length; i++) {
        var currentCell = '';
        if (inputs[i].className == 'count') {
            var unNormalized = [inputs[i].id, 'Prog'];
            var cellProg = unNormalized.join('');
            if (inputs[i].value === '0' || inputs[i].value === '') {
                currentCell = '';
            }
            var intRegex = /^\d+$/;
            intCheck = parseInt(inputs[i].value);
            if (intRegex.test(intCheck) && inputs[i].id != 'nrbc' && inputs[i].id != 'mega') {
                currentCell = ((intCheck / runningTotal) * 100);

                document.getElementById(cellProg).style.width = parseInt(currentCell) + '%';
                document.getElementById(cellProg).children[0].innerHTML = parseInt(currentCell) + '%';
                //IEFIX
                //                document.getElementById(cellProg).firstElementChild.innerHTML = parseInt(currentCell) + '%';
                //}
                //to here. Except up there
                tot += currentCell;
            }
        }
    }
    document.getElementById('totalNorm').value = tot;
    if (tot > 0) {
        document.getElementById('nrbcProg').style.width = parseInt((document.getElementById('nrbc').value / tot) * 100) + '%';
        document.getElementById('nrbcProg').children[0].innerHTML = parseInt((document.getElementById('nrbc').value / tot) * 100) + '%';
        document.getElementById('megaProg').style.width = parseInt((document.getElementById('mega').value / tot) * 100) + '%';
        document.getElementById('megaProg').children[0].innerHTML = parseInt((document.getElementById('mega').value / tot) * 100) + '%';
    }

}
function changeCount(countSelected) {
    countTo = countSelected.value;
}

