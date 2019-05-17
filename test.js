
$(document).ready(function(){
    $("#gameSelect").change(function getgameinfo(){
      var str = $("#gameSelect :selected").text();
      window.alert(str);
      $.ajax({type: "POST", data: {dataVal: str}, url: "gameQuery.php", success: function(result){
        $("p").html(result);
      }});
    });
  });
