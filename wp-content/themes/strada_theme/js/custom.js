//---------- block_wrap ----------//
var block_wrap = document.getElementById('block_wrap')

if(block_wrap.classList.contains('active')==false){
    list_wrap.classList.add('node_wrap_hide')
}
block_wrap.onclick = function() {

    let classArray = this.className.split(/\s+/)

    let list_wrap = document.getElementById('list_wrap')

    // 内容の隠れと表示
    if (classArray.includes('active')) {
        // 内容を隠す
        block_wrap.classList.remove('active')
        list_wrap.classList.remove('node_wrap_show')
        list_wrap.classList.add('node_wrap_hide')
        console.log(this.className.split(/\s+/))
        return
    } else {
        // 内容を表示する
        block_wrap.classList.add('active')
        list_wrap.classList.add('node_wrap_show')
        list_wrap.classList.remove('node_wrap_hide')
        return
    }
}

//---------- block_wrap1 ----------//
var block_wrap1 = document.getElementById('block_wrap1')

	if(block_wrap1.classList.contains('active1')==false){
		list_wrap1.classList.add('node_wrap_hide1')
	}
    block_wrap1.onclick = function() {

        let classArray1 = this.className.split(/\s+/)

        let list_wrap1 = document.getElementById('list_wrap1')

        // 内容の隠れと表示
        if (classArray1.includes('active1')) {
            // 内容を隠す
            block_wrap1.classList.remove('active1')
            list_wrap1.classList.remove('node_wrap_show1')
            list_wrap1.classList.add('node_wrap_hide1')
            console.log(this.className.split(/\s+/))
            return
        } else {
            // 内容を表示する
            block_wrap1.classList.add('active1')
            list_wrap1.classList.add('node_wrap_show1')
            list_wrap1.classList.remove('node_wrap_hide1')
            return
        }
    }

//---------- imageplay ----------//
var timer;
        var imageplay = document.querySelector('.imageplay');
        var ul = imageplay.querySelector('ul');
        var ol = imageplay.querySelector('ol');
        var lis_img = ul.querySelectorAll('li');
        var left = document.querySelector('.left');
        var right = document.querySelector('.right');
        var num = 0;  //picture count
        var isMoving = false;

        function animate(obj, target,callback) {
            var timer1 = setInterval(function () {
                var current = obj.offsetLeft;
                var step = 30;
                step = current > target ? -step : step;
                if (Math.abs(current - target) <= Math.abs(step)) {
                    clearInterval(timer1);
                    obj.style.left = target + 'px';
                    if (callback){
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

        window.addEventListener('load', function () {
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
                    animate(ul, -index * imageplay.offsetWidth,function(){isMoving=false;});
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
                animate(ul, -num * imageplay.offsetWidth,function(){isMoving=false;});
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
                animate(ul, -num * imageplay.offsetWidth,function(){isMoving=false;});
                circlechange(circles, num);
            })

            timer = setInterval(function () {
                right.click();
            }, 5000)

            imageplay.addEventListener('mouseover', function () {
                clearInterval(timer);
            })

            imageplay.addEventListener('mouseout', function () {
                clearInterval(timer);
                timer = setInterval(function () {
                    right.click();
                }, 5000)
            })
        })