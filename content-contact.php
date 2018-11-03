<html>
<head>
    <link rel="stylesheet" href="/assets/css/css_content_contact.css" />

</head>
<body>

<p>Ik ben <strong>Chariesa Roozendaal</strong>, geboren op 18-02-1997 en woon in Uitgeest.

    In 2017 heb ik de opleiding Allround-DTP’er afgerond en ben ik gestart met de opleiding Mediadeveloper.

    In mijn vrije tijd ben ik vaak te vinden achter mijn laptop om te programmeren,
    producten te ontwerpen of foto's te bewerken. Fotograferen vind ik ook erg leuk om te doen
    vandaar dat er in mijn portfolio ook veel zelfgemaakte foto’s te zien zijn,
    verder ben ik ook graag met vrienden en altijd in voor leuke dingen.
</p>

<div id="form-main">
    <div id="form-div">
        <form class="form" id="form1">

            <p class="name">
                <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
            </p>

            <p class="email">
                <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
            </p>

            <p class="text">
                <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment"></textarea>
            </p>


            <div class="submit">
                <input type="submit" value="SEND" id="button-blue"/>
                <div class="ease"></div>
            </div>
        </form>
    </div>
</body>
</html>