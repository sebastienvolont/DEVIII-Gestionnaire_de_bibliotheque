(self["webpackChunk"] = self["webpackChunk"] || []).push([["test"],{

/***/ "./assets/test.js":
/*!************************!*\
  !*** ./assets/test.js ***!
  \************************/
/***/ (() => {

function rechercherLivreApi() {
  var xhr = new XMLHttpRequest();
  xhr.onload = recupererDonnees;
  xhr.open("get", "http://localhost:8000/api/livres/2", true);
  xhr.send();
}

function recupererDonnees() {
  return this.responseText;
}

rechercherLivreApi();

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ "use strict";
/******/ 
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ var __webpack_exports__ = (__webpack_exec__("./assets/test.js"));
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvdGVzdC5qcyJdLCJuYW1lcyI6WyJyZWNoZXJjaGVyTGl2cmVBcGkiLCJ4aHIiLCJYTUxIdHRwUmVxdWVzdCIsIm9ubG9hZCIsInJlY3VwZXJlckRvbm5lZXMiLCJvcGVuIiwic2VuZCIsInJlc3BvbnNlVGV4dCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7QUFBQSxTQUFTQSxrQkFBVCxHQUE2QjtBQUN6QixNQUFJQyxHQUFHLEdBQUcsSUFBSUMsY0FBSixFQUFWO0FBQ0FELEtBQUcsQ0FBQ0UsTUFBSixHQUFhQyxnQkFBYjtBQUNBSCxLQUFHLENBQUNJLElBQUosQ0FBUyxLQUFULEVBQWdCLG9DQUFoQixFQUFzRCxJQUF0RDtBQUNBSixLQUFHLENBQUNLLElBQUo7QUFDSDs7QUFFRCxTQUFTRixnQkFBVCxHQUE2QjtBQUN6QixTQUFPLEtBQUtHLFlBQVo7QUFDSDs7QUFFRFAsa0JBQWtCLEciLCJmaWxlIjoidGVzdC5qcyIsInNvdXJjZXNDb250ZW50IjpbImZ1bmN0aW9uIHJlY2hlcmNoZXJMaXZyZUFwaSgpe1xyXG4gICAgbGV0IHhociA9IG5ldyBYTUxIdHRwUmVxdWVzdCgpO1xyXG4gICAgeGhyLm9ubG9hZCA9IHJlY3VwZXJlckRvbm5lZXM7XHJcbiAgICB4aHIub3BlbihcImdldFwiLCBcImh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hcGkvbGl2cmVzLzJcIiwgdHJ1ZSk7XHJcbiAgICB4aHIuc2VuZCgpO1xyXG59XHJcblxyXG5mdW5jdGlvbiByZWN1cGVyZXJEb25uZWVzICgpIHtcclxuICAgIHJldHVybiB0aGlzLnJlc3BvbnNlVGV4dDtcclxufVxyXG5cclxucmVjaGVyY2hlckxpdnJlQXBpKCk7Il0sInNvdXJjZVJvb3QiOiIifQ==