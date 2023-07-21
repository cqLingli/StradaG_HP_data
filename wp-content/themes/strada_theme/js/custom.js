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