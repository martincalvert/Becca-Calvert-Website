          </div>
        </div>
      </div>
    </div>
    <!-- JS Load Area -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
      $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("active");
      });
      $(function(){
        if ($(window).width()<1000){
          $("#wrapper").toggleClass("active");
        }
      })
    </script>
  </body>
</html>
