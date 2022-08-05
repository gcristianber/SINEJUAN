var selDiv = "";
var storedFiles = [];
$(document).ready(function () {
  $("#img").on("change", handleFileSelect);
  selDiv = $("#selectedPoster");



});

function handleFileSelect(e) {
  var files = e.target.files;
  var filesArr = Array.prototype.slice.call(files);
  filesArr.forEach(function (f) {
    if (!f.type.match("image.*")) {
      return;
    }
    storedFiles.push(f);

    var reader = new FileReader();
    reader.onload = function (e) {
      var html =
        '<img src="' +
        e.target.result +
        "\" data-file='" +
        f.name +
        "alt='Category Image' >";
      selDiv.html(html);
    };
    reader.readAsDataURL(f);
    $(".image_upload label p").html("Change Image");
  });
}