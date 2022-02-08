<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/faqstyle.css">
    <link rel="icon" href="img/CatWithMask.jpg">
    <title>FAQ</title>
</head>
<body>

<header>
    <ul class="bar">
        <li><a href="/">Home</a></li>
        <li><a href="profile">Profile</a></li>
        <li><a href="dashboard">Dashboard</a></li>
        <li><a href="faq" class="active">FAQ</a></li>
        <li><a href="blog">Blog</a></li>
    </ul> <br>
    <div class="designer">
        <b>Designed by MG, 2021</b>
    </div>
</header>

<main>

    <button class="accordion">How can you print a document from your laptop at HZ?</button>
    <panel class="panel">
        <p>By simply connecting to one of the printers via Bluetooth or by going to <a href="print.hz.nl" class="mainlinks">print.hz.nl</a></p>
    </panel>

    <button class="accordion">How can you scan a document and send it to your laptop at HZ?</button>
    <panel class="panel">
        <p>Using the same printer you can scan your paper and it should be added to Your PC if you did it correctly.</p>
    </panel>

    <button class="accordion">What to do when you are feeling sick or show symptoms of COVID-19?</button>
    <panel class="panel">
        <p>Contact the teachers or the school helpdesk (helpdesk@hz.nl) and stay at home. Follow the lessons on BBB to avoid falling behind everybody else.</p>
    </panel>

    <button class="accordion">How can you book a space in one of the wings?</button>
    <panel class="panel">
        <p>After logging in to the <a href="hzuniversity.topdesk.net" class="mainlinks">HZ SelfService portal</a>, it should be pretty simple after that.</p>
    </panel>

    <button class="accordion">How to change payment details for Study Year payment?</button>
    <panel class="panel">
        <p>You have to contact the HZ Financial Office (fin@hz.nl). You can also contact the International Office (internationaloffice@hz.nl).</p>
    </panel>

</main>

<footer>
    <table>
        <tr>
            <td><a href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/HZ-Course-and-Examination-Regulations-2021-2022.pdf" class="footerlink">Course and Examination Regulations</a></td>
            <td><a href="https://hz.nl/uploads/documents/Regelingen/OERS/2020-2021/9.-Implementation-Regulations-ICT-Fulltime-2020-2021.pdf" class="footerlink">Implementation Regulations</a></td>
            <td><a href="https://learn.hz.nl/my/" class="footerlink">The Learn Environment</a></td>
        </tr>

        <tr>
            <td><a href="https://teams.microsoft.com/l/team/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/conversations?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c" class="footerlink">The Teams Environment</a></td>
            <td><a href="https://apps.hz.nl/angular/studievoortgang/studiestatus" class="footerlink">MyHZ Study progress</a></td>
            <td><a href="https://github.com/MGreizis/mgreizis.github.io" class="footerlink">GitHub Environment</a></td>
        </tr>
    </table>
</footer>

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>
</body>
</html>
