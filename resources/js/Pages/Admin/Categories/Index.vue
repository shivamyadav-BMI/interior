<template>
    <AdminLayout>
        <!-- Main Content -->
        <main class="pt-6">
            <div class="container full-container py-5">
                <!---Contact Card--->

                <div class="card mb-6">
                    <div class="card-body">
                        <div class="grid grid-cols-12 gap-6">
                            <div
                                class="lg:col-span-4 md:col-span-12 sm:col-span-12 col-span-12"
                            >
                                <form class="relative max-w-64">
                                    <input
                                        type="text"
                                        class="form-control product-search pl-11 py-2"
                                        id="input-search"
                                        placeholder="Search Contacts..."
                                    />
                                    <i
                                        class="ti ti-search absolute start-3 text-bodytext dark:text-darklink text-xl translate-y-1/2"
                                    ></i>
                                </form>
                            </div>
                            <div
                                class="lg:col-span-8 md:col-span-12 sm:col-span-12 col-span-12"
                            >
                                <div
                                    class="flex justify-end items-center gap-3"
                                >
                                    <div
                                        class="action-btn show-btn"
                                        style="display: none"
                                    >
                                        <a
                                            href="javascript:void(0)"
                                            class="delete-multiple btn flex gap-2 items-center btn-light-error"
                                        >
                                            <i
                                                class="ti ti-trash text-lg leading-none"
                                            ></i>
                                            Delete All Row
                                        </a>
                                    </div>
                                    <a
                                        href="javascript:void(0)"
                                        id="btn-add-contact"
                                        data-hs-overlay="#addContactModal"
                                        class="btn flex gap-2 items-center"
                                    >
                                        <i
                                            class="ti ti-users text-white text-lg leading-none"
                                        ></i>
                                        Add Contact
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    id="addContactModal"
                    class="hs-overlay hidden w-full h-full fixed top-0 start-0 z-[60] overflow-x-hidden overflow-y-auto"
                >
                    <div
                        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center"
                    >
                        <div
                            class="w-full flex flex-col bg-white dark:bg-dark shadow-md dark:shadow-dark-md rounded-md modal-content"
                        >
                            <div
                                class="flex justify-between items-center py-3 px-4"
                            >
                                <h3 class="text-lg">Contact</h3>
                                <button
                                    type="button"
                                    class="flex justify-center items-center w-7 h-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                    data-hs-overlay="#addContactModal"
                                >
                                    <span class="sr-only">Close</span>
                                    <svg
                                        class="flex-shrink-0 w-4 h-4"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <path d="M18 6 6 18" />
                                        <path d="m6 6 12 12" />
                                    </svg>
                                </button>
                            </div>
                            <div class="p-4 overflow-y-auto">
                                <div class="add-contact-box">
                                    <div class="add-contact-content">
                                        <form id="addContactModalTitle">
                                            <div
                                                class="grid grid-cols-12 gap-6"
                                            >
                                                <div
                                                    class="lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"
                                                >
                                                    <div class="contact-name">
                                                        <input
                                                            type="text"
                                                            id="c-name"
                                                            class="form-control"
                                                            placeholder="Name"
                                                        />
                                                        <span
                                                            class="validation-text text-error"
                                                        ></span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"
                                                >
                                                    <div class="contact-email">
                                                        <input
                                                            type="text"
                                                            id="c-email"
                                                            class="form-control"
                                                            placeholder="Email"
                                                        />
                                                        <span
                                                            class="validation-text text-error"
                                                        ></span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"
                                                >
                                                    <div
                                                        class="contact-occupation"
                                                    >
                                                        <input
                                                            type="text"
                                                            id="c-occupation"
                                                            class="form-control"
                                                            placeholder="Occupation"
                                                        />
                                                    </div>
                                                </div>
                                                <div
                                                    class="lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12"
                                                >
                                                    <div class="contact-phone">
                                                        <input
                                                            type="text"
                                                            id="c-phone"
                                                            class="form-control"
                                                            placeholder="Phone"
                                                        />
                                                        <span
                                                            class="validation-text text-error"
                                                        ></span>
                                                    </div>
                                                </div>
                                                <div class="col-span-12">
                                                    <div
                                                        class="contact-location"
                                                    >
                                                        <input
                                                            type="text"
                                                            id="c-location"
                                                            class="form-control"
                                                            placeholder="Location"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex justify-end items-center gap-x-3.5 pb-5 pt-3 px-4"
                            >
                                <button
                                    id="btn-add"
                                    class="btn bg-success hover:bg-successemphasis text-white px-4"
                                >
                                    Add
                                </button>
                                <button id="btn-edit" class="btn px-4">
                                    Save
                                </button>
                                <button
                                    class="btn btn-light-error px-4"
                                    data-hs-overlay="#addContactModal"
                                >
                                    Discard
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="flex flex-col">
                            <div class="-m-1.5 overflow-x-auto">
                                <div
                                    class="p-1.5 min-w-full inline-block align-middle"
                                >
                                    <div class="overflow-hidden">
                                        <table
                                            class="table search-table min-w-full divide-y divide-border dark:divide-darkborder"
                                        >
                                            <thead>
                                                <tr>
                                                    <th class="p-4 ps-0">
                                                        <div
                                                            class="n-chk align-self-center text-center"
                                                        >
                                                            <div
                                                                class="form-check"
                                                            >
                                                                <input
                                                                    type="checkbox"
                                                                    class="form-check-input rounded-sm"
                                                                    id="contact-check-all"
                                                                />
                                                                <label
                                                                    class="form-check-label"
                                                                    for="contact-check-all"
                                                                ></label>
                                                                <span
                                                                    class="new-control-indicator"
                                                                ></span>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th
                                                        scope="col"
                                                        class="text-left rtl:text-right p-4 font-semibold text-dark dark:text-white text-sm"
                                                    >
                                                        Name
                                                    </th>
                                                    <th
                                                        scope="col"
                                                        class="text-left rtl:text-right p-4 font-semibold text-dark dark:text-white text-sm"
                                                    >
                                                        Projects
                                                    </th>
                                                    <th
                                                        scope="col"
                                                        class="text-left rtl:text-right p-4 font-semibold text-dark dark:text-white text-sm"
                                                    >
                                                        Created At
                                                    </th>
                                                    <th
                                                        scope="col"
                                                        class="text-left rtl:text-right p-4 font-semibold text-dark dark:text-white text-sm"
                                                    >
                                                        Updated At
                                                    </th>
                                                    <th
                                                        scope="col"
                                                        class="text-left rtl:text-right p-4 font-semibold text-dark dark:text-white text-sm"
                                                    >
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody
                                                class="divide-y divide-border dark:divide-darkborder"
                                            >

                                                <tr v-for="category in categories.data" :key="category.id" class="search-items">
                                                    <td
                                                        class="p-4 ps-0 whitespace-nowrap"
                                                    >
                                                        <div
                                                            class="n-chk align-self-center text-center"
                                                        >
                                                            <div
                                                                class="form-check"
                                                            >
                                                                <input
                                                                    type="checkbox"
                                                                    class="form-check-input rounded-sm contact-chkbox"
                                                                    id="checkbox2"
                                                                />
                                                                <label
                                                                    class="form-check-label"
                                                                    for="checkbox2"
                                                                ></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="p-4 ps-0 whitespace-nowrap"
                                                    >
                                                        <div
                                                            class="flex gap-3 items-center"
                                                        >
                                                            <div class="">
                                                                <img
                                                                    src="https://bootstrapdemos.adminmart.com/modernize-tailwind-pro/dist/assets/images/profile/user-6.jpg"
                                                                    class="rounded-circle h-9 w-9 rounded-full"
                                                                    alt="user "
                                                                />
                                                            </div>
                                                            <div>
                                                                <h6
                                                                    class="user-name mb-1"
                                                                    data-name="Olivia Allen"
                                                                >
                                                                    Olivia Allen
                                                                </h6>
                                                                <p
                                                                    class="user-work text-xs text-bodytext dark:text-darklink"
                                                                    data-occupation="Web Designer"
                                                                >
                                                                    Web Designer
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="usr-email-addr text-sm whitespace-nowrap text-bodytext dark:text-darklink p-4"
                                                        data-email="allen@mail.com"
                                                    >
                                                        allen@mail.com
                                                    </td>
                                                    <td
                                                        class="usr-location text-sm whitespace-nowrap text-bodytext dark:text-darklink p-4"
                                                        data-location="Sydney, Australia"
                                                    >
                                                        Sydney, Australia
                                                    </td>
                                                    <td
                                                        class="usr-ph-no text-sm whitespace-nowrap text-bodytext dark:text-darklink p-4"
                                                        data-phone="+91 (125) 450-1500"
                                                    >
                                                        +91 (125) 450-1500
                                                    </td>

                                                    <td
                                                        class="text-sm whitespace-nowrap text-bodytext dark:text-darklink p-4"
                                                    >
                                                        <div
                                                            class="action-btn flex gap-3"
                                                        >
                                                            <a
                                                                href="javascript:void(0)"
                                                                class="text-info edit"
                                                            >
                                                                <i
                                                                    class="ti ti-eye text-lg"
                                                                ></i>
                                                            </a>
                                                            <a
                                                                href="javascript:void(0)"
                                                                class="text-dark delete"
                                                            >
                                                                <i
                                                                    class="ti ti-trash text-lg text-bodytext dark:text-darklink"
                                                                ></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>



                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!---Contact Card End--->
            </div>
        </main>
        <!-- Main Content End -->
    </AdminLayout>
</template>

<script setup>
import { Plus } from "lucide-vue-next";
import NavigationLink from "../../../Components/ui/NavigationLink.vue";
import AdminLayout from "../../../Layouts/AdminLayout.vue";
import { Link, usePage } from "@inertiajs/vue3";
import { computed } from "vue";

// Props, imports, logic go here
const page = usePage();
const categories = computed(() => page.props.categories);
</script>
