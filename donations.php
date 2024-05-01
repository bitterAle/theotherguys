<?php require_once ('include/head.php') ?>
<title>Donate Here</title>
</head>

<body>
    <?php require_once ('include/navbar.php') ?>

    <div>
    </div>
    <!--
  Heads up! 👋

  Plugins:
    - @tailwindcss/forms
-->

    <section class="relative flex flex-wrap lg:h-screen lg:items-center">
        <div class="w-full px-4 py-12 sm:px-6 sm:py-16 lg:w-1/2 lg:px-8 lg:py-24">
            <div class="mx-auto max-w-lg text-center">
                <h1 class="text-2xl font-bold sm:text-3xl">Get involved today!</h1>

                <p class="mt-4 text-gray-500">
                    You can be able to change somebody's life today. Donate to us and help us help you. </p>
            </div>

            <!-- <form action="#" class="mx-auto mb-0 mt-8 max-w-md space-y-4"> -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="mb-4">
                    <div
                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 mr-2">
                        Donation Type
                    </div>
                    <div class="">
                        <button id="oneTimeBtn"
                            class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            One-Time
                        </button>
                        <button id="monthlyBtn"
                            class="bg-gray-300 text-gray-800 px-4 py-2 rounded-md hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400">
                            Monthly
                        </button>
                    </div>
                </div>
                <div class="mb-4">
                    <div
                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 mr-2">
                        Amount
                    </div>
                    <div class=""> <button
                            class="amount-btn bg-gray-300 text-gray-800 px-4 py-2 rounded-md hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400">
                            $10
                        </button>
                        <button
                            class="amount-btn bg-gray-300 text-gray-800 px-4 py-2 rounded-md hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400">
                            $25
                        </button>
                        <button
                            class="amount-btn bg-gray-300 text-gray-800 px-4 py-2 rounded-md hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400">
                            $50
                        </button>
                        <button
                            class="amount-btn bg-gray-300 text-gray-800 px-4 py-2 rounded-md hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400">
                            $100
                        </button>
                        <div id="customAmountContainer" class="inline-block ml-4">
                            <input id="customAmount" type="text" placeholder="Custom Amount"
                                class="px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <button id="submitDonation"
                        class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        Submit Donation
                    </button>
                </div>
            </div>
        </div>
        </form>
        </div>

        <div class="relative h-64 w-full sm:h-96 lg:h-full lg:w-1/2">
            <img alt=""
                src="https://images.unsplash.com/photo-1630450202872-e0829c9d6172?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                class="absolute inset-0 h-full w-full object-cover" />
        </div>
    </section>




    <?php require_once ('include/footer.php') ?>



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

    <script>
        // Donation Type Buttons
        const oneTimeBtn = document.getElementById('oneTimeBtn');
        const monthlyBtn = document.getElementById('monthlyBtn');

        let donationType = 'one-time';

        oneTimeBtn.addEventListener('click', () => {
            oneTimeBtn.classList.add('bg-indigo-500', 'text-white');
            oneTimeBtn.classList.remove('bg-gray-300', 'text-gray-800');
            monthlyBtn.classList.remove('bg-indigo-500', 'text-white');
            monthlyBtn.classList.add('bg-gray-300', 'text-gray-800');
            donationType = 'one-time';
        });

        monthlyBtn.addEventListener('click', () => {
            monthlyBtn.classList.add('bg-indigo-500', 'text-white');
            monthlyBtn.classList.remove('bg-gray-300', 'text-gray-800');
            oneTimeBtn.classList.remove('bg-indigo-500', 'text-white');
            oneTimeBtn.classList.add('bg-gray-300', 'text-gray-800');
            donationType = 'monthly';
        });

        // Amount Buttons
        const amountBtns = document.querySelectorAll('.amount-btn');
        const customAmountContainer = document.getElementById('customAmountContainer');
        const customAmount = document.getElementById('customAmount');

        let selectedAmount = null;

        amountBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                amountBtns.forEach(btn => btn.classList.remove('bg-indigo-500', 'text-white'));
                btn.classList.add('bg-indigo-500', 'text-white');
                selectedAmount = parseInt(btn.textContent.replace('$', ''));
                customAmountContainer.classList.remove('bg-indigo-500', 'text-white');
                customAmount.value = '';
            });
        });

        customAmount.addEventListener('input', () => {
            amountBtns.forEach(btn => btn.classList.remove('bg-indigo-500', 'text-white'));
            customAmountContainer.classList.add('bg-indigo-500', 'text-white');
            selectedAmount = parseInt(customAmount.value) || null;
        });

        // Submit Donation
        const submitDonation = document.getElementById('submitDonation');
        const paymentModal = document.getElementById('paymentModal');

        submitDonation.addEventListener('click', () => {
            if (selectedAmount) {
                paymentModal.classList.remove('hidden');
            } else {
                alert('Please select an amount or enter a custom amount.');
            }
        });

        // Payment Modal
        const creditCardBtn = document.getElementById('creditCardBtn');
        const paypalBtn = document.getElementById('paypalBtn');
        const creditCardForm = document.getElementById('creditCardForm');
        const paypalForm = document.getElementById('paypalForm');
        const closeModal = document.getElementById('closeModal');

        creditCardBtn.addEventListener('click', () => {
            creditCardBtn.classList.add('bg-indigo-500', 'text-white');
            paypalBtn.classList.remove('bg-indigo-500', 'text-white');
            creditCardForm.classList.remove('hidden');
            paypalForm.classList.add('hidden');
        });

        paypalBtn.addEventListener('click', () => {
            paypalBtn.classList.add('bg-indigo-500', 'text-white');
            creditCardBtn.classList.remove('bg-indigo-500', 'text-white');
            paypalForm.classList.remove('hidden');
            creditCardForm.classList.add('hidden');
        });

        closeModal.addEventListener('click', () => {
            paymentModal.classList.add('hidden');
        });

        window.addEventListener('click', (event) => {
            if (event.target === paymentModal) {
                paymentModal.classList.add('hidden');
            }
        });

        // Process Payment
        const processPayment = document.getElementById('processPayment');

        processPayment.addEventListener('click', () => {
            // Add your payment processing logic here
            const paymentMethod = creditCardForm.classList.contains('hidden') ? 'paypal' : 'credit-card';
            const amount = selectedAmount;
            const frequency = donationType;

            // Example: Log the payment details to the console
            console.log('Payment Details:');
            console.log('Method:', paymentMethod);
            console.log('Amount:', amount);
            console.log('Frequency:', frequency);

            // Reset form and close modal
            amountBtns.forEach(btn => btn.classList.remove('bg-indigo-500', 'text-white'));
            customAmountContainer.classList.remove('bg-indigo-500', 'text-white');
            customAmount.value = '';
            selectedAmount = null;
            paymentModal.classList.add('hidden');

            alert('Payment processed successfully!');
        });
    </script>

</body>

</html>