function changewidth(option) {
	var doc = $('body').firstDescendant();		
	$(doc).writeAttribute('id', option);
}

function changenavside(option) {
	var doc = $('body').firstDescendant();
	if (option == -1) {
	    $(doc).writeAttribute('class', '');
	} else {
	    var yuitype = Number($('navwidth').getValue()) + Number(option);			
		$(doc).writeAttribute('class', 'yui-t'+yuitype);
	}
}

function changenavwidth(option) {
	var doc = $('body').firstDescendant();
	if ($('navside').getValue() == -1) {
	    $(doc).writeAttribute('class', '');
	} else {
	    var yuitype = Number($('navside').getValue()) + Number(option);			
		$(doc).writeAttribute('class', 'yui-t'+yuitype);
	}
}

function changelayout1(option)
{
	switch (option) {
	  case "25-75.htm":
	    $('row1').writeAttribute('class', 'yui-gf');
	    break;
	  case "33-66.htm":
	    $('row1').writeAttribute('class', 'yui-gd');
	    break;
	  case "50-50.htm":
	    $('row1').writeAttribute('class', 'yui-g');
	    break;
	  case "66-33.htm":
	    $('row1').writeAttribute('class', 'yui-gc');
	    break;
	  case "75-25.htm":
	    $('row1').writeAttribute('class', 'yui-ge');
	    break;
	}    
}
function AdminOff(newstate) {
	var pars = "module=Users&type=ajax&func=noobthemeSetAdmin&newstate=" + newstate;
    var myAjax = new Ajax.Request(
        document.location.pnbaseURL + 'ajax.php',
        {
            method: 'post',
            parameters: pars
        });

}