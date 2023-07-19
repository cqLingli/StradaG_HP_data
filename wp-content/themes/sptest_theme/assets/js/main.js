$(document).ready(function(){
	jQuery(document).ready(function($) {
        $('.menu_icon').on('click', function(event) {
            $('.l-header').toggleClass('openMenu');
			$('#wrapper').toggleClass('openMenu');
        });
		
		$('.h-menu li._close').on('click', function(){
			$('.l-header').toggleClass('openMenu');
			$('#wrapper').toggleClass('openMenu');
		})
		
		$(document).mouseup(function(e) {
			if($('#wrapper').hasClass('openMenu')){
			var container = $(".h-menu");
				if (!container.is(e.target) && container.has(e.target).length === 0) 
				{
					$('.l-header').toggleClass('openMenu');
					$('#wrapper').toggleClass('openMenu');
				}
			}

		});
    });
})

function openTab(evt, manName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tabanchor_link");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(manName).style.display = "block";
	window.location.hash = manName;
    evt.currentTarget.className += " active";
}

if(document.querySelector('.tabanchor_link') !== null){
	document.querySelector('.tabanchor_link').classList.add('active');
	document.querySelector('.tabcontent').style.display = "block";

	let hash = window.location.hash;
	if(hash){
		document.querySelector('.tabanchor_link[data-tab="'+ hash.slice(1) +'"]').click();
	}
}

$('.author-info .head').on('click', function(){
	$(this).toggleClass('is-active');
	$(this).next().slideToggle();
})