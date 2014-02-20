(function (e, t, n) {
    "use strict";
    e.Calendario = function (t, n) {
        this.$el = e(n);
        this._init(t)
    };
    e.Calendario.defaults = {weeks: ["воскресенье", "понедельник", "вторник", "среда", "четверг", "пятница", "суббота"], weekabbrs: ["вос", "пон", "втор", "сре", "чет", "пят", "суб"], months: ["январь", "февраль", "март", "апрель", "май", "июнь", "июль", "август", "сентябрь", "октябрь", "ноябрь", "декабрь"], monthabbrs: ["янв", "фев", "мар", "апр", "май", "июн", "июл", "авг", "сен", "окт", "ноя", "дек"], displayWeekAbbr: false, displayMonthAbbr: false, startIn: 1, onDayClick: function (e, t, n) {
        return false
    }, onDayHover: function (e, t, n) {
        return false
    }};
    e.Calendario.prototype = {_init: function (t) {
        this.options = e.extend(true, {}, e.Calendario.defaults, t);
        this.today = new Date;
        this.month = isNaN(this.options.month) || this.options.month == null ? this.today.getMonth() : this.options.month - 1;
        this.year = isNaN(this.options.year) || this.options.year == null ? this.today.getFullYear() : this.options.year;
        this.caldata = this.options.caldata || {};
        this._generateTemplate();
        this._initEvents()
    }, _initEvents: function () {
        var t = this;
        this.$el.on("click.calendario", "div.fc-row > div", function () {
            var n = e(this), r = n.index(), i = n.children("div"), s = {day: n.children("span.fc-date").text(), month: t.month + 1, monthname: t.options.displayMonthAbbr ? t.options.monthabbrs[t.month] : t.options.months[t.month], year: t.year, weekday: r + t.options.startIn, weekdayname: t.options.weeks[r == 6 ? 0 : r + t.options.startIn]};
            if (s.day) {
                t.options.onDayClick(n, i, s)
            }
        });
        this.$el.on("mouseenter.calendario", "div.fc-row > div", function () {
            var n = e(this), r = n.index(), i = n.children("div"), s = {day: n.children("span.fc-date").text(), month: t.month + 1, monthname: t.options.displayMonthAbbr ? t.options.monthabbrs[t.month] : t.options.months[t.month], year: t.year, weekday: r + t.options.startIn, weekdayname: t.options.weeks[r == 6 ? 0 : r + t.options.startIn]};
            if (s.day) {
                t.options.onDayHover(n, i, s)
            }
        })
    }, _generateTemplate: function (t) {
        var n = this._getHead(), r = this._getBody(), i;
        switch (this.rowTotal) {
            case 4:
                i = "fc-four-rows";
                break;
            case 5:
                i = "fc-five-rows";
                break;
            case 6:
                i = "fc-six-rows";
                break
        }
        this.$cal = e('<div class="fc-calendar ' + i + '">').append(n, r);
        this.$el.find("div.fc-calendar").remove().end().append(this.$cal);
        if (t) {
            t.call()
        }
    }, _getHead: function () {
        var e = '<div class="fc-head">';
        for (var t = 0; t <= 6; t++) {
            var n = t + this.options.startIn, r = n > 6 ? n - 6 - 1 : n;
            e += "<div>";
            e += this.options.displayWeekAbbr ? this.options.weekabbrs[r] : this.options.weeks[r];
            e += "</div>"
        }
        e += "</div>";
        return e
    }, _getBody: function () {
        var e = new Date(this.year, this.month + 1, 0), t = e.getDate(), n = new Date(this.year, this.month, 1);
        this.startingDay = n.getDay();
        var r = '<div class="fc-body"><div class="fc-row">', i = 1;
        for (var s = 0; s < 7; s++) {
            for (var o = 0; o <= 6; o++) {
                var u = this.startingDay - this.options.startIn, a = u < 0 ? 6 + u + 1 : u, f = "", l = this.month === this.today.getMonth() && this.year === this.today.getFullYear() && i === this.today.getDate(), c = this.year < this.today.getFullYear() || this.month < this.today.getMonth() && this.year === this.today.getFullYear() || this.month === this.today.getMonth() && this.year === this.today.getFullYear() && i < this.today.getDate(), h = "";
                if (i <= t && (s > 0 || o >= a)) {
                    f += '<span class="fc-date">' + i + '</span><span class="fc-weekday">' + this.options.weekabbrs[o + this.options.startIn > 6 ? o + this.options.startIn - 6 - 1 : o + this.options.startIn] + "</span>";
                    var p = (this.month + 1 < 10 ? "0" + (this.month + 1) : this.month + 1) + "-" + (i < 10 ? "0" + i : i) + "-" + this.year, d = this.caldata[p];
                    var v = (this.month + 1 < 10 ? "0" + (this.month + 1) : this.month + 1) + "-" + (i < 10 ? "0" + i : i) + "-" + "YYYY", m = this.caldata[v];
                    var g = "MM" + "-" + (i < 10 ? "0" + i : i) + "-" + this.year, y = this.caldata[g];
                    var b = "MM" + "-" + (i < 10 ? "0" + i : i) + "-" + "YYYY", w = this.caldata[b];
                    var E = (this.month + 1 < 10 ? "0" + (this.month + 1) : this.month + 1) + "-" + "DD" + "-" + this.year, S = this.caldata[E];
                    var x = (this.month + 1 < 10 ? "0" + (this.month + 1) : this.month + 1) + "-" + "DD" + "-" + "YYYY", T = this.caldata[x];
                    if (l) {
                        var N = this.caldata["TODAY"];
                        if (N)h += N
                    }
                    if (d) {
                        h += d
                    }
                    if (y) {
                        h += y
                    }
                    if (S) {
                        if (S["start"] && S["end"]) {
                            if (i >= S["start"] && i <= S["end"])h += S["content"]
                        } else if (S["start"] > 1) {
                            if (i >= S["start"])h += S["content"]
                        } else if (S["end"] > 0) {
                            if (i <= S["end"])h += S["content"]
                        } else {
                            if (S["content"])h += S["content"]; else h += S
                        }
                    }
                    if (T) {
                        if (T["start"] && T["end"]) {
                            if (i >= T["start"] && i <= T["end"])h += T["content"]
                        } else if (T["start"] > 1) {
                            if (i >= T["start"])h += T["content"]
                        } else if (T["end"] > 0) {
                            if (i <= T["end"])h += T["content"]
                        } else {
                            if (T["content"])h += T["content"]; else h += T
                        }
                    }
                    if (w) {
                        h += w
                    }
                    if (m) {
                        h += m
                    }
                    if (h !== "") {
                        f += "<div>" + h + "</div>"
                    }
                    ++i
                } else {
                    l = false
                }
                var C = l ? "fc-today " : "";
                if (c) {
                    C += "fc-past "
                }
                if (h !== "") {
                    C += "fc-content"
                }
                r += C !== "" ? '<div class="' + C + '">' : "<div>";
                r += f;
                r += "</div>"
            }
            if (i > t) {
                this.rowTotal = s + 1;
                break
            } else {
                r += '</div><div class="fc-row">'
            }
        }
        r += "</div></div>";
        return r
    }, _isValidDate: function (e) {
        e = e.replace(/-/gi, "");
        var t = parseInt(e.substring(0, 2), 10), n = parseInt(e.substring(2, 4), 10), r = parseInt(e.substring(4, 8), 10);
        if (t < 1 || t > 12) {
            return false
        } else if (n < 1 || n > 31) {
            return false
        } else if ((t == 4 || t == 6 || t == 9 || t == 11) && n > 30) {
            return false
        } else if (t == 2 && (r % 400 == 0 || r % 4 == 0) && r % 100 != 0 && n > 29) {
            return false
        } else if (t == 2 && r % 100 == 0 && n > 29) {
            return false
        }
        return{day: n, month: t, year: r}
    }, _move: function (e, t, n) {
        if (t === "previous") {
            if (e === "month") {
                this.year = this.month > 0 ? this.year : --this.year;
                this.month = this.month > 0 ? --this.month : 11
            } else if (e === "year") {
                this.year = --this.year
            }
        } else if (t === "next") {
            if (e === "month") {
                this.year = this.month < 11 ? this.year : ++this.year;
                this.month = this.month < 11 ? ++this.month : 0
            } else if (e === "year") {
                this.year = ++this.year
            }
        }
        this._generateTemplate(n)
    }, getYear: function () {
        return this.year
    }, getMonth: function () {
        return this.month + 1
    }, getMonthName: function () {
        return this.options.displayMonthAbbr ? this.options.monthabbrs[this.month] : this.options.months[this.month]
    }, getCell: function (e) {
        var t = Math.floor((e + this.startingDay - this.options.startIn) / 7), n = e + this.startingDay - this.options.startIn - t * 7 - 1;
        return this.$cal.find("div.fc-body").children("div.fc-row").eq(t).children("div").eq(n).children("div")
    }, setData: function (t) {
        t = t || {};
        e.extend(this.caldata, t);
        this._generateTemplate()
    }, gotoNow: function (e) {
        this.month = this.today.getMonth();
        this.year = this.today.getFullYear();
        this._generateTemplate(e)
    }, gotoMonth: function (e, t, n) {
        this.month = e - 1;
        this.year = t;
        this._generateTemplate(n)
    }, gotoPreviousMonth: function (e) {
        this._move("month", "previous", e)
    }, gotoPreviousYear: function (e) {
        this._move("year", "previous", e)
    }, gotoNextMonth: function (e) {
        this._move("month", "next", e)
    }, gotoNextYear: function (e) {
        this._move("year", "next", e)
    }};
    var r = function (e) {
        if (t.console) {
            t.console.error(e)
        }
    };
    e.fn.calendario = function (t) {
        var n = e.data(this, "calendario");
        if (typeof t === "string") {
            var i = Array.prototype.slice.call(arguments, 1);
            this.each(function () {
                if (!n) {
                    r("cannot call methods on calendario prior to initialization; " + "attempted to call method '" + t + "'");
                    return
                }
                if (!e.isFunction(n[t]) || t.charAt(0) === "_") {
                    r("no such method '" + t + "' for calendario instance");
                    return
                }
                n[t].apply(n, i)
            })
        } else {
            this.each(function () {
                if (n) {
                    n._init()
                } else {
                    n = e.data(this, "calendario", new e.Calendario(t, this))
                }
            })
        }
        return n
    }
})(jQuery, window)