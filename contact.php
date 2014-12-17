<?php include 'head.php'?>
    <div class="row">
      <div class="col-xs-12 lead">
        <h1>Contact!</h1>
        <p>Form stuff</p>
      </div>
    </div>
    <div class="row lighter-box">
      <div class="col-xs-12 lead">
        <div class="row">
          <h2>Social Media</h2>
          <p>My instagram account might have more recent photos then this website, only just because it is easier to post them there.</p>
        </div>
        <div class="row">
          <div class="col-xs-3">

          </div>
      </div>
    </div>
  <script>
  $(function(){
    $('.fa-comments').parent().addClass('active-link');
  });
  $('#submit').on('click',function(){
    $('form').serialize();
  })
  </script>
<?php include 'footer.php'?>
