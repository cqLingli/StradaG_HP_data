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
    var list_wrap = document.getElementById('list_wrap')
    var list_wrap1 = document.getElementById('list_wrap1')
    var list_wrap2 = document.getElementById('list_wrap2')
    var list_wrap3 = document.getElementById('list_wrap3')
    var list_wrap4 = document.getElementById('list_wrap4')
    var list_wrap5 = document.getElementById('list_wrap5')
    var list_wrap6 = document.getElementById('list_wrap6')
    var list_wrap7 = document.getElementById('list_wrap7')
    var list_wrap8 = document.getElementById('list_wrap8')
    var list_wrap9 = document.getElementById('list_wrap9')
    var text = document.getElementById('text')
    var text1 = document.getElementById('text1')
    var text2 = document.getElementById('text2')
    var text3 = document.getElementById('text3')
    var text4 = document.getElementById('text4')
    var text5 = document.getElementById('text5')
    var text6 = document.getElementById('text6')
    var text7 = document.getElementById('text7')
    var text8 = document.getElementById('text8')
    var text9 = document.getElementById('text9')

    if (window.innerWidth <= 767) {
        if (block_wrap != null) {
            if (block_wrap.classList.contains('active') == false) {
                list_wrap.classList.add('node_wrap_hide')
            }
            block_wrap.onclick = function () {

                let classArray = this.className.split(/\s+/)

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
    } else {
        if (block_wrap != null) {
            if (block_wrap.classList.contains('active') == false) {
                list_wrap.classList.add('node_wrap_hide')
                text.classList.remove('border-text-controll')
            }
            block_wrap.onclick = function () {

                let classArray = this.className.split(/\s+/)

                // 内容の隠れと表示
                if (classArray.includes('active')) {
                    // 内容を隠す
                    block_wrap.classList.remove('active')
                    list_wrap.classList.remove('node_wrap_show')
                    list_wrap.classList.add('node_wrap_hide')
                    text.classList.remove('border-text-controll')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap.classList.add('active')
                    list_wrap.classList.add('node_wrap_show')
                    list_wrap.classList.remove('node_wrap_hide')
                    text.classList.add('border-text-controll')
                    return
                }
            }
        }
        if (block_wrap1 != null) {
            if (block_wrap1.classList.contains('active1') == false) {
                list_wrap1.classList.add('node_wrap_hide1')
                text1.classList.remove('border-text-controll')
            }
            block_wrap1.onclick = function () {

                let classArray1 = this.className.split(/\s+/)

                // 内容の隠れと表示
                if (classArray1.includes('active1')) {
                    // 内容を隠す
                    block_wrap1.classList.remove('active1')
                    list_wrap1.classList.remove('node_wrap_show1')
                    list_wrap1.classList.add('node_wrap_hide1')
                    text1.classList.remove('border-text-controll')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap1.classList.add('active1')
                    list_wrap1.classList.add('node_wrap_show1')
                    list_wrap1.classList.remove('node_wrap_hide1')
                    text1.classList.add('border-text-controll')
                    return
                }
            }
        }

        if (block_wrap2 != null) {
            if (block_wrap2.classList.contains('active2') == false) {
                list_wrap2.classList.add('node_wrap_hide2')
                text2.classList.remove('border-text-controll')
            }
            block_wrap2.onclick = function () {

                let classArray2 = this.className.split(/\s+/)

                // 内容の隠れと表示
                if (classArray2.includes('active2')) {
                    // 内容を隠す
                    block_wrap2.classList.remove('active2')
                    list_wrap2.classList.remove('node_wrap_show2')
                    list_wrap2.classList.add('node_wrap_hide2')
                    text2.classList.remove('border-text-controll')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap2.classList.add('active2')
                    list_wrap2.classList.add('node_wrap_show2')
                    list_wrap2.classList.remove('node_wrap_hide2')
                    text2.classList.add('border-text-controll')
                    return
                }
            }
        }

        if (block_wrap3 != null) {
            if (block_wrap3.classList.contains('active3') == false) {
                list_wrap3.classList.add('node_wrap_hide3')
                text3.classList.remove('border-text-controll')
            }
            block_wrap3.onclick = function () {

                let classArray3 = this.className.split(/\s+/)

                // 内容の隠れと表示
                if (classArray3.includes('active3')) {
                    // 内容を隠す
                    block_wrap3.classList.remove('active3')
                    list_wrap3.classList.remove('node_wrap_show3')
                    list_wrap3.classList.add('node_wrap_hide3')
                    text3.classList.remove('border-text-controll')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap3.classList.add('active3')
                    list_wrap3.classList.add('node_wrap_show3')
                    list_wrap3.classList.remove('node_wrap_hide3')
                    text3.classList.add('border-text-controll')
                    return
                }
            }
        }

        if (block_wrap4 != null) {
            if (block_wrap4.classList.contains('active4') == false) {
                list_wrap4.classList.add('node_wrap_hide4')
                text4.classList.remove('border-text-controll')
            }
            block_wrap4.onclick = function () {

                let classArray4 = this.className.split(/\s+/)

                // 内容の隠れと表示
                if (classArray4.includes('active4')) {
                    // 内容を隠す
                    block_wrap4.classList.remove('active4')
                    list_wrap4.classList.remove('node_wrap_show4')
                    list_wrap4.classList.add('node_wrap_hide4')
                    text4.classList.remove('border-text-controll')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap4.classList.add('active4')
                    list_wrap4.classList.add('node_wrap_show4')
                    list_wrap4.classList.remove('node_wrap_hide4')
                    text4.classList.add('border-text-controll')
                    return
                }
            }
        }

        if (block_wrap5 != null) {
            if (block_wrap5.classList.contains('active5') == false) {
                list_wrap5.classList.add('node_wrap_hide5')
                text5.classList.remove('border-text-controll')
            }
            block_wrap5.onclick = function () {

                let classArray5 = this.className.split(/\s+/)

                // 内容の隠れと表示
                if (classArray5.includes('active5')) {
                    // 内容を隠す
                    block_wrap5.classList.remove('active5')
                    list_wrap5.classList.remove('node_wrap_show5')
                    list_wrap5.classList.add('node_wrap_hide5')
                    text5.classList.remove('border-text-controll')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap5.classList.add('active5')
                    list_wrap5.classList.add('node_wrap_show5')
                    list_wrap5.classList.remove('node_wrap_hide5')
                    text5.classList.add('border-text-controll')
                    return
                }
            }
        }

        if (block_wrap6 != null) {
            if (block_wrap6.classList.contains('active6') == false) {
                list_wrap6.classList.add('node_wrap_hide6')
                text6.classList.remove('border-text-controll')
            }
            block_wrap6.onclick = function () {

                let classArray6 = this.className.split(/\s+/)

                // 内容の隠れと表示
                if (classArray6.includes('active6')) {
                    // 内容を隠す
                    block_wrap6.classList.remove('active6')
                    list_wrap6.classList.remove('node_wrap_show6')
                    list_wrap6.classList.add('node_wrap_hide6')
                    text6.classList.remove('border-text-controll')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap6.classList.add('active6')
                    list_wrap6.classList.add('node_wrap_show6')
                    list_wrap6.classList.remove('node_wrap_hide6')
                    text6.classList.add('border-text-controll')
                    return
                }
            }
        }
        if (block_wrap7 != null) {
            if (block_wrap7.classList.contains('active7') == false) {
                list_wrap7.classList.add('node_wrap_hide7')
                text7.classList.remove('border-text-controll')
            }
            block_wrap7.onclick = function () {

                let classArray7 = this.className.split(/\s+/)

                // 内容の隠れと表示
                if (classArray7.includes('active7')) {
                    // 内容を隠す
                    block_wrap7.classList.remove('active7')
                    list_wrap7.classList.remove('node_wrap_show7')
                    list_wrap7.classList.add('node_wrap_hide7')
                    text7.classList.remove('border-text-controll')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap7.classList.add('active7')
                    list_wrap7.classList.add('node_wrap_show7')
                    list_wrap7.classList.remove('node_wrap_hide7')
                    text7.classList.add('border-text-controll')
                    return
                }
            }
        }

        if (block_wrap8 != null) {
            if (block_wrap8.classList.contains('active8') == false) {
                list_wrap8.classList.add('node_wrap_hide8')
                text8.classList.remove('border-text-controll')
            }
            block_wrap8.onclick = function () {

                let classArray8 = this.className.split(/\s+/)

                // 内容の隠れと表示
                if (classArray8.includes('active8')) {
                    // 内容を隠す
                    block_wrap8.classList.remove('active8')
                    list_wrap8.classList.remove('node_wrap_show8')
                    list_wrap8.classList.add('node_wrap_hide8')
                    text8.classList.remove('border-text-controll')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap8.classList.add('active8')
                    list_wrap8.classList.add('node_wrap_show8')
                    list_wrap8.classList.remove('node_wrap_hide8')
                    text8.classList.add('border-text-controll')
                    return
                }
            }
        }

        if (block_wrap9 != null) {
            if (block_wrap9.classList.contains('active9') == false) {
                list_wrap9.classList.add('node_wrap_hide9')
                text9.classList.remove('border-text-controll')
            }
            block_wrap9.onclick = function () {

                let classArray9 = this.className.split(/\s+/)

                // 内容の隠れと表示	
                if (classArray9.includes('active9')) {
                    // 内容を隠す
                    block_wrap9.classList.remove('active9')
                    list_wrap9.classList.remove('node_wrap_show9')
                    list_wrap9.classList.add('node_wrap_hide9')
                    text9.classList.remove('border-text-controll')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap9.classList.add('active9')
                    list_wrap9.classList.add('node_wrap_show9')
                    list_wrap9.classList.remove('node_wrap_hide9')
                    text9.classList.add('border-text-controll')
                    return
                }
            }
        }
    }
}
//----------end block_wrap union----------//

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