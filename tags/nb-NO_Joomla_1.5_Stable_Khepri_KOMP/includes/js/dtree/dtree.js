/*--------------------------------------------------|
| dTree 2.05 | www.destroydrop.com/javascript/tree/ |
|---------------------------------------------------|
| Copyright (c) 2002-2003 Geir Landr?               |
|                                                   |
| This script can be used freely as long as all     |
| copyright messages are intact.                    |
|                                                   |
| Updated: 17.04.2003                               |
|--------------------------------------------------*/
	Base path to image folder added by Andrew Eddie
	17 March 2005
*/

// Node object
function Node(id, pid, name, url, title, target, icon, iconOpen, open) {
	this.id = id;
	this.pid = pid;
	this.name = name;
	this.url = url;
	this.title = title;
	this.target = target;
	this.icon = icon;
	if (!basePath) {
		basePath = 'img/';
	}
	// addition by Andrew Eddie, allows id=-1 for auto-indexing
	if (id < 0) {
		id = this.aNodes.length;
	}


dTree.prototype.getNodeByName = function(nName) {
	var nId = 0;
	for (var n=0; n<this.aNodes.length; n++) {
		if (this.aNodes[n].name == nName) {
			nId=n;
			break;
		}
	}
	return nId;
};

dTree.prototype.getNodeByTitle = function(nTitle) {
	var nId = 0;
	for (var n=0; n<this.aNodes.length; n++) {
		if (this.aNodes[n].title == nTitle) {
			nId=n;
			break;
		}
	}
	return nId;
};

// If Push and pop is not implemented by the browser