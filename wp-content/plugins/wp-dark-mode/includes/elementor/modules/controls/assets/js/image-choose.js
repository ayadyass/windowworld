jQuery(window).on("elementor:init", function () {
  "use strict";
  var e = elementor.modules.controls.BaseData,
    t = e.extend(
      {
        ui: function () {
          var t = e.prototype.ui.apply(this, arguments);
          return (t.inputs = '[type="radio"]'), t;
        },

        events: function () {
          return _.extend(e.prototype.events.apply(this, arguments), {
            "mousedown label": "onMouseDownLabel",
            "mouseover label": "onMouseOverLabel",
            "click @ui.inputs": "onClickInput",
            "change @ui.inputs": "onBaseInputChange",
          });
        },

        onMouseOverLabel: function (e) {
          var t = this.$(e.currentTarget),
            o = jQuery(window).height(),
            n = t.offset(),
            i = o / 2,
            r = t.find(".imagelarge"),
            a = { left: n.left + t.width(), top: 0 };
          n.top <= i
            ? (r.removeClass("preview-top"), (a.top = n.top + t.height() + 17))
            : (r.addClass("preview-top"), (a.top = n.top - 7)),
            r.css(a);
        },

        onMouseDownLabel: function (e) {
          var t = this.$(e.currentTarget),
            o = this.$("#" + t.attr("for"));
          o.data("checked", o.prop("checked")),
            this.ui.inputs.removeClass("checked"),
            o.data("checked", o.addClass("checked"));
        },

        onClickInput: function (e) {
          if (this.model.get("toggle")) {
            var t = this.$(e.currentTarget);
            t.data("checked") && t.prop("checked", !1).trigger("change");
          }
        },

        onRender: function () {
          e.prototype.onRender.apply(this, arguments);
          var t = this.getControlValue();
          t &&
            (this.ui.inputs.filter('[value="' + t + '"]').prop("checked", !0),
            this.ui.inputs.filter('[value="' + t + '"]').addClass("checked"));
        },
      },
      {
        onPasteStyle: function (e, t) {
          return "" === t || void 0 !== e.options[t];
        },
      }
    );
  elementor.addControlView("image_choose", t);

  jQuery(document).on(
    "click",
    ".image-choose-label-block.disabled",
    function (e) {
      e.preventDefault();
      let promo = document.querySelector(".wp-dark-mode-promo");
      console.log(promo);

      promo.classList.remove("hidden"); 
    }
  );
});
