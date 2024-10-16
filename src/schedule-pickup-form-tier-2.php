<!-- Head -->
<?php include("./components/head.php") ?>

<!-- Main Toolbar -->
<?php include("./components/user-main-toolbar.php") ?>

<!-- Main container -->
<main class="flex flex-col h-full">

    <?php include "./components/user-account-side-navigation.php"; ?>
    <!-- Content -->
    <div class="lg:ml-64 flex-1 p-4 lg:p-10 my-12">

        <div class="grid grid-cols-12 items-stretch gap-4">
            <div class="col-span-12 lg:col-span-7">
                <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                    <h1 class="text-xl font-semibold mb-4">Schedule Pickup</h1>
                    <!-- Sign Up Form -->
                    <form action="#" method="POST">

                        <fieldset>

                            <legend class="block w-full">
                                <div class="flex items-center gap-2 justify-between w-full mb-4">
                                    <hr class="w-full">
                                    <span class="block w-full text-nowrap text-center font-bold">Recipient Information</span>
                                    <hr class="w-full">
                                </div>
                            </legend>

                            <div class="grid grid-cols-2 gap-4">

                                <div class="col-span-2">
                                    <label for="full_name" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700 dark:text-white">Full Name</label>
                                    <input type="text" id="full_name" name="full_name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                                </div>
                                <div class="col-span-2 lg:col-span-1">
                                    <label for="email" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700 dark:text-white">Email Address</label>
                                    <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                                </div>
                                <div class="col-span-2 lg:col-span-1">
                                    <label for="phone" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700 dark:text-white">Phone Number</label>
                                    <div class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                        <!-- Input field for phone number -->
                                        <input id="phone" type="tel" name="phone" />
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <div class="h-8"></div>

                        <fieldset>
                            <legend class="block w-full">
                                <div class="flex items-center gap-2 justify-between w-full my-4">
                                    <hr class="w-full">
                                    <span class="block w-full text-nowrap text-center font-bold">Shipping Address</span>
                                    <hr class="w-full">
                                </div>
                            </legend>

                            <div class="grid grid-cols-12 gap-4">
                                <div class="col-span-12">
                                    <label for="street" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700 dark:text-white">Street</label>
                                    <input type="text" id="street" name="street" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <label for="apartment" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700 dark:text-white">Apartment, suite, etc.</label>
                                    <input type="text" id="apartment" name="apartment" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <label for="city" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700 dark:text-white">City</label>
                                    <input type="text" id="city" name="city" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <label for="state" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700 dark:text-white">State/Province</label>
                                    <input type="text" id="state" name="state" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <label for="zip" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700 dark:text-white">ZIP/Postal Code</label>
                                    <input type="text" id="zip" name="zip" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                                </div>

                                <!-- Country -->
                                <div class="col-span-12 lg:col-span-4">
                                    <label for="country" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700 dark:text-white">Country</label>
                                    <select id="country" name="country"
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                        required>
                                        <option value="usa">United States</option>
                                        <option value="canada">Canada</option>
                                        <option value="uk">United Kingdom</option>
                                        <option value="australia">Australia</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>



                        <div class="h-8"></div>

                        <fieldset>
                            <legend class="block w-full">
                                <div class="flex items-center gap-2 justify-between w-full my-4">
                                    <hr class="w-full">
                                    <span class="block w-full text-nowrap text-center font-bold">Product Request</span>
                                    <hr class="w-full">
                                </div>
                            </legend>

                            <div class="grid grid-cols-12 gap-4 items-end">
                                <div class="col-span-12">
                                    <label for="store" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700 dark:text-white">Store</label>
                                    <select id="store" name="store"
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                        required>
                                        <option value="amazon">Amazon</option>
                                        <option value="alibaba">Alibaba</option>
                                        <option value="aliexpress">Aliexpress</option>
                                        <option value="temu">Temu</option>
                                        <option value="shein">Shein</option>
                                        <option value="other">Other (please state)</option>
                                    </select>
                                </div>
                                <div class="col-span-12">
                                    <label for="productLink-description" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700 dark:text-white">Product Link/description</label>
                                    <textarea id="productLink-description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <label for="productPriceInDollars" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700 dark:text-white">Product Price in Dollars</label>
                                    <input type="text" id="productPriceInDollars" name="productPriceInDollars" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <label for="localShippingFee" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700 dark:text-white">Local Shipping fee</label>
                                    <input type="text" id="localShippingFee" name="localShippingFee" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                                </div>
                                <div class="col-span-12 lg:col-span-4">
                                    <label for="estimatedWeight" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700 dark:text-white">Estimated Weight (Enter the estimated weight in kg or lbs)</label>
                                    <input type="text" id="estimatedWeight" name="estimatedWeight" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <label for="city" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700 dark:text-white">City</label>
                                    <input type="text" id="city" name="city" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <label for="state" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700 dark:text-white">State/Province</label>
                                    <input type="text" id="state" name="state" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <label for="zip" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700 dark:text-white">ZIP/Postal Code</label>
                                    <input type="text" id="zip" name="zip" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                                </div>
                            </div>
                        </fieldset>
                        <!-- Submit Button -->
                        <div class="mt-6">
                            <button type="submit"
                                class="px-4 py-2 font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Schedule
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-5 relative">
                <div class="scroll-holder movingElement | lg:absolute left-0 right-0 block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">



                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Product price:<!-- (Currency Conversion Rate in Naira) -->
                                    </th>
                                    <td class="px-6 py-4">
                                        0.00 NAIRA
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Local Shipping fee:
                                    </th>
                                    <td class="px-6 py-4">
                                        0.00 NAIRA
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        International Shipping fee: <!-- (in Naira) -->
                                    </th>
                                    <td class="px-6 py-4">
                                        0.00 NAIRA
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Service charge:<!-- 1% of product price -->
                                    </th>
                                    <td class="px-6 py-4">
                                        0.00 NAIRA
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Total Amount: <!-- (Calculated automatically based on product price, weight, shipping fees, and service fee)-->
                                    </th>
                                    <td class="px-6 py-4">
                                        0.00 NAIRA
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Estimated Delivery Time: <!--: (Automatically calculated)-->
                                    </th>
                                    <td class="px-6 py-4">
                                        3 days
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <p><small class="text-blue-400 font-semibold">Additional charges may apply if the actual weight exceeds the estimated weight.</small></p>

                </div>
            </div>

        </div>
    </div>

</main>



<!-- Foot -->
<?php include("./components/foot.php") ?>