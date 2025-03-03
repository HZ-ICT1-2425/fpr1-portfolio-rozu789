<x-layout>

    <x-slot:fileSpecificCssFolder>
        <?php include 'C:\Users\rosie\Documents\HBO-ICT\year 1\quarter 3\Frameworks Project 1\projects\portfolio-app\resources\css\dashboard.css'; ?>
    </x-slot:fileSpecificCssFolder>

    <x-slot:fileSpecificJsFolder>
        <?php include 'C:\Users\rosie\Documents\HBO-ICT\year 1\quarter 3\Frameworks Project 1\projects\portfolio-app\resources\js\progressbar.js'; ?>
    </x-slot:fileSpecificJsFolder>

    {{-- Content --}}
    <div class="header">
        <h1><span class="headerOutline">Dash</span>board.</h1>
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




</x-layout>
