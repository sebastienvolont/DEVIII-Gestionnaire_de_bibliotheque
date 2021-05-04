(self["webpackChunk"] = self["webpackChunk"] || []).push([["affichagelivre"],{

/***/ "./assets/AffichageLivre.js":
/*!**********************************!*\
  !*** ./assets/AffichageLivre.js ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.array.map.js */ "./node_modules/core-js/modules/es.array.map.js");
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.reflect.construct.js */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var _app_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! ./app.js */ "./assets/app.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react_dom__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! react-dom */ "./node_modules/react-dom/index.js");
/* harmony import */ var _styles_Banner_css__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! ./styles/Banner.css */ "./assets/styles/Banner.css");
/* harmony import */ var _styles_app_css__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! ./styles/app.css */ "./assets/styles/app.css");
/* harmony import */ var _bootstrap__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! ./bootstrap */ "./assets/bootstrap.js");
function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }
















function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }








var FetchLivre = /*#__PURE__*/function (_React$Component) {
  _inherits(FetchLivre, _React$Component);

  var _super = _createSuper(FetchLivre);

  function FetchLivre(props) {
    var _this;

    _classCallCheck(this, FetchLivre);

    _this = _super.call(this, props);
    _this.state = {
      livres: [],
      isLoaded: false
    };
    return _this;
  }

  _createClass(FetchLivre, [{
    key: "componentDidMount",
    value: function componentDidMount() {
      var _this2 = this;

      fetch("http://localhost:8000/api/livres").then(function (livresItems) {
        return livresItems.json();
      }).then(function (response) {
        // console.log(result["hydra:member"][0]["titre"]);
        _this2.setState({
          isLoaded: true,
          livres: response["hydra:member"]
        });
      });
    }
  }, {
    key: "render",
    value: function render() {
      var livres = this.state.livres;
      return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_15__.createElement("div", {
        className: "container"
      }, livres.map(function (livre, i) {
        return (
          /*#__PURE__*/
          // <TestTable key={i} idLivre={livre.idLivre} titre={livre.titre} auteur={livre.auteur}/>
          react__WEBPACK_IMPORTED_MODULE_15__.createElement(AffichageLivre, {
            key: i,
            couverture: livre.couverture,
            titre: livre.titre,
            synopsis: livre.synopsis
          })
        );
      }));
    }
  }]);

  return FetchLivre;
}(react__WEBPACK_IMPORTED_MODULE_15__.Component);

function AffichageLivre(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_15__.createElement("div", {
    className: "row"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_15__.createElement("div", {
    className: "col-xs-10 col-sm-2"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_15__.createElement("img", {
    src: props.couverture,
    className: "card-img-top",
    alt: "..."
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_15__.createElement("div", {
    className: "col-xs-10 col-sm-8"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_15__.createElement("h4", {
    className: "card-title"
  }, props.titre), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_15__.createElement("p", {
    className: "card-text"
  }, props.synopsis)));
}

react_dom__WEBPACK_IMPORTED_MODULE_16__.render( /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_15__.createElement(FetchLivre, null), document.getElementById("sectionLivres"));

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ "use strict";
/******/ 
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_symfony_stimulus-bridge_dist_index_js-node_modules_core-js_modules_es_ar-a07b06","node_modules_symfony_stimulus-bridge_dist_webpack_loader_js_assets_controllers_json-assets_My-71afd7"], () => (__webpack_exec__("./assets/AffichageLivre.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvQWZmaWNoYWdlTGl2cmUuanMiXSwibmFtZXMiOlsiRmV0Y2hMaXZyZSIsInByb3BzIiwic3RhdGUiLCJsaXZyZXMiLCJpc0xvYWRlZCIsImZldGNoIiwidGhlbiIsImxpdnJlc0l0ZW1zIiwianNvbiIsInJlc3BvbnNlIiwic2V0U3RhdGUiLCJtYXAiLCJsaXZyZSIsImkiLCJjb3V2ZXJ0dXJlIiwidGl0cmUiLCJzeW5vcHNpcyIsIlJlYWN0IiwiQWZmaWNoYWdlTGl2cmUiLCJSZWFjdERPTSIsImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7SUFHTUEsVTs7Ozs7QUFDSixzQkFBWUMsS0FBWixFQUFtQjtBQUFBOztBQUFBOztBQUNqQiw4QkFBTUEsS0FBTjtBQUNBLFVBQUtDLEtBQUwsR0FBYTtBQUNYQyxZQUFNLEVBQUUsRUFERztBQUVYQyxjQUFRLEVBQUc7QUFGQSxLQUFiO0FBRmlCO0FBTWxCOzs7O1dBRUQsNkJBQW1CO0FBQUE7O0FBQ2pCQyxXQUFLLENBQUMsa0NBQUQsQ0FBTCxDQUNDQyxJQURELENBQ00sVUFBQUMsV0FBVztBQUFBLGVBQUlBLFdBQVcsQ0FBQ0MsSUFBWixFQUFKO0FBQUEsT0FEakIsRUFFQ0YsSUFGRCxDQUVNLFVBQUNHLFFBQUQsRUFBYztBQUNsQjtBQUNBLGNBQUksQ0FBQ0MsUUFBTCxDQUFjO0FBQ1pOLGtCQUFRLEVBQUcsSUFEQztBQUVaRCxnQkFBTSxFQUFHTSxRQUFRLENBQUMsY0FBRDtBQUZMLFNBQWQ7QUFLSCxPQVRDO0FBVUg7OztXQUNELGtCQUFTO0FBQUEsVUFDQU4sTUFEQSxHQUNVLEtBQUtELEtBRGYsQ0FDQUMsTUFEQTtBQUVQLDBCQUNFO0FBQUssaUJBQVMsRUFBQztBQUFmLFNBQ0NBLE1BQU0sQ0FBQ1EsR0FBUCxDQUFXLFVBQUNDLEtBQUQsRUFBUUMsQ0FBUjtBQUFBO0FBQUE7QUFDSTtBQUNGLDREQUFDLGNBQUQ7QUFBZ0IsZUFBRyxFQUFFQSxDQUFyQjtBQUF3QixzQkFBVSxFQUFFRCxLQUFLLENBQUNFLFVBQTFDO0FBQXNELGlCQUFLLEVBQUVGLEtBQUssQ0FBQ0csS0FBbkU7QUFBMEUsb0JBQVEsRUFBRUgsS0FBSyxDQUFDSTtBQUExRjtBQUZGO0FBQUEsT0FBWCxDQURELENBREY7QUFTRzs7OztFQWhDb0JDLDZDOztBQW1DekIsU0FBU0MsY0FBVCxDQUF3QmpCLEtBQXhCLEVBQThCO0FBQzVCLHNCQUNFO0FBQUssYUFBUyxFQUFDO0FBQWYsa0JBQ0E7QUFBSyxhQUFTLEVBQUM7QUFBZixrQkFDQTtBQUFLLE9BQUcsRUFBRUEsS0FBSyxDQUFDYSxVQUFoQjtBQUE0QixhQUFTLEVBQUMsY0FBdEM7QUFBcUQsT0FBRyxFQUFDO0FBQXpELElBREEsQ0FEQSxlQUlBO0FBQUssYUFBUyxFQUFDO0FBQWYsa0JBQ0E7QUFBSSxhQUFTLEVBQUM7QUFBZCxLQUE0QmIsS0FBSyxDQUFDYyxLQUFsQyxDQURBLGVBRUE7QUFBRyxhQUFTLEVBQUM7QUFBYixLQUNDZCxLQUFLLENBQUNlLFFBRFAsQ0FGQSxDQUpBLENBREY7QUFhRDs7QUFFREcsOENBQUEsZUFDRSxrREFBQyxVQUFELE9BREYsRUFFRUMsUUFBUSxDQUFDQyxjQUFULENBQXdCLGVBQXhCLENBRkYsRSIsImZpbGUiOiJhZmZpY2hhZ2VsaXZyZS5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCAnLi9hcHAuanMnXHJcbmltcG9ydCBSZWFjdCBmcm9tICdyZWFjdCdcclxuaW1wb3J0IFJlYWN0RE9NIGZyb20gJ3JlYWN0LWRvbSdcclxuaW1wb3J0ICcuL3N0eWxlcy9CYW5uZXIuY3NzJ1xyXG5pbXBvcnQgJy4vc3R5bGVzL2FwcC5jc3MnXHJcbmltcG9ydCAnLi9ib290c3RyYXAnO1xyXG5cclxuXHJcbmNsYXNzIEZldGNoTGl2cmUgZXh0ZW5kcyBSZWFjdC5Db21wb25lbnR7XHJcbiAgY29uc3RydWN0b3IocHJvcHMpIHtcclxuICAgIHN1cGVyKHByb3BzKTtcclxuICAgIHRoaXMuc3RhdGUgPSB7XHJcbiAgICAgIGxpdnJlczogW10sXHJcbiAgICAgIGlzTG9hZGVkIDogZmFsc2UsXHJcbiAgICB9XHJcbiAgfVxyXG5cclxuICBjb21wb25lbnREaWRNb3VudCgpe1xyXG4gICAgZmV0Y2goXCJodHRwOi8vbG9jYWxob3N0OjgwMDAvYXBpL2xpdnJlc1wiKVxyXG4gICAgLnRoZW4obGl2cmVzSXRlbXMgPT4gbGl2cmVzSXRlbXMuanNvbigpKVxyXG4gICAgLnRoZW4oKHJlc3BvbnNlKSA9PiB7XHJcbiAgICAgIC8vIGNvbnNvbGUubG9nKHJlc3VsdFtcImh5ZHJhOm1lbWJlclwiXVswXVtcInRpdHJlXCJdKTtcclxuICAgICAgdGhpcy5zZXRTdGF0ZSh7XHJcbiAgICAgICAgaXNMb2FkZWQgOiB0cnVlLFxyXG4gICAgICAgIGxpdnJlcyA6IHJlc3BvbnNlW1wiaHlkcmE6bWVtYmVyXCJdXHJcbiAgICAgIH1cclxuICAgIClcclxuICB9KTtcclxufVxyXG5yZW5kZXIoKSB7XHJcbiAgY29uc3Qge2xpdnJlc30gPSB0aGlzLnN0YXRlO1xyXG4gIHJldHVybiAoXHJcbiAgICA8ZGl2IGNsYXNzTmFtZT1cImNvbnRhaW5lclwiPlxyXG4gICAge2xpdnJlcy5tYXAoKGxpdnJlLCBpKSA9PiAoXHJcbiAgICAgICAgICAgICAgICAgICAgLy8gPFRlc3RUYWJsZSBrZXk9e2l9IGlkTGl2cmU9e2xpdnJlLmlkTGl2cmV9IHRpdHJlPXtsaXZyZS50aXRyZX0gYXV0ZXVyPXtsaXZyZS5hdXRldXJ9Lz5cclxuICAgICAgICAgICAgICAgICAgPEFmZmljaGFnZUxpdnJlIGtleT17aX0gY291dmVydHVyZT17bGl2cmUuY291dmVydHVyZX0gdGl0cmU9e2xpdnJlLnRpdHJlfSBzeW5vcHNpcz17bGl2cmUuc3lub3BzaXN9Lz5cclxuXHJcbiAgICAgICAgICAgICAgICApKX1cclxuICAgICAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgKVxyXG4gICAgfVxyXG59XHJcblxyXG5mdW5jdGlvbiBBZmZpY2hhZ2VMaXZyZShwcm9wcyl7XHJcbiAgcmV0dXJuIChcclxuICAgIDxkaXYgY2xhc3NOYW1lPVwicm93XCI+XHJcbiAgICA8ZGl2IGNsYXNzTmFtZT1cImNvbC14cy0xMCBjb2wtc20tMlwiPlxyXG4gICAgPGltZyBzcmM9e3Byb3BzLmNvdXZlcnR1cmV9IGNsYXNzTmFtZT1cImNhcmQtaW1nLXRvcFwiIGFsdD1cIi4uLlwiIC8+XHJcbiAgICA8L2Rpdj5cclxuICAgIDxkaXYgY2xhc3NOYW1lPVwiY29sLXhzLTEwIGNvbC1zbS04XCI+XHJcbiAgICA8aDQgY2xhc3NOYW1lPVwiY2FyZC10aXRsZVwiPntwcm9wcy50aXRyZX08L2g0PlxyXG4gICAgPHAgY2xhc3NOYW1lPVwiY2FyZC10ZXh0XCI+XHJcbiAgICB7cHJvcHMuc3lub3BzaXN9XHJcbiAgICA8L3A+XHJcbiAgICA8L2Rpdj5cclxuICAgIDwvZGl2PlxyXG4gIClcclxufVxyXG5cclxuUmVhY3RET00ucmVuZGVyKFxyXG4gIDxGZXRjaExpdnJlIC8+LFxyXG4gIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwic2VjdGlvbkxpdnJlc1wiKSlcclxuIl0sInNvdXJjZVJvb3QiOiIifQ==