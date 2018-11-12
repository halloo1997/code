document.addEventListener("DOMContentLoaded", function (evt) {
    // Get the modal
    var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('img01');
    var modalImg = document.getElementById("myModal");
    var captionText = document.getElementById("caption");


    var list = document.getElementsByClassName("img-list");

    for(var i = 0, max = list.length; i < max; i++) {
        list[i].addEventListener("click", function (evt) {
            modal.style.display = "block";
            img.src = evt.target.src;
            captionText.innerHTML = evt.target.alt;
            console.log("test");
        })
    }

// Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    };

    document.getElementById("myModal").addEventListener("click", function (ev) {
        modal.style.display = "none";
    })
});