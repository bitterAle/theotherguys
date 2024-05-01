<?php require_once ('include/head.php') ?>
<title>Contact Us</title>
</head>

<body>
    <?php require_once ('include/navbar.php') ?>


    <!--
  Heads up! 👋

  Plugins:
    - @tailwindcss/forms
-->

    <section class="bg-gray-100 mt-15">
        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5">
                <div class="lg:col-span-2 lg:py-12">
                    <p class="max-w-xl text-lg">
                        Let's get to know each. Write to us with any enquiries you may have and we'll get back to you as
                        soon as possible.
                    </p>

                    <div class="mt-8">
                        <a href="#" class="text-2xl font-bold text-blue"> +254701549588 </a>

                        <address class="mt-2 not-italic">info@theotherguyske.org</address>
                    </div>
                </div>

                <div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
                    <form action="#" class="space-y-4">
                        <div>
                            <label class="sr-only" for="name">Name</label>
                            <input class="w-full rounded-lg border-black p-3 text-sm" placeholder="Name" type="text"
                                id="name" />
                        </div>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label class="sr-only" for="email">Email</label>
                                <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Email address"
                                    type="email" id="email" />
                            </div>

                            <div>
                                <label class="sr-only" for="phone">Phone</label>
                                <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Phone Number"
                                    type="tel" id="phone" />
                            </div>
                        </div>



                        <div>
                            <label class="sr-only" for="message">Message</label>

                            <textarea class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Message"
                                rows="8" id="message"></textarea>
                        </div>

                        <div class="mt-4">
                            <button type="submit"
                                class="inline-block w-full rounded-lg bg-black px-5 py-3 font-medium text-white sm:w-auto">
                                Send Enquiry
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div>
        <style>
            .faq-item .faq-icon {
                transition: transform 0.3s ease-in-out;
            }

            .faq-item.open .faq-icon {
                transform: rotate(180deg);
            }
        </style>
        <div class="container mx-auto py-8">
            <h1 class="text-3xl font-bold mb-4 text-center">Frequently Asked Questions</h1>
            <div class="max-w-3xl mx-auto">
                <div class="faq-item border-b border-gray-300 py-4">
                    <button class="faq-question flex items-center justify-between w-full text-left">
                        <span class="font-semibold">What is the mission of your organization??</span>
                        <svg class="h-6 w-6 faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                    <div class="faq-answer mt-4 hidden">
                        <p>Help us help others</p>
                    </div>
                </div>
                <!-- Add more FAQ items here -->

                <div class="faq-item border-b border-gray-300 py-4">
                    <button class="faq-question flex items-center justify-between w-full text-left">
                        <span class="font-semibold">What is the vision of your organization??</span>
                        <svg class="h-6 w-6 faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                    <div class="faq-answer mt-4 hidden">
                        <p>

                            TOGke aims to identify the needs of the community and develop programs and projects geared
                            towards fulfiling those needs Impacting generations for individual and societal growth
                            through utilising readily available talents, Skills and resources to achieve our goals .
                        </p>
                    </div>
                </div>
                <div class="faq-item border-b border-gray-300 py-4">
                    <button class="faq-question flex items-center justify-between w-full text-left">
                        <span class="font-semibold">How can I donate to support your cause?</span>
                        <svg class="h-6 w-6 faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                    <div class="faq-answer mt-4 hidden">
                        <p>You can donate through our website using secure payment gateways or by contacting us directly
                            for information on bank transfers or in-kind donations.</p>
                    </div>
                </div>
                <div class="faq-item border-b border-gray-300 py-4">
                    <button class="faq-question flex items-center justify-between w-full text-left">
                        <span class="font-semibold">Where does the donated money go?</span>
                        <svg class="h-6 w-6 faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                    <div class="faq-answer mt-4 hidden">
                        <p>All donations are allocated directly to our programs and projects, covering educational
                            supplies, healthcare services, community development initiatives, and operational costs with
                            complete transparency.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <?php require_once ('include/footer.php') ?>



    <script>
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const faqQuestion = item.querySelector('.faq-question');
            const faqAnswer = item.querySelector('.faq-answer');
            const faqIcon = item.querySelector('.faq-icon');

            faqQuestion.addEventListener('click', () => {
                faqAnswer.classList.toggle('hidden');
                item.classList.toggle('open');
                faqIcon.classList.toggle('rotate-180');
            });
        });
    </script>

    <script>
        // const mobileMenuButton = document.getElementsById('mobileMenuButton');
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        // const mobileMenu = document.getElementsById('mobileMenu');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
    <script>




        tailwind.config = {
            theme: {
                keyframes: {
                    blink: {
                        '50%': { opacity: '0' }
                    },
                    scroll: {
                        '0%': { transform: 'translateX(0)' },
                        '100%': { transform: 'translateX(-100%)' },
                    }
                },
                animation: {
                    blin: 'blink 0.8s infinite',
                    scrolll: 'scroll 10s linear infinite',
                },
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
</body>

</html>