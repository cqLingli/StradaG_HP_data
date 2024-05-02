//----------start imageplay --------------//
var timer;
var imageplay = document.querySelector('.imageplay');
if (imageplay != null) {
    var ul = imageplay.querySelector('ul');
    var ol = imageplay.querySelector('ol');
    var lis_img = ul.querySelectorAll('li');
    var left = document.querySelector('.arrowstyle-left');
    var right = document.querySelector('.arrowstyle-right');
    var num = 0;  //picture count
    var isMoving = false;

    function animate(obj, target, callback) {
        var timer1 = setInterval(function () {
            var current = obj.offsetLeft;
            var step = 30;
            step = current > target ? -step : step;
            if (Math.abs(current - target) <= Math.abs(step)) {
                clearInterval(timer1);
                obj.style.left = target + 'px';
                if (callback) {
                    callback();
                };
            }
            else {
                obj.style.left = current + step + 'px';
            }
        }, 30)
    }

    //dot style 
    function circlechange(circles, circle) {
        if (circle == lis_img.length) {
            circle = 0;
        }
        for (var i = 0; i < circles.length; i++) {
            circles[i].className = "";
        }
        circles[circle].className = "current";
    }

    document.onreadystatechange = function () {
        if (document.readyState == 'complete') {
            for (var i = 0; i < lis_img.length; i++) {
                var li = document.createElement('li');
                ol.appendChild(li);
                li.setAttribute('index', i);
                if (i == 0) {
                    li.className = "current";
                }
                li.addEventListener('click', function () {
                    if (isMoving) {
                        return;
                    }
                    isMoving = true;
                    for (var j = 0; j < ol.children.length; j++) {
                        ol.children[j].className = "";
                    }
                    this.className = "current";
                    var index = this.getAttribute('index');
                    animate(ul, -index * imageplay.offsetWidth, function () { isMoving = false; });
                    circlechange(circles, index);
                })
            }
            var circles = ol.querySelectorAll('li');
            var li_img = ul.children[0].cloneNode(true);
            ul.appendChild(li_img);

            right.addEventListener('click', function () {
                if (isMoving) {
                    return;
                }
                isMoving = true;
                if (num >= lis_img.length) {
                    num = 0;
                    ul.style.left = 0 + 'px';
                }
                num++;
                animate(ul, -num * imageplay.offsetWidth, function () { isMoving = false; });
                circlechange(circles, num);
            })
            left.addEventListener('click', function () {
                if (isMoving) {
                    return;
                }
                isMoving = true;
                if (num <= 0) {
                    num = lis_img.length;
                    ul.style.left = -lis_img.length * imageplay.offsetWidth + 'px';
                }
                num--;
                animate(ul, -num * imageplay.offsetWidth, function () { isMoving = false; });
                circlechange(circles, num);
            })

            timer = setInterval(function () {
                if (isMoving) {
                    return;
                }
                isMoving = true;
                if (num >= lis_img.length) {
                    num = 0;
                    ul.style.left = 0 + 'px';
                }
                num++;
                animate(ul, -num * imageplay.offsetWidth, function () { isMoving = false; });
                circlechange(circles, num);
                //right.click();
            }, 5000)

            imageplay.addEventListener('mouseover', function () {
                clearInterval(timer);
            })

            imageplay.addEventListener('mouseout', function () {
                clearInterval(timer);
                timer = setInterval(function () {
                    if (isMoving) {
                        return;
                    }
                    isMoving = true;
                    if (num >= lis_img.length) {
                        num = 0;
                        ul.style.left = 0 + 'px';
                    }
                    num++;
                    animate(ul, -num * imageplay.offsetWidth, function () { isMoving = false; });
                    circlechange(circles, num);
                    //right.click();
                }, 5000)
            })
        }
    }
}
//----------end imageplay --------------//

//----------start search_content----------//
var search = document.querySelector('.search_icon');
var si = document.getElementById("search_content_ID");
search.addEventListener('click', function () {
    showContent();
})

function showContent() {
    if (si.classList.contains('search_content_show')) {
        si.classList.remove('search_content_show');

    } else {
        si.classList.add('search_content_show');
    }
}

window.onclick = function (e) {
    if (!e.target.matches('img.search_icon') && !e.target.matches('input#search_content_input') && !e.target.matches('svg.icon-search') && !e.target.matches('button.search_content_button')) {
        if (si.classList.contains('search_content_show')) {
            si.classList.remove('search_content_show');
        }
    }
}
//----------end search_content----------//
/* ----------------------------------------------------------------------------------
　headerHide
---------------------------------------------------------------------------------- */
$(function() {
	var startPos = 0,winScrollTop = 0;
	$(window).on('scroll',function(){
	    winScrollTop = $(this).scrollTop();
	    if (winScrollTop >= startPos) {
	        if(winScrollTop >= 200){
	            $('#header').addClass('hide');
	        }
	    } else {
	        $('#header').removeClass('hide');
	    }
	    startPos = winScrollTop;
	});

});
//----------end headerHide----------//