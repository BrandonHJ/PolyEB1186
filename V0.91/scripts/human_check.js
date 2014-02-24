// Set up
addEvent(window, "load", setUpHumanTest, false);
function setUpHumanTest() {
var myforms = document.getElementsByTagName("form") ;
for (var i=0; i <= myforms.length; i++) {
addEvent(myforms[i], "focus", markAsHuman, false);
addEvent(myforms[i], "click", markAsHuman, false);
}
}
 
// Identify a human
function markAsHuman() {
document.getElementById("humancheck").value = "definitelyhuman";
}
 
// Generic cross-browser code for attaching events to elements
// You should really have this in a separate common JS file
var addEvent;
if (document.addEventListener) {
addEvent = function(element, type, handler) {
element.addEventListener(type, handler, null);
if (element.href) element.href="javascript:void('');" ;
}
}
else if (document.attachEvent) {
addEvent = function(element, type, handler) {
element.attachEvent("on" + type, handler);
if (element.href) element.href="javascript:void('');" ;
}
}
else {
addEvent = new Function; // not supported
}