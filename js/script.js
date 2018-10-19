$('.custom-file-input').on('change',function(){
    $(this).next('.form-control-file').addClass("selected").html($(this).val());
  });

//get locationID from programs.php and send to load location
$(document).ready(function(){
    $('#selectLocation').change(function(){
        var x = document.getElementById("selectLocation").value;
        var id = window.location.href.split("?id=");
        
        $("#max-for-location").load("load-location.php", {
            locationID: x,
            programID: id[1]
        })
    })
});