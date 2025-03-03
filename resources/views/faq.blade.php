<x-layout>

    <x-slot:fileSpecificCssFolder>
        <?php include 'C:\Users\rosie\Documents\HBO-ICT\year 1\quarter 3\Frameworks Project 1\projects\portfolio-app\resources\css\faq.css'; ?>
    </x-slot:fileSpecificCssFolder>

    <x-slot:fileSpecificJsFolder> </x-slot:fileSpecificJsFolder>

    {{-- Content --}}
    <div class="header">
        <h1><span class="headerOutline">F</span>aq.</h1>
    </div>

    <div id="faqAllQuestions">
        <h3>Frequently asked questions</h3>
        <details>
            <summary><strong>How can you print a document from your laptop at HZ?</strong> <hr> </summary>
            <ol>
                <li>Go to the HZ website and login with your username and password.</li>
                <li>Click on Choose File and select the file you want to print - repeating the step if you need to add more documents.</li>
                <li>After selecting all documents, tick the Advanced option to choose whether you want double-sided or black & white printing.</li>
                <li>Choose between the "HZ printer"/"HZ plotter". After requesting the print you must register using your HZ pass on the TouchID next to the multifunctional printer and select "Print".</li>
                <li>In the menu, select the printer to which you requested the print.</li>
                <li>The print will be completed only if there is enough credit on your printing account.</li>
                <li>When everything is completed, press "Stop" on the TouchID, and lastly - "Logout".</li>
            </ol>
        </details>

        <details>
            <summary><strong>How can you scan a document and send it to your laptop at HZ??</strong><hr></summary>
            <p>Scanning is FREE, however you should have at least €0.07 credit on your HZ pass to procede with the scanning.</p>
            <ol>
                <li>Register using your HZ pass on the TouchID next to the multifunctional printer.</li>
                <li>In the TouchID menu, select option "Scanning - Scan".</li>
                <li>Lay the original sheet on the feeder or glass plate.</li>
                <li>Press "Scan and Send" -> "Scan to me" -> "Yes" -> "Start button"</li>
                <li>Once this is ready, choose "Start Sending".</li>
                <li>When everything is completed, press "Stop" on the TouchID, and lastly - "Logout".</li>
            </ol>
        </details>


        <details>
            <summary><strong>How can I buy something (like when I sign up for the IT introduction event) on the HZ web shop?</strong><hr></summary>
            <p>Visit HZ webshop, pick your item of choice, place your order, go to your shopping cart and check out!</p>
        </details>

        <details>
            <summary><strong>How can you book a project space?</strong><hr></summary>
            <p>Visit Selfservice portal, click on "Make a reservation", "Reserve a room". Pick the room you want to book and view the possible timeslots available.</p>
        </details>

        <details>
            <summary><strong>What are the instructions if you want to park your car at the HZ parking lot??</strong><hr></summary>
            <p>After you reveal you HZ pass at the barriers, you can park in the lot of the university.</p>
        </details>
    </div>




</x-layout>
