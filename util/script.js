$(document).ready(function(){
      $('#togCode').on("click",function() {
          $("#screen").hide();
          $("#code").show();
      });
     $('#togScreen').on("click",function() {
          $("#screen").show();
          $("#code").hide();
          
      });
      
      $('#img1').on("click",function() {
          $("#img1").width("700");
          $("#img2").width("350");
          $("#img3").width("350");
      });
      
            $('#img2').on("click",function() {
          $("#img2").width("700");
          $("#img3").width("350");
          $("#img1").width("350");
      });
      
            $('#img3').on("click",function() {
          $("#img3").width("700");
          $("#img2").width("350");
          $("#img1").width("350");
      });
      
          $('#img4').on("click",function() {
          $("#img4").width("700");
          $("#img5").width("350");
          $("#img6").width("350");
      });
      
          $('#img5').on("click",function() {
          $("#img5").width("700");
          $("#img4").width("350");
          $("#img6").width("350");
      });
      
          $('#img6').on("click",function() {
          $("#img6").width("700");
          $("#img5").width("350");
          $("#img4").width("350");
      });
    });
    
    