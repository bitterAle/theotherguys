<?php require_once ('include/head.php') ?>
<title>Theotherguys KE</title>
<style>
  .btn {
    z-index: 10;
  }
</style>
</head>

<body>

  <?php require_once ('include/navbar.php') ?>
  <!-- hero section now  -->
  <div class="relative" id="MainContent">
    <div class="carousel w-full h-screen">
      <div id="slide1" class="carousel-item relative w-full">
        <img src="./images/image1.jpeg" class="w-full object-cover" />
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          <a href="#slide4" class="btn btn-circle">❮</a>
          <a href="#slide2" class="btn btn-circle">❯</a>
        </div>
      </div>
      <div id="slide2" class="carousel-item relative w-full">
        <img src="./images/image2.jpeg" class="w-full object-cover" />
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          <a href="#slide1" class="btn btn-circle">❮</a>
          <a href="#slide3" class="btn btn-circle">❯</a>
        </div>
      </div>
      <div id="slide3" class="carousel-item relative w-full">
        <img src="./images/image3.jpg" class="w-full object-cover" />
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          <a href="#slide2" class="btn btn-circle">❮</a>
          <a href="#slide4" class="btn btn-circle">❯</a>
        </div>
      </div>
      <div id="slide4" class="carousel-item relative w-full">
        <img src="./images/image4.jpeg" class="w-full object-cover" />
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          <a href="#slide3" class="btn btn-circle">❮</a>
          <a href="#slide1" class="btn btn-circle">❯</a>
        </div>
      </div>
    </div>
    <div class="text absolute top-20 left-5 md:top-20 lg:absolute left-25  ">
      <!-- <h1 class="text-5xl tect-black-900">Help <span class="text-orang-300 bg-blue-500">others</span></h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem similique animi adipisci quis libero. Perspiciatis?</p>
            <button type="button" class="W-40 H-20 bg-blue-300">DONATE</button>
         -->
      <div class="dark:text-white py-20  ">
        <div class="container mx-auto px-4">
          <h1 class="text-4xl font-bold  mb-4 lg:text-6xl"> Help
            <span
              class="typing-text bg-gradient-to-r from-green via-blue to-orange bg-clip-text text-transparent"></span>
            <span class="cursor animate-blin">|</span>
          </h1>
          <p class="text-lg max-w-96">
            The Other Guyz is a legally registered organization comprising of young professionals and youths from
            campuses across Kenya who aim at giving back to the society.
          </p>
          <a href="about.php" class=" mt-10"><button class=" min-w-40 h-10  rounded-full bg-blue ">
              About Us
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>


  <!-- banner now  -->
  <section class="w-full  p-5 flex flex-row items justify-center flex-wrap ">
    <div class="flex w-full items-center gap-4 md:max-w-96">
      <img src="./images/logo 1.svg" alt="" class="size-20 rounded-lg object-cover" />

      <div>
        <h3 class="text-lg/tight font-bold text-blue text-3xl">Our Mission</h3>

        <p class="mt-0.5 ">
          Helping You . Help Others
        </p>
      </div>
    </div>
    <div class=" flex w-full items-center gap-4 md:max-w-96">
      <img src="./images/logo 1.svg" alt="" class="size-20 rounded-lg object-cover" />

      <div>
        <h3 class="text-lg/tight font-medium text-blue text-3xl">Our Vision</h3>

        <p class="mt-0.5 ">
          TOG aims to impact generations for individual and societal growth by developing programs and projects while
          utilizing readily available talents, skills and resources to achieve our goals.
        </p>
      </div>
    </div>
  </section>

  <!-- about us the whoe tog  -->
  <div>
    <section>
      <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16 dark:text-white">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
          <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full">
            <img alt="" src="./images/DSC_0317.jpeg" class="absolute inset-0 h-full w-full object-cover" />
          </div>

          <div class="lg:py-24">
            <h2 class="text-3xl font-bold sm:text-4xl">About T.O.G</h2>

            <p class="mt-4 text-black dark:text-white">
              The Other Guys Kenya is a charitable society that comprises of youths from campuses across Kenya, and
              young professionals who aim at giving back to the society through various projects. Through the different
              projects.
            </p>

            <a href="about.php"
              class="mt-8 inline-block rounded bg-blue px-12 py-3 text-sm font-medium text-white transition hover:bg-orange focus:outline-none focus:ring focus:ring-yellow-400">
              Know More
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>




  <!-- start of the projects section  -->
  <div>
    <script type="module">
      import KeenSlider from 'https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/+esm'

      const keenSlider = new KeenSlider(
        '#keen-slider',
        {
          loop: true,
          slides: {
            origin: 'center',
            perView: 1.25,
            spacing: 16,
          },
          breakpoints: {
            '(min-width: 1024px)': {
              slides: {
                origin: 'auto',
                perView: 1.5,
                spacing: 32,
              },
            },
          },
        },
        []
      )

      const keenSliderPrevious = document.getElementById('keen-slider-previous')
      const keenSliderNext = document.getElementById('keen-slider-next')

      const keenSliderPreviousDesktop = document.getElementById('keen-slider-previous-desktop')
      const keenSliderNextDesktop = document.getElementById('keen-slider-next-desktop')

      keenSliderPrevious.addEventListener('click', () => keenSlider.prev())
      keenSliderNext.addEventListener('click', () => keenSlider.next())

      keenSliderPreviousDesktop.addEventListener('click', () => keenSlider.prev())
      keenSliderNextDesktop.addEventListener('click', () => keenSlider.next())
    </script>

    <section class=" dark:text-white">
      <div class="mx-auto max-w-[1340px] px-4 py-12 sm:px-6 lg:me-0 lg:py-16 lg:pe-0 lg:ps-8 xl:py-24">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3 lg:items-center lg:gap-16">
          <div class="max-w-xl text-center ">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
              We focus on several key factors in the community
            </h2>

            <p class="mt-4 text-gray-700 dark:text-white">
              These projects play individual roles in impacting the young lives of present and future generations. </p>

            <div class="hidden lg:mt-8 lg:flex lg:gap-4">
              <button aria-label="Previous slide" id="keen-slider-previous-desktop"
                class="rounded w-15 h-15 border border-blue p-3 text-orange transition hover:bg-blue hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="size-5 rtl:rotate-180">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
              </button>

              <button aria-label="Next slide" id="keen-slider-next-desktop"
                class="rounded-sm w-15 h-15 border border-blue p-3 text-orange transition hover:bg-blue hover:text-white">
                <svg class="size-5 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                </svg>
              </button>
            </div>
          </div>

          <div class="-mx-6 lg:col-span-2 lg:mx-0">
            <div id="keen-slider" class="keen-slider">
              <div class="keen-slider__slide">
                <a href="#" class="block">
                  <img alt="" src="./images/escape.jpeg" class="min-h-80 w-full object-cover sm:h-80 lg:h-96" />

                  <h3 class="mt-4 text-lg font-bold text-blue sm:text-xl">E.S.C.A.P.E</h3>

                  <p class="mt-2 max-w-sm ">
                    Following the recent rise in teen pregnancies , we became very concerned. Therefore we came up with
                    the E.S.C.A.P.E project, a campaign which aims to sensitize and educate teenagers on the dangers of
                    premarital sexual activities. This will be done through seminars, social media and one on one
                    engagements. </p>
                </a>
                dark:
              </div>

              <div class="keen-slider__slide">
                <a href="#" class="block">
                  <img alt="" src="./images/mentor.png" class="min-h-80 w-full object-cover sm:h-80 lg:h-96" />

                  <h3 class="mt-4 text-lg font-bold text-blue sm:text-xl">MENTOR ME</h3>

                  <p class="mt-2 max-w-sm ">
                    It's a mentorship project structured fro members to have one on one with the children who are
                    grouped according to age and gender. They discuss matters concerning mental health, life skills,
                    career paths among other candid conversations revolvng around gender, peronality and life in
                    general. </p>
                </a>
              </div>

              <div class="keen-slider__slide">
                <a href="#" class="block">
                  <img alt="" src="./images/jixpress.png" class="min-h-80 w-full object-cover sm:h-80 lg:h-96" />

                  <h3 class="mt-4 text-lg font-bold text-blue sm:text-xl">JIXPRESS</h3>

                  <p class="mt-2 max-w-sm ">
                    Talent nurturing is the sole aim of thus project. It is narrowed down to three key pillars, music ,
                    dance and art. With the help of different volunteers groups </p>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-8 flex justify-center gap-4 lg:hidden">
          <button aria-label="Previous slide" id="keen-slider-previous"
            class="rounded-full border border-rose-600 p-4 text-rose-600 transition hover:bg-rose-600 hover:text-white">
            <svg class="size-5 -rotate-180 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
            </svg>
          </button>

          <button aria-label="Next slide" id="keen-slider-next"
            class="rounded-full border border-rose-600 p-4 text-rose-600 transition hover:bg-rose-600 hover:text-white">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
            </svg>
          </button>
        </div>
      </div>
    </section>
  </div>
  <!-- start of our numbers  -->
  <div>
    <section class="dark:text-white">
      <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 md:py-16 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
          <h2 class="text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl">Our achivements in numbers</h2>

          <p class="mt-4 text-gray-500 dark:text-white sm:text-xl">
            we have been able to successfully impact the lives of several people through our work. </p>
        </div>



        <div class="mt-8 sm:mt-12">
          <dl class="grid grid-cols-1 gap-4 sm:grid-cols-4">
            <div class="flex flex-col rounded-lg border border-gray-100 px-4 py-8 text-center">
              <dt class="order-last text-lg font-medium text-gray-500">Yrs of experience</dt>

              <dd class="text-4xl font-extrabold text-blue-600 dark:text-blue md:text-5xl">6+</dd>
            </div>
            <div class="flex flex-col rounded-lg border border-gray-100 px-4 py-8 text-center">
              <dt class="order-last text-lg font-medium text-gray-500">homes visited</dt>

              <dd class="text-4xl font-extrabold text-blue-600 dark:text-blue md:text-5xl">20+</dd>
            </div>

            <div class="flex flex-col rounded-lg border border-gray-100 px-4 py-8 text-center">
              <dt class="order-last text-lg font-medium text-gray-500">Children Helped</dt>

              <dd class="text-4xl font-extrabold text-blue-600 dark:text-blue md:text-5xl">2000+</dd>
            </div>

            <div class="flex flex-col rounded-lg border border-gray-100 px-4 py-8 text-center">
              <dt class="order-last text-lg font-medium text-gray-500">Projects started</dt>

              <dd class="text-4xl font-extrabold text-blue-600 dark:text-blue md:text-5xl">5+</dd>
            </div>
          </dl>
        </div>
      </div>
    </section>
  </div>
  <!-- start of the campaign secttion  -->
  <div>

    <script type="module">
      import KeenSlider from 'https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/+esm'

      const keenSlider1 = new KeenSlider(
        '#keen-slider1',
        {
          loop: true,
          slides: {
            origin: 'center',
            perView: 1.25,
            spacing: 16,
          },
          breakpoints: {
            '(min-width: 1024px)': {
              slides: {
                origin: 'auto',
                perView: 2.5,
                spacing: 32,
              },
            },
          },
        },
        []
      )

      const keenSliderPrevious1 = document.getElementById('keen-slider-previous1')
      const keenSliderNext1 = document.getElementById('keen-slider-next1')

      keenSliderPrevious1.addEventListener('click', () => keenSlider1.prev())
      keenSliderNext1.addEventListener('click', () => keenSlider1.next())
    </script>

    <section class="p-0">
      <div class="mx-auto max-w-[1340px] px-4 py-12 sm:px-6 lg:me-0 lg:py-16 lg:pe-0 lg:ps-8 xl:py-24">
        <div class="max-w-7xl items-end justify-between sm:flex sm:pe-6 lg:pe-8">
          <h2 class="max-w-xl text-4xl font-bold tracking-tight  sm:text-5xl">
            Our recent fundraising campaigns
          </h2>

          <div class="mt-8 flex gap-4 lg:mt-0">
            <button aria-label="Previous slide" id="keen-slider-previous1"
              class="rounded  w-15 h-15 border border-blue p-3 text-orange transition hover:bg-blue hover:text-white">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-5 rtl:rotate-180">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
              </svg>
            </button>

            <button aria-label="Next slide" id="keen-slider-next1"
              class="rounded w-15 h-15 border border-blue p-3 text-orange transition hover:bg-blue hover:text-white">
              <svg class="size-5 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
              </svg>
            </button>
          </div>
        </div>

        <div class="-mx-6 mt-8 lg:col-span-2 lg:mx-0">
          <div id="keen-slider1" class="keen-slider">
            <div class="keen-slider__slide">
              <div class="dark:bg-gray-700 rounded-lg shadow-md overflow-hidden">
                <div class="relative">
                  <img class="w-full h-48 object-cover" src="./images/2021.jpg" alt="Campaign Image">
                  <div class="absolute inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
                    <span class="font-semibold text-lg">50% Funded</span>
                  </div>
                </div>
                <div class="p-4">
                  <h2 class="text-xl font-semibold mb-2">Shoe Drive</h2>
                  <p class=" mb-4">
                    Do you have some unused shoe laying around somewhere? How about you help a child who needs some.
                  </p>
                  <div class="bg-gray-200 h-4 rounded-full mb-2">
                    <div class="bg-green h-4 rounded-full w-3/4"></div>
                  </div>
                  <div class="flex justify-between items-center mb-4">
                    <span class="text-sm ">25 raised of 50 goal</span>
                    <span class="text-sm ">10 days left</span>
                  </div>
                  <a href="donate.php"> <button
                      class="bg-blue text-white py-2 px-4 rounded-md hover:bg-indigo-600">Donate</button></a>
                </div>
              </div>
            </div>

            <div class="keen-slider__slide">

              <div class="dark:bg-gray-700 rounded-lg dark:text-white shadow-md overflow-hidden">
                <div class="relative">
                  <img class="w-full h-48 object-cover" src="./images/2020d.jpg" alt="Campaign Image">
                  <div class="absolute inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
                    <span class="text-white font-semibold text-lg">70% Funded</span>
                  </div>
                </div>
                <div class="p-4">
                  <h2 class="text-xl font-semibold mb-2">Warm the Streets</h2>
                  <p class=" mb-4">
                    we invite to join us as we share love in the streets of roysambu. We will be donating warm clothings
                    to the street families.
                  </p>
                  <div class="bg-gray-200 h-4 rounded-full mb-2">
                    <div class="bg-green h-4 rounded-full w-3/4"></div>
                  </div>
                  <div class="flex justify-between items-center mb-4">
                    <span class="text-sm ">25,000 raised of 35,000 goal</span>
                    <span class="text-sm ">20 days left</span>
                  </div>
                  <a href="donate.php"> <button
                      class="bg-blue text-white py-2 px-4 rounded-md hover:bg-indigo-600">Donate</button></a>
                </div>
              </div>
            </div>

            <div class="keen-slider__slide">
              <div class="dark:bg-gray-700 rounded-lg shadow-md overflow-hidden">
                <div class="relative">
                  <img class="w-full h-48 object-cover" src="./images/2021d.jpg" alt="Campaign Image">
                  <div class="absolute inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
                    <span class="text-white font-semibold text-lg">70% Funded</span>
                  </div>
                </div>
                <div class="p-4">
                  <h2 class="text-xl font-semibold mb-2">Book Drive</h2>
                  <p class=" mb-4">
                    Donate your used books. By donating you can change the learning experiences of a child
                  </p>
                  <div class="bg-gray-200 h-4 rounded-full mb-2">
                    <div class="bg-green h-4 rounded-full w-3/4"></div>
                  </div>
                  <div class="flex justify-between items-center mb-4">
                    <span class="text-sm ">2,000 raised of 15,000 goal</span>
                    <span class="text-sm ">20 days left</span>
                  </div>
                  <a href="donate.php"> <button
                      class="bg-blue text-white py-2 px-4 rounded-md hover:bg-indigo-600">Donate</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- team members section  -->
  <div class="my-20 dark:text-white">
    <h1 class="max-w-xl text-4xl font-bold tracking-tight  sm:text-5xl">Our Team Members</h1>
    <div class="carousel  min-h-96 max-w-full p-4 space-x-4  rounded-box">
      <div class="carousel-item max-w-full md:md:w-1/2 lg:w-1/3">
        <!-- <img src="../Frontend/images/tog1.jpg" alt="Burger" /> -->
        <a href="#" class="group relative block bg-black w-full ">
          <img alt="" src="./images/joshu 1.png"
            class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50" />

          <div class="relative p-4 sm:p-6 lg:p-8">
            <p class="text-sm font-medium uppercase tracking-widest text-pink-500">Chairman</p>

            <p class="text-xl font-bold text-white sm:text-2xl">Joshua Mutisya</p>

            <div class="mt-32 sm:mt-48 lg:mt-64">
              <div
                class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                <p class="text-sm text-white">
                  An outstanding person who also happens to be the founder of T.O.G.
                </p>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="carousel-item max-w-full md:w-1/2 lg:w-1/3">
        <!-- <img src="../Frontend/images/tog1.jpg" alt="Burger" /> -->
        <a href="#" class="group relative block bg-black w-full ">
          <img alt=""
            src="https://scontent-mba1-1.xx.fbcdn.net/v/t39.30808-6/411049299_744724301021067_2933475471785163814_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEJc5Rblyf2vD36cIE-Hcz5qF5TnkNRoG6oXlOeQ1GgbrHe4bM4ryKRD6WPoIuqcCWSts14nz-91wTHHg_lZ_dA&_nc_ohc=5OxE83kPbrEQ7kNvgH8PTsb&_nc_ht=scontent-mba1-1.xx&oh=00_AfDj38arm050qwh42y6l_DfQS3MQhig__mFWPD3uGJHl6A&oe=66355653"
            class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50" />

          <div class="relative p-4 sm:p-6 lg:p-8">
            <p class="text-sm font-medium uppercase tracking-widest text-pink-500">Secretary</p>

            <p class="text-xl font-bold text-white sm:text-2xl">Brenda Melly</p>

            <div class="mt-32 sm:mt-48 lg:mt-64">
              <div
                class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                <p class="text-sm text-white">
                  An outstanding person who also happens to be the founder of T.O.G.
                </p>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="carousel-item max-w-full md:w-1/2 lg:w-1/3">
        <!-- <img src="../Frontend/images/tog2.jpg" alt="Burger" /> -->
        <a href="#" class="group relative block bg-black w-full ">
          <img alt=""
            src="https://scontent-mba1-1.xx.fbcdn.net/v/t39.30808-6/274583352_2850229075278939_8591229181442565040_n.jpg?stp=dst-jpg_p600x600&_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeG6iPDJP-Hmjp2GivJsZuH4ENLrnkkJhNcQ0uueSQmE15QESogzjWaJIByCoRTx9TATe2Bvr0kijplEPIt7slto&_nc_ohc=EochWztyfloAb4uQAJq&_nc_oc=AdjxXjeVvSZnvmM8bxDVZCA0Wsykd0ChJAt6gFRtxDyvWnpkBy5iF6iyFD_ng7Ha4pE&_nc_ht=scontent-mba1-1.xx&oh=00_AfD1UbZ0Mp8UBtyRiBlWYYu-GV1Y-z3fMHIFDSILGsIPIw&oe=66357FC5"
            class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50" />

          <div class="relative p-4 sm:p-6 lg:p-8">
            <p class="text-sm font-medium uppercase tracking-widest text-pink-500">member</p>

            <p class="text-xl font-bold text-white sm:text-2xl">Joshua Mutisya</p>

            <div class="mt-32 sm:mt-48 lg:mt-64">
              <div
                class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                <p class="text-sm text-white">
                  An outstanding person who also happens to be the founder of T.O.G.
                </p>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="carousel-item max-w-full md:w-1/2 lg:w-1/3">
        <!-- <img src="../Frontend/images/tog3.jpg" alt="Burger" /> -->
        <a href="#" class="group relative block bg-black w-full ">
          <img alt="" src="./images/frame 33.png"
            class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50" />

          <div class="relative p-4 sm:p-6 lg:p-8">
            <p class="text-sm font-medium uppercase tracking-widest text-pink-500">CTO</p>

            <p class="text-xl font-bold text-white sm:text-2xl">Mitchel Sultan</p>

            <div class="mt-32 sm:mt-48 lg:mt-64">
              <div
                class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                <p class="text-sm text-white">
                  An outstanding person who also happens to be the founder of T.O.G.
                </p>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="carousel-item max-w-full md:w-1/2 lg:w-1/3">
        <!-- <img src="../Frontend/images/tog1.jpg" alt="Burger" /> -->
        <a href="#" class="group relative block bg-black w-full ">
          <img alt=""
            src="https://scontent-mba1-1.xx.fbcdn.net/v/t39.30808-6/434678028_808158951344268_3194621794103410714_n.jpg?stp=dst-jpg_s640x640&_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeG4jim9h8ANW5BHgvuqDoiuzQFJbud6_nTNAUlu53r-dF1pWLSzNXpvRfmW8h66AB4Tt2tl4zwpGkzxxw7FtxAI&_nc_ohc=2eDInqEUqBwQ7kNvgFtS7id&_nc_ht=scontent-mba1-1.xx&oh=00_AfAbumxaWCDqdSFoevUxi_qiJUJGtXKuchhxBXC4lY-KIw&oe=663548F8"
            class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50" />

          <div class="relative p-4 sm:p-6 lg:p-8">
            <p class="text-sm font-medium uppercase tracking-widest text-pink-500">Member</p>

            <p class="text-xl font-bold text-white sm:text-2xl">Daisy Tuwei</p>

            <div class="mt-32 sm:mt-48 lg:mt-64">
              <div
                class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                <p class="text-sm text-white">
                  An outstanding person who also happens to be the founder of T.O.G.
                </p>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="carousel-item max-w-full md:w-1/2 lg:w-1/3">
        <!-- <img src="../Frontend/images/tog2.jpg" alt="Burger" /> -->
        <a href="#" class="group relative block bg-black w-full ">
          <img alt=""
            src="https://scontent-mba1-1.xx.fbcdn.net/v/t39.30808-6/434721571_808159354677561_5589503140513523939_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGCqAoWDGlO70xINACiRQJh0GU08FcwKVTQZTTwVzApVLAHCIasrkBi4j3dnCMh4ygkrdUYA4zIswUSW4naU3VL&_nc_ohc=lql4_Z2Tez4Q7kNvgFliriE&_nc_ht=scontent-mba1-1.xx&oh=00_AfAqO8Iz9fhm1GE3n1eUREgQpgeHfy1rgyu5lNhXcqf_Pg&oe=663555F1"
            class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50" />

          <div class="relative p-4 sm:p-6 lg:p-8">
            <p class="text-sm font-medium uppercase tracking-widest text-pink-500">members</p>

            <p class="text-xl font-bold text-white sm:text-2xl">Joshua Mutisya</p>

            <div class="mt-32 sm:mt-48 lg:mt-64">
              <div
                class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                <p class="text-sm text-white">
                  An outstanding person who also happens to be the founder of T.O.G.
                </p>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="carousel-item max-w-full md:w-1/2 lg:w-1/3">
        <!-- <img src="../Frontend/images/tog3.jpg" alt="Burger" /> -->
        <a href="#" class="group relative block bg-black w-full ">
          <img alt="" src="https://scontent-mba1-1.xx.fbcdn.net/v/t39.30808-6/434646798_808159151344248_1561291313141300641_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFw5NMRpRTnayRIEUKnEbyGzrkHhogABxfOuQeGiAAHF1BhAM6Q72Jv0Eu8XYfI_SA7DmTtmUU2EX5o6Tx5HyyX&_nc_ohc=7PTbdEHbeZ4Q7kNvgHa4K7m&_nc_ht=scontent-mba1-1.xx&oh=00_AfCKw4dmf3pLohmd5_fRnO4wPiCIavFvmXJv6V485SvNUg&oe=66355FEA
            class=" absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity
            group-hover:opacity-50" />

          <div class="relative p-4 sm:p-6 lg:p-8">
            <p class="text-sm font-medium uppercase tracking-widest text-pink-500">Member</p>

            <p class="text-xl font-bold text-white sm:text-2xl">Joshua Mutisya</p>

            <div class="mt-32 sm:mt-48 lg:mt-64">
              <div
                class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                <p class="text-sm text-white">
                  An outstanding person who also happens to be the founder of T.O.G.
                </p>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>


  <!-- blog section for your news  -->
  <div class=" p-5 ">
    <h1 class="max-w-xl text-4xl mb-10 font-bold tracking-tight text-gray-900 dark:text-white sm:text-5xlm-10">Get all
      our information
      here
    </h1>
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
      <div class=" rounded-lg bg-gray-200">
        <article class="relative overflow-hidden rounded-lg shadow transition hover:shadow-lg">
          <img alt=""
            src="https://scontent-mba1-1.xx.fbcdn.net/v/t39.30808-6/340766964_951498499611520_8935096599558007568_n.jpg?stp=dst-jpg_p600x600&_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHYXigSnBuL9LOnrxtPaGwbrN4_5Apzsaas3j_kCnOxplzguDJ1QTc0cXcZH1B_oWf35SUyvaSU0BxI6UUoYFHF&_nc_ohc=yu4wo257fMgQ7kNvgHA6Dc6&_nc_ht=scontent-mba1-1.xx&oh=00_AfD_xrrUazzYw5iL9qMHM2XIQDe9o_dRSqqnuIinqU5gHA&oe=66359F63"
            class="absolute inset-0 h-full w-full object-cover" />

          <div class="relative bg-gradient-to-t from-gray-900/50 to-gray-900/25 pt-32 sm:pt-48 lg:pt-64">
            <div class="p-4 sm:p-6">
              <time datetime="2022-10-10" class="block text-xs text-white/90"> 12th Feb 2024 </time>

              <a href="#">
                <h3 class="mt-0.5 text-lg text-white">Tips for Holding a Successful Fundraising Event</h3>
              </a>

              <p class="mt-2  line-clamp-3 text-sm/relaxed text-white/95">
                Fundraising events play a crucial role in generating support and resources for charitable organizations.
                Whether you're organizing a gala, a charity auction, or a community fundraiser, the success of your
                event hinges on careful planning, effective communication, and enthusiastic engagement.
              </p>
            </div>
          </div>
        </article>
      </div>
      <div class=" rounded-lg bg-gray-200">
        <article class="relative overflow-hidden rounded-lg shadow transition hover:shadow-lg">
          <img alt=""
            src="https://scontent-mba1-1.xx.fbcdn.net/v/t39.30808-6/318416688_3068197120148799_7984053280739284548_n.jpg?stp=dst-jpg_p600x600&_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHSCv0n5-nop9cKshVA7kTB4mG6O7tGZWbiYbo7u0ZlZpLu8a1AgnGGjUetzfXaxE3FqRJTPPdTtjWAUqR0nvBj&_nc_ohc=6jfkNqTSItQQ7kNvgFXFlwq&_nc_ht=scontent-mba1-1.xx&oh=00_AfCbf5kLVJfT_8--jmpz_qfaG-8Dj-RNFimIpg4uq4FiyQ&oe=66358AD5"
            class="absolute inset-0 h-full w-full object-cover" />

          <div class="relative bg-gradient-to-t from-gray-900/50 to-gray-900/25 pt-32 sm:pt-48 lg:pt-64">
            <div class="p-4 sm:p-6">
              <time datetime="2022-10-10" class="block text-xs text-white/90"> 10th Oct 2022 </time>

              <a href="#">
                <h3 class="mt-0.5 text-lg text-white">The Importance of Community Engagement</h3>
              </a>

              <p class="mt-2 line-clamp-3 text-sm/relaxed text-white/95">
                Community engagement is a cornerstone of success for any charitable organization striving to make a
                meaningful impact. At its core, community engagement involves fostering mutually beneficial
                relationships with the individuals, groups, and communities that an organization serves. </p>
            </div>
          </div>
        </article>
      </div>
      <div class=" rounded-lg bg-gray-200">
        <article class="relative overflow-hidden rounded-lg shadow transition hover:shadow-lg">
          <img alt=""
            src="https://scontent-mba1-1.xx.fbcdn.net/v/t39.30808-6/274515370_2850229065278940_2955545983086897283_n.jpg?stp=dst-jpg_p600x600&_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGdUjt9P6mCvtkbaDchjs3jqyFw7wL0uWWrIXDvAvS5ZRO-gyfos6hj2564iXwYmjNbEMF3oSm4ZsMpIFr9taiH&_nc_ohc=GWfq6HBdwuQAb5iDbDr&_nc_ht=scontent-mba1-1.xx&oh=00_AfAdbq2r7smqpaNPjEZVl1D7azv8JwVhpD-euvRuuELfcA&oe=66358878"
            class="absolute inset-0 h-full w-full object-cover" />

          <div class="relative bg-gradient-to-t from-gray-900/50 to-gray-900/25 pt-32 sm:pt-48 lg:pt-64">
            <div class="p-4 sm:p-6">
              <time datetime="2022-10-10" class="block text-xs text-white/90"> 10th Oct 2022 </time>

              <a href="#">
                <h3 class="mt-0.5 text-lg text-white">How your donations make an impact</h3>
              </a>

              <p class="mt-2 line-clamp-3 text-sm/relaxed text-white/95">
                At TOG, we understand the importance of transparency and accountability when it comes to the generous
                contributions we receive from our donors. We believe in showing our supporters exactly how their
                donations are making a tangible difference in the lives of those we serve.
              </p>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
  <!-- partner carousel  -->
  <div class="max-w-full max-h-84 p-10  flex flex-col gap-5">
    <h2 class="text-4xl text-black my-20 font-bold text-center dark:text-white">Our Trusted Partners</h2>
    <div>
      <div class="overflow-hidden flex flex-row gap-5 max-w-full h-full animate-scrolll">
        <div class="h-32 min-w-64 rounded-lg bg-white">
          <img src="./images/jixpress.png" alt="" class="max-w-full object-cover">
        </div>
        <div class="h-32 min-w-64 rounded-lg bg-white">
          <img src="./images/jixpress.png" alt="" class="max-w-full object-cover">
        </div>
        <div class="h-32 min-w-64 rounded-lg bg-white">
          <img src="./images/jixpress.png" alt="" class="max-w-full object-cover">
        </div>
        <div class="h-32 min-w-64 rounded-lg bg-white">
          <img src="./images/jixpress.png" alt="" class="max-w-full object-cover">
        </div>

      </div>
    </div>

  </div>

  <!-- banner for emails  -->

  <div>

    <section class="p-0 dark:text-white">
      <div class="p-8 md:p-12 lg:px-16 lg:py-24">
        <div class="mx-auto max-w-lg text-center">
          <h2
            class="text-4xl font-bold bg-gradient-to-r from-green via-blue to-orange bg-clip-text text-transparent md:text-3xl">
            Help someone live a life as full as your own
          </h2>

          <p class="hidden  sm:mt-4 sm:block">
            By signing up today with us , you will receive our newsletters and all the information required to keep up
            with us
          </p>
        </div>

        <div class="mx-auto mt-8 max-w-xl">
          <form action="#" class="sm:flex sm:gap-4">
            <div class="sm:flex-1">
              <label for="email" class="sr-only">Email</label>

              <input type="email" placeholder="Email address"
                class="w-full rounded-md border-gray bg-white p-3 text-black shadow-sm transition focus:border-white focus:outline-none focus:ring focus:ring-yellow-400" />
            </div>

            <button type="submit"
              class="group mt-4 flex w-full items-center justify-center gap-2 rounded-md bg-blue px-5 py-3 text-white transition focus:outline-none focus:ring focus:ring-yellow-400 sm:mt-0 sm:w-auto">
              <span class="text-sm font-medium"> Sign Up </span>

              <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </button>
          </form>
        </div>
      </div>
    </section>
  </div>
  <!-- start of footer section  -->
  <?php require_once ('include/footer.php') ?>

  <!-- 
the lst 
st  -->


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
            blue: '#0dade9',
            green: '#8dc53c',
            orange: '#f5951c',
          }
        }
      }
    }
  </script>

  <script>
    const typingText = document.querySelector('.typing-text');
    const words = ['Us', 'Others'];
    let currentWordIndex = 0;
    let currentCharIndex = 0;

    function typeWords() {
      const currentWord = words[currentWordIndex];
      typingText.textContent = currentWord.slice(0, currentCharIndex);

      if (currentCharIndex < currentWord.length) {
        currentCharIndex++;
        setTimeout(typeWords, 100);
      } else {
        setTimeout(deleteWords, 4000);
      }
    }

    function deleteWords() {
      const currentWord = words[currentWordIndex];
      typingText.textContent = currentWord.slice(0, currentCharIndex);

      if (currentCharIndex > 0) {
        currentCharIndex--;
        setTimeout(deleteWords, 50);
      } else {
        currentWordIndex = (currentWordIndex + 1) % words.length;
        setTimeout(typeWords, 500);
      }
    }

    typeWords();
  </script>


</body>

</html>