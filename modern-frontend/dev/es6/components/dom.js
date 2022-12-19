NodeList.prototype.addEvent = function(evt, fn) {
	var list = this,
	i = 0,
	length = list.length;
	if(length == 0) {return;}
	for (i; i < length; i++) {
		list[i].addEventListener(evt, fn);
	};
};
HTMLCollection.prototype.addClass = function(cls) {
	var list = this,
		i = 0,		
		length = list.length;
	for (i ; i < length; i++) {
		list[i].classList.add(cls);
	};
};
HTMLCollection.prototype.removeClass = function(cls) {
	var list = this,
		i = 0,		
		length = list.length;
	for (i ; i < length; i++) {
		list[i].classList.remove(cls);
	};
};
NodeList.prototype.addClass = function(cls) {
	var list = this,
		i = 0,		
		length = list.length;
	for (i ; i < length; i++) {
		list[i].classList.add(cls);
	};
};
NodeList.prototype.removeClass = function(cls) {
	var list = this,
		i = 0,		
		length = list.length;
	for (i ; i < length; i++) {
		list[i].classList.remove(cls);
	};
};