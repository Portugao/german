window.onload=rollup;

/*
// +----------------------------------------------------------------------+
// | Copyright (c) 2004 Bitflux GmbH                                      |
// +----------------------------------------------------------------------+
// | Licensed under the Apache License, Version 2.0 (the "License");      |
// | you may not use this file except in compliance with the License.     |
// | You may obtain a copy of the License at                              |
// | http://www.apache.org/licenses/LICENSE-2.0                           |
// | Unless required by applicable law or agreed to in writing, software  |
// | distributed under the License is distributed on an "AS IS" BASIS,    |
// | WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or      |
// | implied. See the License for the specific language governing         |
// | permissions and limitations under the License.                       |
// +----------------------------------------------------------------------+
// | Author: Bitflux GmbH <devel@bitflux.ch>                              |
// +----------------------------------------------------------------------+
*/
var liveSearchReq = false;
var t = null;
var liveSearchLast = "";
	
var isIE = false;
// on !IE we only have to initialize it once
if (window.XMLHttpRequest) {
	liveSearchReq = new XMLHttpRequest();
}

function liveSearchInit() {
	
	if (navigator.userAgent.indexOf("Safari") > 0) {
		document.getElementById('livesearch').addEventListener("keydown",liveSearchKeyPress,false);
//		document.getElementById('livesearch').addEventListener("blur",liveSearchHide,false);
	} else if (navigator.product == "Gecko") {
		
		document.getElementById('livesearch').addEventListener("keypress",liveSearchKeyPress,false);
		document.getElementById('livesearch').addEventListener("blur",liveSearchHideDelayed,false);
		
	} else {
		document.getElementById('livesearch').attachEvent('onkeydown',liveSearchKeyPress);
//		document.getElementById('livesearch').attachEvent("onblur",liveSearchHide,false);
		isIE = true;
	}
	
	document.getElementById('livesearch').setAttribute("autocomplete","off");

}

function liveSearchHideDelayed() {
	window.setTimeout("liveSearchHide()",400);
}
	
function liveSearchHide() {
	document.getElementById("LSResult").style.display = "none";
	var highlight = document.getElementById("LSHighlight");
	if (highlight) {
		highlight.removeAttribute("id");
	}
}

function liveSearchKeyPress(event) {
	
	if (event.keyCode == 40 )
	//KEY DOWN
	{
		highlight = document.getElementById("LSHighlight");
		if (!highlight) {
			highlight = document.getElementById("LSShadow").firstChild.firstChild;
		} else {
			highlight.removeAttribute("id");
			highlight = highlight.nextSibling;
		}
		if (highlight) {
			highlight.setAttribute("id","LSHighlight");
		} 
		if (!isIE) { event.preventDefault(); }
	} 
	//KEY UP
	else if (event.keyCode == 38 ) {
		highlight = document.getElementById("LSHighlight");
		if (!highlight) {
			highlight = document.getElementById("LSResult").firstChild.firstChild.lastChild;
		} 
		else {
			highlight.removeAttribute("id");
			highlight = highlight.previousSibling;
		}
		if (highlight) {
				highlight.setAttribute("id","LSHighlight");
		}
		if (!isIE) { event.preventDefault(); }
	} 
	//ESC
	else if (event.keyCode == 27) {
		highlight = document.getElementById("LSHighlight");
		if (highlight) {
			highlight.removeAttribute("id");
		}
		document.getElementById("LSResult").style.display = "none";
	} 
}
function liveSearchStart() {
	if (t) {
		window.clearTimeout(t);
	}
	t = window.setTimeout("liveSearchDoSearch()",200);
}

function liveSearchDoSearch() {

	if (typeof liveSearchRoot == "undefined") {
		liveSearchRoot = "";
	}
	if (typeof liveSearchRootSubDir == "undefined") {
		liveSearchRootSubDir = "";
	}
	if (typeof liveSearchParams == "undefined") {
		liveSearchParams = "";
	}
	if (liveSearchLast != document.forms.searchform.q.value) {
	if (liveSearchReq && liveSearchReq.readyState < 4) {
		liveSearchReq.abort();
	}
	if ( document.forms.searchform.q.value == "") {
		liveSearchHide();
		return false;
	}
	if (window.XMLHttpRequest) {
	// branch for IE/Windows ActiveX version
	} else if (window.ActiveXObject) {
		liveSearchReq = new ActiveXObject("Microsoft.XMLHTTP");
	}
	liveSearchReq.onreadystatechange= liveSearchProcessReqChange;
	liveSearchReq.open("GET", liveSearchRoot + "/livesearch.php?q=" + document.forms.searchform.q.value + liveSearchParams);
	liveSearchLast = document.forms.searchform.q.value;
	liveSearchReq.send(null);
	}
}

function liveSearchProcessReqChange() {
	
	if (liveSearchReq.readyState == 4) {
		var  res = document.getElementById("LSResult");
		res.style.display = "block";
		var  sh = document.getElementById("LSShadow");
		
		sh.innerHTML = liveSearchReq.responseText;
		 
	}
}

function liveSearchSubmit() {
	var highlight = document.getElementById("LSHighlight");
	if (highlight && highlight.firstChild) {
		window.location = liveSearchRoot + liveSearchRootSubDir + highlight.firstChild.nextSibling.getAttribute("href");
		return false;
	} 
	else {
		return true;
	}
}

function rollout(objMenuitem, objEvent)
{
    var iKeyCode;

    // Check if from a keyboard - non IE, but
    // irrelevant as tab doesn't trigger the 
    // keypress event in IE
    if (objEvent && objEvent.type == 'keypress')
    {
        if (objEvent.keyCode)
            iKeyCode = objEvent.keyCode;
        else if (objEvent.which)
            iKeyCode = objEvent.which;

        // If it's not the enter key or space key, 
        // pass control back to the browser
        if (iKeyCode != 13 && iKeyCode != 32)
            return true;
    }

    // Work out what we need to do
    if (objMenuitem.nextSibling.style.display == 'block')
        var strDisplay = 'none'
    else
        var strDisplay = 'block';

    // Close any nested lists that are open
    var objMenu = document.getElementById('mainnav');
    var objNested = objMenu.getElementsByTagName('ul');

    for (var i=0; i<objNested.length; i++)
        if (objNested[i].style.display == 'block')
            objNested[i].style.display = 'none';

    objMenuitem.nextSibling.style.display = strDisplay;
    
    // Keep any parent menus for this item open
    while (objMenuitem.parentNode.parentNode.id != 'mainnav')
    {
        objMenuitem = objMenuitem.parentNode.parentNode;
        objMenuitem.style.display = 'block';
    }

    // Stop the browser requesting the link
    return false;
}

function rollup()
{
    var bRollup, objLinks, objNode, objAnchor;

    // Check we're working with a DOM compliant browser
    if (document.getElementById && document.createElement)
    {
        var strLocation = window.location;

        var objMenu = document.getElementById('mainnav');

        var objNested = objMenu.getElementsByTagName('ul');

        // Hide each of the nested unordered list
        for (var i=0; i<objNested.length; i++)
        {
            // Only hide, if the current location is not found in the list
            bRollup = true;
            objLinks = objNested[i].getElementsByTagName('a');

            for (var j=0; j<objLinks.length; j++)
            {
                if (objLinks[j].href == strLocation)
                {
                    bRollup = false;

                    // Added by John Hunter
                    // remove link for current page
                    objNode = objLinks[j];
                    strContent = objNode.firstChild.data;
                    var objCurrentPage = document.createElement('strong');
                    objCurrentPage.appendChild(document.createTextNode(strContent));
                    objNode.parentNode.replaceChild(objCurrentPage, objNode);

                    // Add an id so we can keep the parents open
                    objCurrentPage.id = 'jsKeepOpen';
                }

            }

            if (bRollup == true)
                objNested[i].style.display = 'none';
            else
                objNested[i].style.display = 'block';

            // Place the top-level text in an anchor tag
            objNode = objNested[i].parentNode;

            strContent = objNode.firstChild.data;

            objAnchor = document.createElement('a');
            objAnchor.href = '#';
            objAnchor.onclick = function(event){return rollout(this, event);}
            objAnchor.onkeypress = function(event){return rollout(this, event);}
            objAnchor.appendChild(document.createTextNode(strContent));

            objNode.replaceChild(objAnchor, objNode.firstChild);
        }

        // Keep any parent menus for the current item
        if (document.getElementById('jsKeepOpen'))
        {
            var objKeepOpen = document.getElementById('jsKeepOpen');
            while (objKeepOpen.parentNode.id != 'mainnav')
            {
                objKeepOpen = objKeepOpen.parentNode;
                objKeepOpen.style.display = 'block';
            }
        }
    }
    // add the second onload function
    liveSearchInit();
}