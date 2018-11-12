document.addEventListener("DOMContentLoaded", function (evt) {
    // Get the modal
    var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg');

    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");

    var list = document.getElementsByClassName("img-list");

    for(var i = 0, max = list.length; i < max; i++) {
        list[i].addEventListener("click", function (evt) {
            modal.style.display = "block";
            modalImg.src = evt.target.src;
            captionText.innerHTML = evt.target.alt;
            text.innerHTML = evt.target.p;
            console.log("test");
        })
    }

    var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    };

    document.getElementById("myModal").addEventListener("click", function (ev) {
        modal.style.display = "none";
    })
});