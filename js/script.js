/*function functionHideElement() {
    var x = document.getElementById("my-account-program-section-posts");
    var y = document.getElementById("my-account-program-button");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "inline-block";
    } else {
        x.style.display = "none";
        y.style.display = "none";
    }
}*/
$('.custom-file-input').on('change',function(){
    $(this).next('.form-control-file').addClass("selected").html($(this).val());
  });

//TODO://FIX SCRIPT FOR MAXIMUM PARTICIPANTS FOR PROGRAM IN SPECIFIC LOCATION
function getMaximumParticipants() {
    var x = document.getElementById("selectLocation").value;
    document.getElementById("max-for-location").innerHTML = "Maximum participants: " + x;
    $.ajax({
        
        type: "post",
        url: 'index.php',
        data: {voteid: x },
        success: function(data)
        {
           alert("success! X:" + data);
        }
    });
};