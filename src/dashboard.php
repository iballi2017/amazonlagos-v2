<!-- Head -->
<?php include("./components/head.php") ?>


<!-- Main Toolbar -->
<?php include("./components/user-main-toolbar.php") ?>

<!-- Main container -->
<main class="flex flex-col h-full">

    <?php include "./components/user-account-side-navigation.php"; ?>

    <!-- Content -->
    <div class="lg:ml-64 flex-1 p-4 lg:p-10 my-12">
        <!-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6">
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-lg font-semibold mb-2">Card 1</h2>
                <p>This is some content inside the card.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-lg font-semibold mb-2">Card 2</h2>
                <p>This is some content inside the card.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-lg font-semibold mb-2">Card 3</h2>
                <p>This is some content inside the card.</p>
            </div>
        </div> -->



        <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
<!-- 
            <h1 class="text-lg font-semibold mb-4">Track Your Shipment</h1>
            <label for="input-group-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter Tracking ID</label>
            <div class="relative mb-6">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                        <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                        <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                    </svg>
                </div>
                <input type="text" id="input-group-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com">
            </div> -->

            <form action="">
                <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Track Your Shipment</label>
                <div class="flex">
                    <input type="text" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 focus:border-e-0 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your tracking ID">
                    <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-s-0 border-gray-300 border-s-0 rounded-e-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                        <!-- <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                    </svg> -->
                        <button class="text-lg font-bold px-4 lg:px-10">Track</button>
                    </span>
                </div>
            </form>
        </div>

        <hr class="my-4">

        <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

            <h1 class="text-lg font-semibold mb-4 dark:text-white">Exchange Rates</h1>

            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-4">
                                Currency
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Buying
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Selling
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                                <div class="flex items-center gap-4">
                                    <div class="h-10 w-10 rounded-full overflow-hidden">
                                        <img src="https://raenest-public.s3.eu-west-2.amazonaws.com/flags/square-flags/eur.svg" alt="">
                                    </div>
                                    EUR €
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                ₦ 1830.94
                            </td>
                            <td class="px-6 py-4">
                                ₦ 1905
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="flex items-center gap-4">
                                    <div class="h-10 w-10 rounded-full overflow-hidden">
                                        <img src="https://raenest-public.s3.eu-west-2.amazonaws.com/flags/square-flags/gbp.svg" alt="">
                                    </div>
                                    GBP £
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                ₦ 2186
                            </td>
                            <td class="px-6 py-4">
                                ₦ 2220
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="flex items-center gap-4">
                                    <div class="h-10 w-10 rounded-full overflow-hidden">
                                        <img src="https://raenest-public.s3.eu-west-2.amazonaws.com/flags/square-flags/usd.svg" alt="">
                                    </div>
                                    USD $
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                ₦ 1670
                            </td>
                            <td class="px-6 py-4">
                                ₦ 1710
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p> -->
        </div>




    </div>

</main>


<!-- Foot -->
<?php include("./components/foot.php") ?>