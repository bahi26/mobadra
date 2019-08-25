$(".Circle").click(function() {
  $("#Point1").html(
    $.trim(
      jQuery(this)
        .find("h5")
        .text()
    )
  );
  $("#Point1").css("background-image", "url('/css/images/css.jpg')");
});
