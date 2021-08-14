function getObject(obj) {
	var  theObj
	if (document.layers) {
		if (typeof obj == 'string') {
			return document.layers[obj]
		} else {
			return obj
		}
	}
	if (document.all) {
		if (typeof obj == 'string') {
			return document.all(obj).style
		} else {
			return obj.style
		}
	}
	if (document.getElementById) {
		if (typeof obj == 'string') {
			return document.getElementById(obj).style
		} else {
			return obj.style
		}
	}
	return null;
}

function hide(obj) {
	var theObj = getObject(obj)
	theObj.visibility ='hidden'
}

function show(obj) {
	var theObj = getObject(obj)
	theObj.visibility ='visible'
}

function showd(obj) {
	var theObj = getObject(obj)
	theObj.display = ''
}

function hided(obj) {
	var theObj = getObject(obj)
	theObj.display = 'none'
}

function pokaz(obj,obj2) {
var theObj = getObject(obj)
var theObj2 = getObject(obj2)
  if (theObj.visibility == 'hidden') { theObj2.filter='alpha(opacity=100)';  theObj2.border='1 outset black';}
  else { theObj2.filter='alpha(opacity=40)';  theObj2.border='1 groove transparent';}
}
