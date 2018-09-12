function popitup(url) {
	newwindow=window.open(url,'name','height=250,width=750');
	if (window.focus) {newwindow.focus()}
	return false;
}
