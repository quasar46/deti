!function (e, n) { "undefined" != typeof module && module.exports ? module.exports = n() : "function" == typeof define ? define(n) : this.tabs = n() }(0, (function () { return function (t) { var c = t.querySelectorAll(".tab"), a = t.querySelectorAll(".tab-pane"); function o(t, c) { e(t, (function (e, t) { var a, o; e != c ? function (e, t) { if (n(e, t)) { var c = new RegExp("(\\s|^)" + t + "(\\s|$)"); e.className = e.className.replace(c, "") } }(t, "active") : n(a = t, o = "active") || (a.className += " " + o) })) } e(c, (function (e, n) { n.addEventListener("click", (function (n) { o(c, e), o(a, e) })) })) }; function e(e, n) { for (var t = e.length - 1; t >= 0; t--)n(t, e[t]) } function n(e, n) { return e.className.match(new RegExp("(\\s|^)" + n + "(\\s|$)")) } }));