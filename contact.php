<?php include 'head.php'?>
  <div class="row color-box-md">
    <div class="col-sm-6 col-xs-12">
      <h2>How to contact me?</h2>
      <p>To contact me you can use the form to the right or you can email me directly by clicking the fancy email button bellow. I also have my social networks listed below.</p>
    </div>
    <div class="col-xs-12 col-sm-6">
      <button style="margin-top:40px;" class="btn btn-block light-box-shadow"><i class="fa fa-3x fa-envelope"></i></button>
    </div>
  </div>
      <div class="row color-box-dk">
        <div class="col-xs-12">
            <h2>The Form</h2>
            <form class="form-horizontal">
              <div style="margin-bottom:5px;" class="col-xs-12 text-center text-alert"></div>
              <div class="form-group">
                <label class="col-xs-12 col-sm-2">First Name</label>
                <input type="text" name="first_name" class="col-xs-12 col-sm-4"></input>
                <label class="col-xs-12 col-sm-2">Last Name</label>
                <input type="text" name="last_name" class="col-xs-12 col-sm-4"></input>
              </div>
              <div class="form-group">
                <label class="col-xs-12 col-sm-2">E-mail</label>
                <input type="email" name="email" class="col-xs-12 col-sm-4"></input>
                <label class="col-xs-12 col-sm-2">Phone #</label>
                <input type="text" name="phone" class="col-xs-12 col-sm-4"></input>
              </div>
              <div class="form-group">
                <label class="col-xs-12 col-sm-3">What you are contacting me about?</label>
                <textarea name="content" class="col-xs-12 col-sm-9"></textarea>
              </div>
              <span id="submit" class="btn btn-block light-box-shadow">SUBMIT</span>
            </form>
          </div>
        </div>
    </div>
    <div class="row color-box-lt">
      <div class="col-xs-12 lead">
        <div class="row">
          <h3>Social Media <span class="text-muted">For the latest photos I would check my Instagram account.</span></h3>
        </div>
        <div class="row text-center">
          <div class="col-xs-3">
            <a><i class="fa fa-4x fa-linkedin"></i></a>
          </div>
          <div class="col-xs-3">
            <a><i class="fa fa-4x fa-instagram"></i></a>
          </div>
          <div class="col-xs-3">
            <a><i class="fa fa-4x fa-twitter"></i></a>
          </div>
          <div class="col-xs-3">
            <a><i class="fa fa-4x fa-facebook"></i></a>
          </div>
        </div>
      </div>
    </div>
  <script>
  $(function(){
    $('.fa-comments').parent().addClass('active-link');
  });
  $('#submit').on('click',function(){
    if ($('[name=first_name]').val().length > 0 && $('[name=last_name]').val().length > 0 && $('[name=email]').val().length > 0){
      console.log($('form').serialize());
      $.ajax({
        url:'http://www.becca-calvert.com/emailer.php',
        type: 'POST',
        data: $('form').serialize()
      })
      .done(function(e){
        if (e){
          $('.text-alert').addClass('alert-success').html('Thank you! I will contact you within 48 hours.')
        }
        else{
          console.log(e);
          $('.text-alert').addClass('alert-danger').html('Oh dang something went wrong with that one, you can try again if you want! I have also notified my IT guy about the issue. Thanks for understanding.')
        }
      })
    }
    else{
      $('.text-alert').addClass('alert-danger').html('Well I need your first name, last name and email in order to contact you! Let\'s try that again.')
    }

  })
  </script>
<?php include 'footer.php'?>
