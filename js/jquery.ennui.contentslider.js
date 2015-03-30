(function($) {
  $.fn.ContentSlider = function(options)
  {
    var defaults = {
      leftBtn : 'images/left.png',
      rightBtn : 'images/rght.png',
      width : '950px',
      height : '250px',
      speed : 400,
      easing : 'easeOutQuad',
      textResize : false,
      IE_h2 : '26px',
      IE_p : '11px'
    }
    var defaultWidth = defaults.width;
    var o = $.extend(defaults, options);
    var w = parseInt(o.width);
    var n = this.children('.cs_wrapper').children('.cs_slider').children('.cs_article').length;
    var x = -1*w*n+w; // Minimum left value
    var p = parseInt(o.width)/parseInt(defaultWidth);
    var thisInstance = this.attr('id');
    var inuse = false; // Prevents colliding animations

    function moveSlider(d, b)
    {
      var l = parseInt(b.siblings('.cs_wrapper').children('.cs_slider').css('left'));
      if(isNaN(l)) {
        var l = 0;
      }
      var m = (d=='left') ? l-w : l+w;
      if(m<=0&&m>=x) {
        b
          .siblings('.cs_wrapper')
            .children('.cs_slider')
              .animate({ 'left':m+'px' }, o.speed, o.easing, function() {
                inuse=false;
              });

        if(b.attr('class')=='cs_leftBtn') {
          var thisBtn = $('#'+thisInstance+' .cs_leftBtn');
          var otherBtn = $('#'+thisInstance+' .cs_rightBtn');
        } else {
          var thisBtn = $('#'+thisInstance+' .cs_rightBtn');
          var otherBtn = $('#'+thisInstance+' .cs_leftBtn');
        }
        if(m==0||m==x) {
          thisBtn.animate({ 'opacity':'0' }, o.speed, o.easing, function() { thisBtn.hide(); });
        }
        if(otherBtn.css('opacity')=='0') {
          otherBtn.show().animate({ 'opacity':'1' }, { duration:o.speed, easing:o.easing });
        }
      }
    }

    function vCenterBtns(b)
    {
      // Safari and IE don't seem to like the CSS used to vertically center
      // the buttons, so we'll force it with this function
      var mid = parseInt(o.height)/2;
      b
        .find('.cs_leftBtn img').css({ 'top':mid+'px', 'padding':0 }).end()
        .find('.cs_rightBtn img').css({ 'top':mid+'px', 'padding':0 });
    }

    return this.each(function() {
      $(this)
        // Set the width and height of the div to the defined size
        .css({
          width:o.width,
          height:o.height
        })
        // Add the buttons to move left and right
        .prepend('<a href="#" class="cs_leftBtn"><img src="'+o.leftBtn+'" /></a>')
        .append('<a href="#" class="cs_rightBtn"><img src="'+o.rightBtn+'" /></a>')
        // Dig down to the article div elements
        .find('.cs_article')
          // Set the width and height of the div to the defined size
          .css({
            width:o.width,
            height:o.height
          })
          .end()
        // Animate the entrance of the buttons
        .find('.cs_leftBtn')
          .css('opacity','0')
          .hide()
          .end()
        .find('.cs_rightBtn')
          .hide()
          .animate({ 'width':'show' });

      // Resize the font to match the bounding box
      if(o.textResize===true) {
        var h2FontSize = $(this).find('h2').css('font-size');
        var pFontSize = $(this).find('p').css('font-size');
        $.each(jQuery.browser, function(i) {
          if($.browser.msie) {
             h2FontSize = o.IE_h2;
             pFontSize = o.IE_p;
          }
        });
        $(this).find('h2').css({ 'font-size' : parseFloat(h2FontSize)*p+'px', 'margin-left' : '66%' });
        $(this).find('p').css({ 'font-size' : parseFloat(pFontSize)*p+'px', 'margin-left' : '66%' });
        $(this).find('.readmore').css({ 'font-size' : parseFloat(pFontSize)*p+'px', 'margin-left' : '66%' });
      }

      // Store a copy of the button in a variable to pass to moveSlider()
      var leftBtn = $(this).children('.cs_leftBtn');
      leftBtn.bind('click', function() {
        if(inuse===false) {
          inuse = true;
          moveSlider('right', leftBtn);
        }
        return false; // Keep the link from firing
      });

      // Store a copy of the button in a variable to pass to moveSlider()
      var rightBtn = $(this).children('.cs_rightBtn');
      rightBtn.bind('click', function() {
        if(inuse===false) {
          inuse=true;
          moveSlider('left', rightBtn);
        }
        return false; // Keep the link from firing
      });

      vCenterBtns($(this)); // This is a CSS fix function.
    });
  }
})(jQuery)

// Killing Hours's code
var autoslide = setInterval(headline_rotate, 6000);

$("#one").hover(function() {
clearInterval(autoslide);
}, function() {
autoslide = setInterval(headline_rotate, 6000);
});

function headline_rotate() {
$leftD = $(".cs_leftBtn").css("display");
$rightD = $(".cs_rightBtn").css("display");
if($leftD == "none"){
$dir = "goRight";
}
if($rightD == "none"){
$dir = "goLeft"; //original code
//$dir = "goRight"; // i have added
gotoPage(0); // i have added
inuse = true; // i have added
return false ; // i have added
}
($dir == "goRight") ? $curButt=".cs_rightBtn" : $curButt=".cs_leftBtn";
$($curButt).trigger("click");
}

// Ray's code
function gotoPage(step)
{
var lb = $(".cs_leftBtn");
var rb = $(".cs_rightBtn");
var w = parseInt(570);

var m = 0;
if (isNaN(step)) {
m = (d=='left') ? l-w : l+w;
currentposition = Math.abs(m / w);
} else {
m = step*(w*-1);
currentposition = step;
}

lb.siblings('.cs_wrapper')
.children('.cs_slider')
.animate({ 'left': m + 'px' }, 800, 'easeInOutBack', function() {
inuse=false;
});

if( step == 0)
lb.animate({ 'opacity':'0' }, 12, 'easeOutQuad', function() { lb.hide(); });
else
lb.animate({ 'opacity':'1' }, 12, 'easeOutQuad', function() { lb.show(); });

if(rb.css('opacity')=='0') {
rb.show().animate({ 'opacity':'1' }, { duration:12, easing:'easeOutQuad' });
}
}	