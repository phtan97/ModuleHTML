$( document ).ready(function() {
    $('#btn-list').click(function() {
      $('.colum').css({
        "width":"100%"
      });
      $('#chg').attr('class', 'col-md-4 col-sm-4 col-xs-12');
      $('#chg1').attr('class', 'col-md-4 col-sm-4 col-xs-12');
    });
    $('#btn-grid').click(function() {
      $('.colum').css({
        "width":"50%"
      });
      $('#chg').attr('class', 'col-md-8 col-sm-8 col-xs-12');
      $('#chg1').attr('class', 'col-md-8 col-sm-8 col-xs-12');
    });
});
function myFunction() {
      var x = document.getElementById("btn-bars");
      if (x.className === "filters") {
        x.className += " responsive";
      } else {
        x.className = "filters";
      }
    }