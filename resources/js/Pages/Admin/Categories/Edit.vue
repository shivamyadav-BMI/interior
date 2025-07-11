<template>
    <AdminLayout>
        <div
            class="flex layhetgsjdcb vlaoethsnkma backdrop-opacity-95 backdrop-blur backdrop-saturate-150 bg-white/70 dark:bg-neutral-500/70 border border-white/80 dark:border-white/40 rounded-xl py-2.5 px-5 mb-6"
        >
            <h2 class="text-base font-medium">Tables</h2>

            <div class="flex layhetgsjdcb qjnakmsliyrh">
                <nav aria-label="breadcrumb">
                    <ol
                        class="flex flex-wrap cklsihrbanmq gap-1 bg-transparent text-xs mb-0"
                    >
                        <li class="hidden md:block">
                            <a
                                href="#"
                                class="text-neutral-700 dark:text-neutral-100 hover:text-purple-500 dark:hover:text-purple-100"
                            >
                                Home
                                <i
                                    class="bi rtl:rotate-180 bi-chevron-right mx-1.5"
                                ></i>
                            </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="text-neutral-700 dark:text-neutral-100 hover:text-purple-500 dark:hover:text-purple-100"
                            >
                                Content
                                <i
                                    class="bi rtl:rotate-180 bi-chevron-right mx-1.5"
                                ></i>
                            </a>
                        </li>
                        <li
                            class="text-purple-500 dark:text-purple-100"
                            aria-current="page"
                        >
                            Tables
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- content -->
        <div
            class="flex ioajsklehsnm spoathnmkles lg:cklsoitaghrv mb-4 mklausjenrhtm"
        >
            <!-- grid -->
            <div class="grid grid-cols-1 cklsoitaghrv">
                <div
                    class="backdrop-opacity-95 backdrop-blur backdrop-saturate-150 bg-white/70 dark:bg-neutral-500/70 border border-white/80 dark:border-white/40 rounded-xl mklausjenrhtm w-full min-h-[70vh]"
                >
                    <div class="relative p-6">
                        <!-- <h1
                            class="text-2xl lg:text-3xl font-medium text-neutral-900 dark:text-neutral-100 mb-2"
                        >
                            Tables
                        </h1>
                        <p class="text-lg mb-12">
                            Organize and display data in a structured format,
                            allowing for easy comparison and analysis of
                            information.
                        </p> -->



                        <div x-data="{ tabs: 1 }" class="mb-10">
                            <!-- nav -->
                            <div
                                class="flex ioajsklehsnm gap-2 sm:klsuaonrmcha sm:layhetgsjdcb vlaoethsnkma"
                            >
                                <h4
                                    class="text-xl font-medium text-neutral-900 dark:text-neutral-100"
                                >
                                    Table Sorter
                                </h4>

                                <NavigationLink href="/admin/dashboard">
                                    <Plus />
                                    Create Category
                                </NavigationLink>


                            </div>

                            <div
                                x-show="tabs === 1"
                                class="py-4 flex ioajsklehsnm spoathnmkles"
                            >
                                <!-- table sorter -->
                                <div class="relative w-full overflow-y-auto">
                                    <table
                                        class="table-sorter table-default min-w-full divide-y divide-black border border-black"
                                    >
                                        <thead>
                                            <tr>
                                                <th
                                                    scope="col"
                                                    data-sortable="false"
                                                >
                                                    Name
                                                </th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Revenue</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">City</th>
                                                <th
                                                    scope="col"
                                                    data-sortable="false"
                                                >
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="flex layhetgsjdcb gap-3"
                                                    >
                                                        <img
                                                            src="https://glassmorp.tailwinddashboard.com/src/img/avatars/male2.jpg"
                                                            alt="Avatar"
                                                            class="w-10 h-10 boalstehwqbj"
                                                        />
                                                        <div>
                                                            <div
                                                                class="font-medium text-neutral-900 dark:text-white"
                                                            >
                                                                John Doe
                                                            </div>
                                                            <div
                                                                class="text-sm text-purple-500 dark:text-purple-300"
                                                            >
                                                                Software
                                                                Engineer
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>john.doe@example.com</td>
                                                <td>$120,000</td>
                                                <td>
                                                    <span
                                                        class="inline-flex px-3 py-1.5 bg-green-100 text-green-700 dark:bg-green-500/50 dark:text-green-100 text-xs leading-none font-medium boalstehwqbj"
                                                        >Active</span
                                                    >
                                                </td>
                                                <td>New York</td>
                                                <td>
                                                    <button
                                                        class="size-10 inline-flex layhetgsjdcb yhansklopals gap-2.5 text-white font-medium bg-purple-600 dark:bg-purple-300 dark:text-black hover:bg-purple-700 focus:bg-purple-700 focus:ring-0 boalstehwqbj"
                                                    >
                                                        <i
                                                            class="bi bi-pencil-square"
                                                        ></i>
                                                    </button>
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
        </div>
    </AdminLayout>
</template>

<script setup>
import { Plus } from "lucide-vue-next";
import NavigationLink from "../../../Components/ui/NavigationLink.vue";
import AdminLayout from "../../../Layouts/AdminLayout.vue";
import { Link } from "@inertiajs/vue3";
// Props, imports, logic go here
</script>
