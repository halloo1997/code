<link rel="stylesheet" href="assets/css/w3schools.css">
<link rel="stylesheet" href="assets/css/content-mijn-fotos.css">
<div class="hexa-container row">
    <div class="col-md-12">
        <ul id="hexGrid">
            <li class="hex">
                <div class="hexIn">
                    <a class="hexLink">
                        <img src="https://chariesa.nl/images/covers.png" onclick="document.getElementById('modal01').style.display='block'">
                    </a>
                </div>
            </li>

            <li class="hex">
                <div class="hexIn">
                    <a class="hexLink">
                        <img src="https://chariesa.nl/images/fro.jpg" onclick="document.getElementById('modal02').style.display='block'">

                    </a>
                </div>
            </li>
            <li class="hex">
                <div class="hexIn">
                    <a class="hexLink">
                        <img src="https://chariesa.nl/images/huisje.png" onclick="document.getElementById('modal03').style.display='block'">
                    </a>
                </div>
            </li>


        </ul>
    </div>

    <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;
    </span>
        <div class="w3-modal-content w3-animate-zoom">
            <img class="popup" src="https://chariesa.nl/images/covers.png" style="width:70%">
            <p>hooiii</p>
        </div>
    </div>
    <div id="modal02" class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;
    </span>
        <div class="w3-modal-content w3-animate-zoom">
            <img class="popup" src="https://chariesa.nl/images/fro.jpg" style="width:70%">
            <p>Test</p>
        </div>
    </div>
    <div id="modal03" class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;
    </span>
        <div class="w3-modal-content w3-animate-zoom">
            <img class="popup" src="https://chariesa.nl/images/huisje.png" style="width:70%">
            <p>Test</p>
        </div>
    </div>
</div>

    <script src="assets/js/contentmijnschool.js">
