//----------start block_wrap union----------//
window.onload = function () {
    var block_wrap = document.getElementById('block_wrap')
    var block_wrap1 = document.getElementById('block_wrap1')
    var block_wrap2 = document.getElementById('block_wrap2')
    var block_wrap3 = document.getElementById('block_wrap3')
    var block_wrap4 = document.getElementById('block_wrap4')
    var block_wrap5 = document.getElementById('block_wrap5')
    var block_wrap6 = document.getElementById('block_wrap6')
    var block_wrap7 = document.getElementById('block_wrap7')
    var block_wrap8 = document.getElementById('block_wrap8')
    var block_wrap9 = document.getElementById('block_wrap9')

    if (block_wrap != null) {
        if (block_wrap.classList.contains('active') == false) {
            list_wrap.classList.add('node_wrap_hide')
        }
        block_wrap.onclick = function () {

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
    }
    if (block_wrap1 != null) {
        if (block_wrap1.classList.contains('active1') == false) {
            list_wrap1.classList.add('node_wrap_hide1')
        }
        block_wrap1.onclick = function () {

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
    }

    if (block_wrap2 != null) {
        if (block_wrap2.classList.contains('active2') == false) {
            list_wrap2.classList.add('node_wrap_hide2')
        }
        block_wrap2.onclick = function () {

            let classArray2 = this.className.split(/\s+/)

            let list_wrap2 = document.getElementById('list_wrap2')

            // 内容の隠れと表示
            if (classArray2.includes('active2')) {
                // 内容を隠す
                block_wrap2.classList.remove('active2')
                list_wrap2.classList.remove('node_wrap_show2')
                list_wrap2.classList.add('node_wrap_hide2')
                console.log(this.className.split(/\s+/))
                return
            } else {
                // 内容を表示する
                block_wrap2.classList.add('active2')
                list_wrap2.classList.add('node_wrap_show2')
                list_wrap2.classList.remove('node_wrap_hide2')
                return
            }
        }
    }

    if (block_wrap3 != null) {
        if (block_wrap3.classList.contains('active3') == false) {
            list_wrap3.classList.add('node_wrap_hide3')
        }
        block_wrap3.onclick = function () {

            let classArray3 = this.className.split(/\s+/)

            let list_wrap3 = document.getElementById('list_wrap3')

            // 内容の隠れと表示
            if (classArray3.includes('active3')) {
                // 内容を隠す
                block_wrap3.classList.remove('active3')
                list_wrap3.classList.remove('node_wrap_show3')
                list_wrap3.classList.add('node_wrap_hide3')
                console.log(this.className.split(/\s+/))
                return
            } else {
                // 内容を表示する
                block_wrap3.classList.add('active3')
                list_wrap3.classList.add('node_wrap_show3')
                list_wrap3.classList.remove('node_wrap_hide3')
                return
            }
        }
    }

    if (block_wrap4 != null) {
        if (block_wrap4.classList.contains('active4') == false) {
            list_wrap4.classList.add('node_wrap_hide4')
        }
        block_wrap4.onclick = function () {

            let classArray4 = this.className.split(/\s+/)

            let list_wrap4 = document.getElementById('list_wrap4')

            // 内容の隠れと表示
            if (classArray4.includes('active4')) {
                // 内容を隠す
                block_wrap4.classList.remove('active4')
                list_wrap4.classList.remove('node_wrap_show4')
                list_wrap4.classList.add('node_wrap_hide4')
                console.log(this.className.split(/\s+/))
                return
            } else {
                // 内容を表示する
                block_wrap4.classList.add('active4')
                list_wrap4.classList.add('node_wrap_show4')
                list_wrap4.classList.remove('node_wrap_hide4')
                return
            }
        }
    }

    if (block_wrap5 != null) {
        if (block_wrap5.classList.contains('active5') == false) {
            list_wrap5.classList.add('node_wrap_hide5')
        }
        block_wrap5.onclick = function () {

            let classArray5 = this.className.split(/\s+/)

            let list_wrap5 = document.getElementById('list_wrap5')

            // 内容の隠れと表示
            if (classArray5.includes('active5')) {
                // 内容を隠す
                block_wrap5.classList.remove('active5')
                list_wrap5.classList.remove('node_wrap_show5')
                list_wrap5.classList.add('node_wrap_hide5')
                console.log(this.className.split(/\s+/))
                return
            } else {
                // 内容を表示する
                block_wrap5.classList.add('active5')
                list_wrap5.classList.add('node_wrap_show5')
                list_wrap5.classList.remove('node_wrap_hide5')
                return
            }
        }
    }

    if (block_wrap6 != null) {
        if (block_wrap6.classList.contains('active6') == false) {
            list_wrap6.classList.add('node_wrap_hide6')
        }
        block_wrap6.onclick = function () {

            let classArray6 = this.className.split(/\s+/)

            let list_wrap6 = document.getElementById('list_wrap6')

            // 内容の隠れと表示
            if (classArray6.includes('active6')) {
                // 内容を隠す
                block_wrap6.classList.remove('active6')
                list_wrap6.classList.remove('node_wrap_show6')
                list_wrap6.classList.add('node_wrap_hide6')
                console.log(this.className.split(/\s+/))
                return
            } else {
                // 内容を表示する
                block_wrap6.classList.add('active6')
                list_wrap6.classList.add('node_wrap_show6')
                list_wrap6.classList.remove('node_wrap_hide6')
                return
            }
        }
    }
    if (block_wrap7 != null) {
        if (block_wrap7.classList.contains('active7') == false) {
            list_wrap7.classList.add('node_wrap_hide7')
        }
        block_wrap7.onclick = function () {

            let classArray7 = this.className.split(/\s+/)

            let list_wrap7 = document.getElementById('list_wrap7')

            // 内容の隠れと表示
            if (classArray7.includes('active7')) {
                // 内容を隠す
                block_wrap7.classList.remove('active7')
                list_wrap7.classList.remove('node_wrap_show7')
                list_wrap7.classList.add('node_wrap_hide7')
                console.log(this.className.split(/\s+/))
                return
            } else {
                // 内容を表示する
                block_wrap7.classList.add('active7')
                list_wrap7.classList.add('node_wrap_show7')
                list_wrap7.classList.remove('node_wrap_hide7')
                return
            }
        }
    }

    if (block_wrap8 != null) {
        if (block_wrap8.classList.contains('active8') == false) {
            list_wrap8.classList.add('node_wrap_hide8')
        }
        block_wrap8.onclick = function () {

            let classArray8 = this.className.split(/\s+/)

            let list_wrap8 = document.getElementById('list_wrap8')

            // 内容の隠れと表示
            if (classArray8.includes('active8')) {
                // 内容を隠す
                block_wrap8.classList.remove('active8')
                list_wrap8.classList.remove('node_wrap_show8')
                list_wrap8.classList.add('node_wrap_hide8')
                console.log(this.className.split(/\s+/))
                return
            } else {
                // 内容を表示する
                block_wrap8.classList.add('active8')
                list_wrap8.classList.add('node_wrap_show8')
                list_wrap8.classList.remove('node_wrap_hide8')
                return
            }
        }
    }

    if (block_wrap9 != null) {
        if (block_wrap9.classList.contains('active9') == false) {
            list_wrap9.classList.add('node_wrap_hide9')
        }
        block_wrap9.onclick = function () {

            let classArray9 = this.className.split(/\s+/)

            let list_wrap9 = document.getElementById('list_wrap9')

            // 内容の隠れと表示	
            if (classArray9.includes('active9')) {
                // 内容を隠す
                block_wrap9.classList.remove('active9')
                list_wrap9.classList.remove('node_wrap_show9')
                list_wrap9.classList.add('node_wrap_hide9')
                console.log(this.className.split(/\s+/))
                return
            } else {
                // 内容を表示する
                block_wrap9.classList.add('active9')
                list_wrap9.classList.add('node_wrap_show9')
                list_wrap9.classList.remove('node_wrap_hide9')
                return
            }
        }
    }
}
//----------end block_wrap union----------//

//----------start imageplay --------------//
var timer;
var imageplay = document.querySelector('.imageplay');
var ul = imageplay.querySelector('ul');
var ol = imageplay.querySelector('ol');
var lis_img = ul.querySelectorAll('li');
var left = document.querySelector('.left');
var right = document.querySelector('.right');
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
    }
}
//----------end imageplay --------------//