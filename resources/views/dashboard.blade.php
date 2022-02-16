<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/dashboardstyle.css">
    <link rel="icon" href="img/CatWithMask.jpg">
    <title>Dashboard</title>
</head>
<body>

<header>
    <ul class="bar">
        <li><a href="/">Home</a></li>
        <li><a href="profile">Profile</a></li>
        <li><a href="dashboard" class="active">Dashboard</a></li>
        <li><a href="faq">FAQ</a></li>
        <li><a href="blog">Blog</a></li>
    </ul> <br>
    <div class="designer">
        <b>Designed by MG, 2021</b>
    </div>
</header>

<main>

    <table class="maintable flex-containter" align="center">
        <thead>
        <th class="maintableth">Quartile</th>
        <th class="maintableth">Course</th>
        <th class="maintableth">EC</th>
        <th class="maintableth">Exam</th>
        <th class="maintableth">Grade</th>
        </thead>
        <tbody>
        <tr>
            <td rowspan="3" class="maintabletd">1</td>
            <td class="maintabletd">Programme and Career Orientation</td>
            <td class="maintabletd">2,5</td>
            <td class="maintabletd">Assessment exam</td>
            <td class="maintabletd">-</td>
        </tr>

        <tr>
            <td class="maintabletd">Computer Science Basics</td>
            <td class="maintabletd">5</td>
            <td class="maintabletd">Written Exam</td>
            <td class="maintabletd">-</td>
        </tr>

        <tr>
            <td class="maintabletd">Programming Basics</td>
            <td class="maintabletd">5</td>
            <td class="maintabletd">Case Study</td>
            <td class="maintabletd">-</td>
        </tr>

        <tr>
            <td rowspan="2" class="maintabletd">2</td>
            <td rowspan="2" class="maintabletd">Object Oriented Programming</td>
            <td rowspan="2" class="maintabletd">10</td>
            <td class="maintabletd">Case Study</td>
            <td class="maintabletd">-</td>
        </tr>

        <tr>
            <td class="maintabletd">Project</td>
            <td class="maintabletd">-</td>
        </tr>

        <tr>
            <td class="maintabletd" rowspan="4">3</td>
            <td class="maintabletd">Framework Development 1</td>
            <td class="maintabletd">5</td>
            <td class="maintabletd">Case Study</td>
            <td class="maintabletd">-</td>
        </tr>

        <tr>
            <td class="maintabletd" rowspan="3">Framework Project 1</td>
            <td class="maintabletd" rowspan="3">7,5</td>
            <td class="maintabletd">Project</td>
            <td class="maintabletd">-</td>
        </tr>

        <tr>
            <td class="maintabletd">Assessment</td>
            <td class="maintabletd">-</td>
        </tr>

        <tr>
            <td class="maintabletd">Report</td>
            <td class="maintabletd">-</td>
        </tr>

        <tr>
            <td class="maintabletd" rowspan="3">4</td>
            <td class="maintabletd" rowspan="3">Framework Project 2</td>
            <td class="maintabletd" rowspan="3">10</td>
            <td class="maintabletd">Portfolio</td>
            <td class="maintabletd">-</td>
        </tr>

        <tr>
            <td class="maintabletd">Project</td>
            <td class="maintabletd">-</td>
        </tr>

        <tr>
            <td class="maintabletd">Assessment</td>
            <td class="maintabletd">-</td>
        </tr>

        <tr>
            <td class="maintabletd">The Entire Year</td>
            <td class="maintabletd">Personal Professional Development</td>
            <td class="maintabletd">12,5</td>
            <td class="maintabletd">Portfolio</td>
            <td class="maintabletd">-</td>
        </tr>

        <tr>
            <td class="maintabletd" rowspan="2">Whenever</td>
            <td class="maintabletd">IT Personality</td>
            <td class="maintabletd">1,25</td>
            <td class="maintabletd">Portfolio</td>
            <td class="maintabletd">-</td>
        </tr>

        <tr>
            <td class="maintabletd">IT Personality</td>
            <td class="maintabletd">1,25</td>
            <td class="maintabletd">Portfolio</td>
            <td class="maintabletd">-</td>
        </tr>
        </tbody>
    </table>

    <label for="NBSA">NBSA Progress:</label>
    <progress id="NBSA" max="60" value="0">0%</progress>

</main>

<footer>
    <table class="flex-container">
        <tr>
            <td class="footer"><a href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/HZ-Course-and-Examination-Regulations-2021-2022.pdf" class="footerlink">Course and Examination Regulations</a></td>
            <td class="footer"><a href="https://hz.nl/uploads/documents/Regelingen/OERS/2020-2021/9.-Implementation-Regulations-ICT-Fulltime-2020-2021.pdf" class="footerlink">Implementation Regulations</a></td>
            <td class="footer"><a href="https://learn.hz.nl/my/" class="footerlink">The Learn Environment</a></td>
        </tr>

        <tr>
            <td class="footer"><a href="https://teams.microsoft.com/l/team/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/conversations?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c" class="footerlink">The Teams Environment</a></td>
            <td class="footer"><a href="https://apps.hz.nl/angular/studievoortgang/studiestatus" class="footerlink">MyHZ Study progress</a></td>
            <td class="footer"><a href="https://github.com/MGreizis/mgreizis.github.io" class="footerlink">GitHub Environment</a></td>
        </tr>
    </table>
</footer>
</body>
</html>
