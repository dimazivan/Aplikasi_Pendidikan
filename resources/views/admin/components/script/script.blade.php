<!--basic scripts-->
<script>
	window.jQuery || document.write(`<script src="{{ asset('backend/assets/jquery/jquery-2.1.1.min.js')}}"><\/script>`)
</script>
<script src="{{ asset('backend/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('backend/assets/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{ asset('backend/assets/jquery-cookie/jquery.cookie.js')}}"></script>

<!--page specific plugin scripts-->
<script src="{{ asset('backend/assets/flot/jquery.flot.js')}}"></script>
<script src="{{ asset('backend/assets/flot/jquery.flot.resize.js')}}"></script>
<script src="{{ asset('backend/assets/flot/jquery.flot.pie.js')}}"></script>
<script src="{{ asset('backend/assets/flot/jquery.flot.stack.js')}}"></script>
<script src="{{ asset('backend/assets/flot/jquery.flot.crosshair.js')}}"></script>
<script src="{{ asset('backend/assets/flot/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{ asset('backend/assets/sparkline/jquery.sparkline.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('backend/assets/data-tables/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{ asset('backend/assets/data-tables/bootstrap3/dataTables.bootstrap.js')}}">
</script>

<!--flaty scripts-->
<script src="{{ asset('backend/js/flaty.js')}}"></script>
<script src="{{ asset('backend/js/flaty-demo-codes.js')}}"></script>

<!-- Clock -->
<script>
	var timestamp = '<?=time();?>';

	function updateTime() {
		$('#time').html(Date(timestamp));
		timestamp++;
	}
	$(function() {
		setInterval(updateTime, 1000);
	});
</script>
<script>
	var currentURL = window.location.href;
	console.log(currentURL);
	var menuItems = document.querySelectorAll('li[id="menu"]');

	menuItems.forEach(menuItem => {
		var link = menuItem.querySelector(`a[href="${currentURL}"]`);
		if (link) {
			menuItem.classList.add("active");

			var siblings = Array.from(menuItem.parentNode.children);
			siblings.forEach(sibling => {
				if (sibling !== menuItem) {
					sibling.classList.remove("active");
				}
			});
		}
	});

	$(".submenu li a").click(function() {
		$(this).parent().parent().parent().addClass('active').siblings().removeClass('active');
	});
</script>