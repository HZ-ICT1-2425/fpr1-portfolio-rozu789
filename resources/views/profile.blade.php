<x-layout>

    {{-- HERO --}}
    <section class="section has-text-right p-6">
        <h1 class="custom-title has-text-black">Profile.</h1>
    </section>

    {{-- MAIN LAYOUT --}}
    <div class="columns is-variable is-6">

        {{-- LEFT SIDEBAR --}}
        <div class="column is-one-third m-6">

            <div class="box has-background-black p-6">

                <div class="content has-text-white is-size-5">

                    <h2 class="has-text-white is-size-2">
                        Roos Hogervorst
                    </h2>

                    {{-- Education --}}
                    <div class="mb-5">
                        <span class="icon-text has-text-white">
                            <span class="icon">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </span>
                            <span class="is-size-3 has-text-weight-bold">Education</span>
                        </span>

                        <p class="mt-2">
                            <span class="is-size-4">HZ University Of Applied Sciences</span><br>
                            Bachelor HBO-ICT <br>
                            2024-2028
                        </p>
                    </div>

                    {{-- Skills --}}
                    <div class="mb-5">
                        <span class="icon-text has-text-white">
                            <span class="icon">
                                <i class="fa-solid fa-lightbulb"></i>
                            </span>
                            <span class="is-size-3 has-text-weight-bold">Skills</span>
                        </span>

                        <p class="is-size-4 mt-2">HTML</p>
                        <progress class="progress is-info" value="70" max="100"></progress>

                        <p class="is-size-4">CSS</p>
                        <progress class="progress is-info" value="70" max="100"></progress>

                        <p class="is-size-4">JS</p>
                        <progress class="progress is-info" value="60" max="100"></progress>

                        <p class="is-size-4">PHP</p>
                        <progress class="progress is-info" value="50" max="100"></progress>

                        <p class="is-size-4">Python</p>
                        <progress class="progress is-info" value="50" max="100"></progress>
                    </div>

                    {{-- Languages --}}
                    <div class="mb-5">
                        <span class="icon-text has-text-white">
                            <span class="icon">
                                <i class="fa-solid fa-language"></i>
                            </span>
                            <span class="is-size-3 has-text-weight-bold">Languages</span>
                        </span>

                        <p class="is-size-4 mt-2">Dutch</p>
                        <progress class="progress is-info" value="100" max="100"></progress>

                        <p class="is-size-4">English</p>
                        <progress class="progress is-info" value="100" max="100"></progress>
                    </div>

                    {{-- Hobbies --}}
                    <div>
                        <span class="icon-text has-text-white">
                            <span class="icon">
                                <i class="fa-solid fa-gamepad"></i>
                            </span>
                            <span class="is-size-3 has-text-weight-bold">Hobbies</span>
                        </span>

                        <ul class="mt-2">
                            <li>Gaming</li>
                            <li>Chess</li>
                            <li>Movies</li>
                            <li>Building figurines</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        {{-- RIGHT CONTENT --}}
        <div class="column m-6">

            <div class="box m-6">
                <div class="content p-6">

                    <h2 class="profile-subtitle is-size-2">
                        About me
                    </h2>

                    <p class="is-size-4">
                        My name is Roos Hogervorst, and I am a second-year HBO-ICT student. At the moment I am mainly focused on software development,
                        but my biggest interest lies in web design and creating websites that are not only functional, but also visually appealing and easy to use.
                        I like the idea that a good website is something people don’t have to think too hard about—it just feels clear, logical, and nice to work with. <br><br>

                        What I enjoy most about ICT is that it combines creativity with problem-solving. I like coding in general, but I’m especially drawn to the front-end side of things:
                        working on layouts, styling, and figuring out how to structure a page in a way that makes sense. I often find myself spending extra time on small details like spacing, alignment,
                        and consistency, because I think those things really affect the overall experience of a website.<br><br>

                        Right now I work with HTML, CSS, JavaScript, PHP, and a bit of Python. For my portfolio and current projects, I am also using Laravel and Bulma CSS.
                        I like that I’m slowly learning how different technologies connect with each other, especially when it comes to combining backend logic with frontend design. Even though I still have a lot to learn,
                        I enjoy the process of figuring things out step by step and improving my skills along the way.<br><br>

                        In group projects, I usually take a role where I try to keep structure and overview. I don’t like it when tasks or expectations are unclear, so I tend to ask questions early
                        and help make sure everyone knows what they are supposed to do. If a project starts to become messy or loses direction, I’m not afraid to suggest a meeting so we can realign
                        and make clear agreements again. I wouldn’t necessarily call myself an official team leader, but I do naturally take initiative when I see that things
                        can be improved in terms of communication or organization.<br><br>

                        My interest in ICT started quite naturally through gaming. I used to spend a lot of time playing games with my brother and his friends when I was younger,
                        and that slowly made me curious about how everything actually works behind the scenes. When my brother started working in IT, I became even more interested in the field
                        and started paying more attention to technology in general. Over time, that curiosity turned into a real interest in learning how software is built and how websites and applications come together.<br><br>

                        In the future, I would like to grow into a software developer, preferably in the direction of web development. I am also interested in game design,
                        as that connects back to what originally got me interested in technology. At the moment I am still exploring what suits me best, but I’m motivated to keep learning and
                        improving my skills. I like seeing progress over time, even if it comes step by step, and I’m excited to continue developing myself throughout my studies and beyond.
                    </p>

                </div>
            </div>

        </div>
    </div>

</x-layout>
