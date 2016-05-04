
      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
       
        
        <!-- Default to the left -->
        <strong><i class="fa fa-calendar"></i>&nbsp; <?php echo date('l jS F  Y');?> <p class="pull-right"><i class="fa fa-clock-o"></i> &nbsp;<span id="time"></span></p></strong>
         <script type="text/javascript">
        	function checkTime(i) {
			    if (i < 10) {
			        i = "0" + i;
			    }
			    return i;
			}

			function startTime() {
			    var today = new Date();
			    var h = today.getHours();
			    var m = today.getMinutes();
			    var s = today.getSeconds();
			    // add a zero in front of numbers<10
			    h = checkTime(h);
			    m = checkTime(m);
			    s = checkTime(s);
			    document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
			    t = setTimeout(function () {
			        startTime()
			    }, 500);
			}
			startTime();
        </script>
      </footer>

