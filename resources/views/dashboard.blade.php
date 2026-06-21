<x-layout>

    {{-- HERO --}}
    <section class="section has-text-right p-6">
        <h1 class="custom-title has-text-black">Dashboard.</h1>
    </section>

    {{-- PROGRESS --}}
    <div class="m-6">
        <progress class="progress is-info" value="15" max="100"></progress>
    </div>

    {{-- QUARTERS --}}
    <div class="columns is-multiline m-6">

        {{-- QUARTER 1 --}}
        <div class="column is-one-quarter">
            <div class="box">
                <h2 class="is-size-2 has-text-weight-bold pb-4">Quarter 1</h2>

                <table class="table is-fullwidth">
                    <thead>
                    <tr>
                        <th>Class</th>
                        <th>Test Type</th>
                        <th>Grade</th>
                        <th>Credit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><abbr title="Professional- & Career Orientation">PCO</abbr></td>
                        <td>Website assignment</td>
                        <td><input class="input" type="text"></td>
                        <td>2.5 EC</td>
                    </tr>
                    <tr>
                        <td><abbr title="Computer Science Basics">CSB</abbr></td>
                        <td>Written knowledge test</td>
                        <td><input class="input" type="text"></td>
                        <td>5 EC</td>
                    </tr>
                    <tr>
                        <td><abbr title="Programming Basics">PBA</abbr></td>
                        <td>Case study</td>
                        <td><input class="input" type="text"></td>
                        <td>5 EC</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{-- QUARTER 2 --}}
        <div class="column is-one-quarter">
            <div class="box">
                <h2 class="is-size-2 has-text-weight-bold pb-4">Quarter 2</h2>

                <table class="table is-fullwidth">
                    <tbody>
                    <tr>
                        <td>OOP</td>
                        <td>Presentation</td>
                        <td><input class="input" type="text"></td>
                        <td>5 EC</td>
                    </tr>
                    <tr>
                        <td>OOP</td>
                        <td>Case Study Exam</td>
                        <td><input class="input" type="text"></td>
                        <td>5 EC</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{-- QUARTER 3 --}}
        <div class="column is-one-quarter">
            <div class="box">
                <h2 class="is-size-2 has-text-weight-bold pb-4">Quarter 3</h2>

                <table class="table is-fullwidth">
                    <tbody>
                    <tr>
                        <td>FRP1</td>
                        <td>On-site Exam</td>
                        <td><input class="input" type="text"></td>
                        <td>5 EC</td>
                    </tr>
                    <tr>
                        <td>FRP1</td>
                        <td>Database Exam</td>
                        <td><input class="input" type="text"></td>
                        <td>1.25 EC</td>
                    </tr>
                    <tr>
                        <td>FRP1</td>
                        <td>Group Presentation</td>
                        <td><input class="input" type="text"></td>
                        <td>2.5 EC</td>
                    </tr>
                    <tr>
                        <td>FRP1</td>
                        <td>Group Portfolio</td>
                        <td><input class="input" type="text"></td>
                        <td>1.25 EC</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{-- QUARTER 4 --}}
        <div class="column is-one-quarter">
            <div class="box">
                <h2 class="is-size-2 has-text-weight-bold pb-4">Quarter 4</h2>

                <table class="table is-fullwidth">
                    <tbody>
                    <tr>
                        <td>FRP2</td>
                        <td>Final Delivery</td>
                        <td><input class="input" type="text"></td>
                        <td>2.5 EC</td>
                    </tr>
                    <tr>
                        <td>FRP2</td>
                        <td>Report</td>
                        <td><input class="input" type="text"></td>
                        <td>2.5 EC</td>
                    </tr>
                    <tr>
                        <td>FRP2</td>
                        <td>Portfolio</td>
                        <td><input class="input" type="text"></td>
                        <td>5 EC</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</x-layout>
