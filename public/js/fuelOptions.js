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

eval("$(document).ready(function () {\n  $(\"#fuel_type\").change(function () {\n    var type = $(this).val();\n    $.ajax({\n      url: '/getoptions',\n      type: 'POST',\n      data: {\n        fuel: type\n      },\n      dataType: 'json',\n      success: function success(response) {\n        var len = response.length;\n        $(\"#fuel_option\").empty();\n\n        for (var i = 0; i < len; i++) {\n          var id = response[i]['id'];\n          var name = response[i]['name'];\n          $(\"#fuel_option\").append(\"<option value='\" + id + \"'>\" + name + \"</option>\");\n        }\n      }\n    });\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvZnVlbE9wdGlvbnMuanMuanMiLCJuYW1lcyI6WyIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsImNoYW5nZSIsInR5cGUiLCJ2YWwiLCJhamF4IiwidXJsIiwiZGF0YSIsImZ1ZWwiLCJkYXRhVHlwZSIsInN1Y2Nlc3MiLCJyZXNwb25zZSIsImxlbiIsImxlbmd0aCIsImVtcHR5IiwiaSIsImlkIiwibmFtZSIsImFwcGVuZCJdLCJzb3VyY2VSb290IjoiIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL2Z1ZWxPcHRpb25zLmpzP2IwYjMiXSwic291cmNlc0NvbnRlbnQiOlsiJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKXtcbiAgICAkKFwiI2Z1ZWxfdHlwZVwiKS5jaGFuZ2UoZnVuY3Rpb24oKXtcbiAgICAgICAgdmFyIHR5cGUgPSAkKHRoaXMpLnZhbCgpO1xuICAgICAgICAkLmFqYXgoe1xuICAgICAgICAgICAgdXJsOiAnL2dldG9wdGlvbnMnLFxuICAgICAgICAgICAgdHlwZTogJ1BPU1QnLFxuICAgICAgICAgICAgZGF0YToge2Z1ZWw6dHlwZX0sXG4gICAgICAgICAgICBkYXRhVHlwZTogJ2pzb24nLFxuICAgICAgICAgICAgc3VjY2VzczpmdW5jdGlvbihyZXNwb25zZSl7XG4gICAgICAgICAgICAgICAgdmFyIGxlbiA9IHJlc3BvbnNlLmxlbmd0aDtcbiAgICAgICAgICAgICAgICAkKFwiI2Z1ZWxfb3B0aW9uXCIpLmVtcHR5KCk7XG4gICAgICAgICAgICAgICAgZm9yKCB2YXIgaSA9IDA7IGk8bGVuOyBpKyspe1xuICAgICAgICAgICAgICAgICAgICB2YXIgaWQgPSByZXNwb25zZVtpXVsnaWQnXTtcbiAgICAgICAgICAgICAgICAgICAgdmFyIG5hbWUgPSByZXNwb25zZVtpXVsnbmFtZSddO1xuICAgICAgICAgICAgICAgICAgICAkKFwiI2Z1ZWxfb3B0aW9uXCIpLmFwcGVuZChcIjxvcHRpb24gdmFsdWU9J1wiK2lkK1wiJz5cIituYW1lK1wiPC9vcHRpb24+XCIpO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG4gICAgfSk7XG59KTtcbiJdLCJtYXBwaW5ncyI6IkFBQUFBLENBQUMsQ0FBQ0MsUUFBRCxDQUFELENBQVlDLEtBQVosQ0FBa0IsWUFBVTtFQUN4QkYsQ0FBQyxDQUFDLFlBQUQsQ0FBRCxDQUFnQkcsTUFBaEIsQ0FBdUIsWUFBVTtJQUM3QixJQUFJQyxJQUFJLEdBQUdKLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUUssR0FBUixFQUFYO0lBQ0FMLENBQUMsQ0FBQ00sSUFBRixDQUFPO01BQ0hDLEdBQUcsRUFBRSxhQURGO01BRUhILElBQUksRUFBRSxNQUZIO01BR0hJLElBQUksRUFBRTtRQUFDQyxJQUFJLEVBQUNMO01BQU4sQ0FISDtNQUlITSxRQUFRLEVBQUUsTUFKUDtNQUtIQyxPQUFPLEVBQUMsaUJBQVNDLFFBQVQsRUFBa0I7UUFDdEIsSUFBSUMsR0FBRyxHQUFHRCxRQUFRLENBQUNFLE1BQW5CO1FBQ0FkLENBQUMsQ0FBQyxjQUFELENBQUQsQ0FBa0JlLEtBQWxCOztRQUNBLEtBQUssSUFBSUMsQ0FBQyxHQUFHLENBQWIsRUFBZ0JBLENBQUMsR0FBQ0gsR0FBbEIsRUFBdUJHLENBQUMsRUFBeEIsRUFBMkI7VUFDdkIsSUFBSUMsRUFBRSxHQUFHTCxRQUFRLENBQUNJLENBQUQsQ0FBUixDQUFZLElBQVosQ0FBVDtVQUNBLElBQUlFLElBQUksR0FBR04sUUFBUSxDQUFDSSxDQUFELENBQVIsQ0FBWSxNQUFaLENBQVg7VUFDQWhCLENBQUMsQ0FBQyxjQUFELENBQUQsQ0FBa0JtQixNQUFsQixDQUF5QixvQkFBa0JGLEVBQWxCLEdBQXFCLElBQXJCLEdBQTBCQyxJQUExQixHQUErQixXQUF4RDtRQUNIO01BQ0o7SUFiRSxDQUFQO0VBZUgsQ0FqQkQ7QUFrQkgsQ0FuQkQifQ==\n//# sourceURL=webpack-internal:///./resources/js/fuelOptions.js\n");

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