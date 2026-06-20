<x-layout>
    {{-- Content --}}
    <div class="title has-text-right"
         style="font-family: 'Montserrat', sans-serif; font-size: 320px;">
        <h1>Home.</h1>
    </div>

    <div class="fixed-grid">
        <div class="grid">
            <div class="cell m-6">

                <div class="box m-6">
                    <div class="content">
                        <h2 style="font-family: 'Lato', sans-serif;">My motivation</h2>
                        <p>
                            I believe ICT is a great fit fo rme because it connects with so many things I've been passionate about since I was young,
                            especially problem-solving, technology, and video games. From the time i was in elementry school all the way through highschool,
                            math was always my favorite subject. I loved and still love sitting down with a problem and taking it apart until i figure out how to fix it.
                            Video games played a huge role in sparking my interest in tech. I've always loved playing them but the older I got the more interested I got  into how
                            they actaully work. That thought prossess led me to think about not just video games but how every aspect of computers work.Even though i
                            was already curious i didn't do a whole lot of research into it, but when I took computer class as a subject in highschool i realized
                            that this was actaully something i found interesting enough to do for a long time. Other than math, it was the first time i found myself
                            actually excited to work on school projects.
                        </p>
                        <p>
                            Overall, I've never really doubted that ICT was going to be the right fit for me, and i still don't. As im writing this ive already been
                            going to school for  a few weeks now and i still find working on checkpoints, workshops and week project super interesting. Even when i get stuck
                            on an excersize it just makes me more eager to finish the puzzel. I'm excited to keep improving my skills and figure out how i can use those skills
                            in my future.
                        </p>
                    </div>
                </div>

            </div>

            <div class="cell">
                <div class="slideshow">
                    <div class="columns is-centered">
                        <div class="column is-5 m-6">
                            <figure class="image is-1by1">
                                <img id="slide" src="{{ asset('images/legobatman1.JPG') }}" alt="lego batman images">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="is-flex is-justify-content-center">
                    <button class="button" onclick="previousSlide()">←</button>
                    <button class="button" onclick="nextSlide()">→</button>
                </div>
            </div>

        </div>
    </div>





</x-layout>
