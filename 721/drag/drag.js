function drag(Selector) {
  this.el = document.querySelector(Selector);
  this.x = true;
  this.y = true;
  this.size = {
    x1: '',
    x2: '',
    y1: '',
    y2: ''
  }
}
drag.prototype = {
  move(callback){
    var _this = this;
    _this.el.onmousedown = function (e) {
      var ox = _this.el.offsetLeft;
      var oy = _this.el.offsetTop;
      var cx = e.clientX;
      var cy = e.clientY;

      var downx = cx - ox;
      var downy = cy - oy;

      document.onmouseover = function (e) {
        var movex = e.clientX;
        var movey = e.clientY;

        var x = movex - downx;
        var y = movey - downy;

        if (_this.size.x1 !== '') {
          if (x < _this.size.x1)  {
            x = _this.size.x1
          }
        }
        if (_this.size.x2 !== '') {
          if (x > _this.size.x2)  {
            x = _this.size.x2
          }
        }
        if (_this.size.y1 !== '') {
          if (x < _this.size.y1)  {
            y = _this.size.y1
          }
        }
        if (_this.size.y2 !== '') {
          if (x > _this.size.y2)  {
            y = _this.size.y2
          }
        }

        if (_this.x) {
          _this.el.style.left = x + 'px';
        }
        if (_this.y) {
          _this.el.style.top = y + 'px';
        }

      };

      document.onmouseup = function () {
        document.onmouseover = null;
        document.onmouseup = null;
        if (callback) {
          //直接指向 this指向window
          callback.call(_this.el)
        }
      }
    }
  }
}