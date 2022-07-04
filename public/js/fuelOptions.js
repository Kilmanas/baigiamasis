/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/fuelOptions.js":
/*!*************************************!*\
  !*** ./resources/js/fuelOptions.js ***!
  \*************************************/
/***/ (() => {

eval("$(document).ready(function () {\n  $(\"#fuel_type\").change(function () {\n    var type = $(this).val();\n    $.ajax({\n      url: '/getoptions',\n      type: 'POST',\n      data: {\n        fuel: type\n      },\n      dataType: 'json',\n      success: function success(response) {\n        var len = response.length;\n        $(\"#fuel_option\").empty();\n\n        for (var i = 0; i < len; i++) {\n          var id = response[i]['id'];\n          var name = response[i]['name'];\n          $(\"#fuel_option\").append(\"<option value='\" + id + \"'>\" + name + \"</option>\");\n        }\n      }\n    });\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsImNoYW5nZSIsInR5cGUiLCJ2YWwiLCJhamF4IiwidXJsIiwiZGF0YSIsImZ1ZWwiLCJkYXRhVHlwZSIsInN1Y2Nlc3MiLCJyZXNwb25zZSIsImxlbiIsImxlbmd0aCIsImVtcHR5IiwiaSIsImlkIiwibmFtZSIsImFwcGVuZCJdLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvZnVlbE9wdGlvbnMuanM/YjBiMyJdLCJzb3VyY2VzQ29udGVudCI6WyIkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpe1xuICAgICQoXCIjZnVlbF90eXBlXCIpLmNoYW5nZShmdW5jdGlvbigpe1xuICAgICAgICB2YXIgdHlwZSA9ICQodGhpcykudmFsKCk7XG4gICAgICAgICQuYWpheCh7XG4gICAgICAgICAgICB1cmw6ICcvZ2V0b3B0aW9ucycsXG4gICAgICAgICAgICB0eXBlOiAnUE9TVCcsXG4gICAgICAgICAgICBkYXRhOiB7ZnVlbDp0eXBlfSxcbiAgICAgICAgICAgIGRhdGFUeXBlOiAnanNvbicsXG4gICAgICAgICAgICBzdWNjZXNzOmZ1bmN0aW9uKHJlc3BvbnNlKXtcbiAgICAgICAgICAgICAgICB2YXIgbGVuID0gcmVzcG9uc2UubGVuZ3RoO1xuICAgICAgICAgICAgICAgICQoXCIjZnVlbF9vcHRpb25cIikuZW1wdHkoKTtcbiAgICAgICAgICAgICAgICBmb3IoIHZhciBpID0gMDsgaTxsZW47IGkrKyl7XG4gICAgICAgICAgICAgICAgICAgIHZhciBpZCA9IHJlc3BvbnNlW2ldWydpZCddO1xuICAgICAgICAgICAgICAgICAgICB2YXIgbmFtZSA9IHJlc3BvbnNlW2ldWyduYW1lJ107XG4gICAgICAgICAgICAgICAgICAgICQoXCIjZnVlbF9vcHRpb25cIikuYXBwZW5kKFwiPG9wdGlvbiB2YWx1ZT0nXCIraWQrXCInPlwiK25hbWUrXCI8L29wdGlvbj5cIik7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICB9KTtcbn0pO1xuIl0sIm1hcHBpbmdzIjoiQUFBQUEsQ0FBQyxDQUFDQyxRQUFELENBQUQsQ0FBWUMsS0FBWixDQUFrQixZQUFVO0VBQ3hCRixDQUFDLENBQUMsWUFBRCxDQUFELENBQWdCRyxNQUFoQixDQUF1QixZQUFVO0lBQzdCLElBQUlDLElBQUksR0FBR0osQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRSyxHQUFSLEVBQVg7SUFDQUwsQ0FBQyxDQUFDTSxJQUFGLENBQU87TUFDSEMsR0FBRyxFQUFFLGFBREY7TUFFSEgsSUFBSSxFQUFFLE1BRkg7TUFHSEksSUFBSSxFQUFFO1FBQUNDLElBQUksRUFBQ0w7TUFBTixDQUhIO01BSUhNLFFBQVEsRUFBRSxNQUpQO01BS0hDLE9BQU8sRUFBQyxpQkFBU0MsUUFBVCxFQUFrQjtRQUN0QixJQUFJQyxHQUFHLEdBQUdELFFBQVEsQ0FBQ0UsTUFBbkI7UUFDQWQsQ0FBQyxDQUFDLGNBQUQsQ0FBRCxDQUFrQmUsS0FBbEI7O1FBQ0EsS0FBSyxJQUFJQyxDQUFDLEdBQUcsQ0FBYixFQUFnQkEsQ0FBQyxHQUFDSCxHQUFsQixFQUF1QkcsQ0FBQyxFQUF4QixFQUEyQjtVQUN2QixJQUFJQyxFQUFFLEdBQUdMLFFBQVEsQ0FBQ0ksQ0FBRCxDQUFSLENBQVksSUFBWixDQUFUO1VBQ0EsSUFBSUUsSUFBSSxHQUFHTixRQUFRLENBQUNJLENBQUQsQ0FBUixDQUFZLE1BQVosQ0FBWDtVQUNBaEIsQ0FBQyxDQUFDLGNBQUQsQ0FBRCxDQUFrQm1CLE1BQWxCLENBQXlCLG9CQUFrQkYsRUFBbEIsR0FBcUIsSUFBckIsR0FBMEJDLElBQTFCLEdBQStCLFdBQXhEO1FBQ0g7TUFDSjtJQWJFLENBQVA7RUFlSCxDQWpCRDtBQWtCSCxDQW5CRCIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9mdWVsT3B0aW9ucy5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/fuelOptions.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/fuelOptions.js"]();
/******/ 	
/******/ })()
;