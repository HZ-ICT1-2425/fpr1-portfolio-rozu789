<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HZ HBO-ICT</title>

    <style>
        <?php include 'C:\Users\rosie\Documents\HBO-ICT\year 1\quarter 3\Frameworks Project 1\projects\portfolio-app\resources\css\main.css'; ?>
        <?php include 'C:\Users\rosie\Documents\HBO-ICT\year 1\quarter 3\Frameworks Project 1\projects\portfolio-app\resources\css\dashboard.css'; ?>
    </style>

    <script>
        <?php include 'C:\Users\rosie\Documents\HBO-ICT\year 1\quarter 3\Frameworks Project 1\projects\portfolio-app\resources\js\main.js'; ?>
    </script>

    {{-- Compiled assets --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
{{-- Navigation bar --}}
<x-NavBar />

{{-- Content --}}
<div class="header">
    <h1>Dashboard.</h1>
</div>

<div style="text-align: center;">
    <h2 id="progressBarText">Year Progress</h2> <!-- Changed label to h2 -->
    <progress id="progressBar" value="0" max="60" style="width: 100%; height: 30px; background-color: black;"></progress>
    <span id="progressText" style="display: block; margin-top: 5px;">0 / 60</span> <!-- Centered progress text -->
</div>

<h2>Quarter 1</h2>
<table id="dashboardTableQuarter1">
    <tr class="dashboardTableTop">
        <td>Class</td>
        <td>Abbreviation</td>
        <td>Test Type</td>
        <td>Grade</td>
        <td>Class Credits</td>
    </tr>
    <tr>
        <td>Professional- & Career Orientation</td>
        <td>PCO</td>
        <td>Website assignment</td>
        <td><input type="text" onblur="handleGradeInput(this)" placeholder="Enter grade"></td>
        <td>2.5 EC</td>
    </tr>
    <tr>
        <td>Computer Science Basics</td>
        <td>CSB</td>
        <td>Written knowledge test</td>
        <td><input type="text" onblur="handleGradeInput(this)" placeholder="Enter grade"></td>
        <td>5 EC</td>
    </tr>
    <tr>
        <td>Programming Basics</td>
        <td>PBA</td>
        <td>Case study</td>
        <td><input type="text" onblur="handleGradeInput(this)" placeholder="Enter grade"></td>
        <td>5 EC</td>
    </tr>
</table>

<h2>Quarter 2</h2>
<table id="dashboardTableQuarter2">
    <tr class="dashboardTableTop">
        <td>Class</td>
        <td>Abbreviation</td>
        <td>Test Type</td>
        <td>Grade</td>
        <td>Class Credits</td>
    </tr>
    <tr>
        <td>Object-Oriented Programming</td>
        <td>OOP</td>
        <td>Presentation</td>
        <td><input type="text" onblur="handleGradeInput(this)" placeholder="Enter grade"></td>
        <td>5 EC</td>
    </tr>
    <tr>
        <td>Object-Oriented Programming</td>
        <td>OOP</td>
        <td>Case Study Exam</td>
        <td><input type="text" onblur="handleGradeInput(this)" placeholder="Enter grade"></td>
        <td>5 EC</td>
    </tr>
</table>

<h2>Quarter 3</h2>
<table id="dashboardTableQuarter3">
    <tr class="dashboardTableTop">
        <td>Class</td>
        <td>Abbreviation</td>
        <td>Test Type</td>
        <td>Grade</td>
        <td>Class Credits</td>
    </tr>
    <tr>
        <td>Framework Project 1</td>
        <td> -- </td>
        <td>On-site Case Study Exam</td>
        <td><input type="text" onblur="handleGradeInput(this)" placeholder="Enter grade"></td>
        <td>5 EC</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>Database Exam</td>
        <td><input type="text" onblur="handleGradeInput(this)" placeholder="Enter grade"></td>
        <td>1.25 EC</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>Group Presentation on Project Result</td>
        <td><input type="text" onblur="handleGradeInput(this)" placeholder="Enter grade"></td>
        <td>2.5 EC</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>Group Portfolio with Individual Elements on Requirements</td>
        <td><input type="text" onblur="handleGradeInput(this)" placeholder="Enter grade"></td>
        <td>1.25 EC</td>
    </tr>
</table>

<h2>Quarter 4</h2>
<table id="dashboardTableQuarter4">
    <tr class="dashboardTableTop">
        <td>Class</td>
        <td>Abbreviation</td>
        <td>Test Type</td>
        <td>Grade</td>
        <td>Class Credits</td>
    </tr>
    <tr>
        <td>Framework Project 2</td>
        <td> -- </td>
        <td>Final Delivery</td>
        <td><input type="text" onblur="handleGradeInput(this)" placeholder="Enter grade"></td>
        <td>2.5 EC</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>Report of Acceptance Tests and Optional Assessments</td>
        <td><input type="text" onblur="handleGradeInput(this)" placeholder="Enter grade"></td>
        <td>2.5 EC</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>IT Development Portfolio</td>
        <td><input type="text" onblur="handleGradeInput(this)" placeholder="Enter grade"></td>
        <td>5 EC</td>
    </tr>
</table>

{{-- Footer --}}
<footer class="footer">
    <div class="container">
        <div class="columns is-multiline">

            <div class="column has-text-centered">
                <div>
                    <a href="/" class="link">Home</a>
                </div>
            </div>

            <div class="column has-text-centered">
                <div>
                    <a href="https://opensource.org/licenses/MIT" class="link">
                        <i class="fa fa-balance-scale" aria-hidden="true"></i> License: MIT
                    </a>
                </div>
            </div>

        </div>

        <div class="content is-small has-text-centered">
            <p class="">Theme built by <a href="https://www.csrhymes.com">C.S. Rhymes</a> | adapted by <a href="https://github.com/dwaard">BugSlayer</a></p>
            <p>PROJECT FOOTER HERE</p>
        </div>
    </div>
</footer>

</body>
</html>
