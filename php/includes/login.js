$(document).ready(function(){
    $("#s_error").hide();
    $("#t_error").hide();

    $('#s_form').on('submit', function (e) {
      $("#s_error").hide();
      $("#t_error").hide();
      e.preventDefault();
      $.ajax({
        type: 'post',
        url: 'login.php',
        data: $('#s_form').serialize(),
        success: function (response) {
          if(response == "STUDENT NOT REGISTERD"){
            $("#s_error").show();
          }
          else{
            var url = "dashboardStu.php";
            $(location).attr('href',url);
          }
        }
      });
    });

    $('#t_form').on('submit', function (e) {
      $("#s_error").hide();
      $("#t_error").hide();
      e.preventDefault();
      $.ajax({
        type: 'post',
        url: 'login.php',
        data: $('#t_form').serialize(),
        success: function (response) {
          if(response == "FACULTY NOT REGISTERD"){
            $("#t_error").show();
          }
          else{
            var url = "dashboardFac.php";
            $(location).attr('href',url);
          }
        }
      });
    });
});