<template>
    <aside
        id="application-sidebar-brand"
        class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full transform hidden xl:block xl:translate-x-0 xl:end-auto xl:bottom-0 fixed lg:top-[20px] top-0 with-vertical h-screen z-[999] flex-shrink-0 border-r-[1px] w-[270px] border-gray-400/20 bg-white left-sidebar transition-all duration-300"
    >
        <!-- ---------------------------------- -->
        <!-- Start Vertical Layout Sidebar -->
        <!-- ---------------------------------- -->
        <div class="px-5">
            <a
                href="https://bootstrapdemos.adminmart.com/modernize-tailwind-free/"
                class="text-nowrap"
            >
                <img
                    src="https://bootstrapdemos.adminmart.com/modernize-tailwind-free/dist/assets/images/logos/dark-logo.svg"
                    alt="Logo-Dark"
                />
            </a>
        </div>
        <div class="scroll-sidebar" data-simplebar>
            <div class="px-6 mt-8">
                <nav class="w-full flex flex-col sidebar-nav">
                    <ul id="sidebarnav" class="text-dark text-sm">
                        <!-- <li class="sidebar-item">
                            <a
                                class="sidebar-link gap-3 py-3 px-3 rounded-md w-full flex items-center hover:text-primary hover:bg-primary/15"
                                href="index.html"
                            >
                                <i class="ti ti-layout-dashboard text-xl"></i>
                                <span>Dashboard</span>
                            </a>
                        </li> -->

                        <AdminSidebarLink href="/admin/dashboard">
                            <!-- icon -->
                            <LayoutDashboard />
                            Dashboard
                        </AdminSidebarLink>
                        <AdminSidebarLink href="/admin/categories">
                            <!-- icon -->
                            <LeafyGreenIcon />
                            Categories
                        </AdminSidebarLink>

                        <!-- <li
                            class="hs-accordion sidebar-item"
                            id="blog-accordion"
                        >
                            <h2

                                class="hs-accordion-toggle sidebar-link dropdown-menu-link"
                            >
                                <i
                                    class="ti ti-app-window text-xl flex-shrink-0"
                                ></i>
                                <span class="hide-menu">Frontend Pages</span>
                                <span class="hide-menu ms-auto">
                                    <i
                                        class="ti ti-chevron-down text-lg ms-auto hs-accordion-active:hidden"
                                    ></i>
                                    <i
                                        class="ti ti-chevron-up text-lg ms-auto hs-accordion-active:block ml-auto hidden z-10 relative"
                                    ></i>
                                </span>
                            </h2>

                            <div
                                id="blog-accordion"
                                class="hs-accordion-content"
                            >
                                <ul class>
                                    <li class="pl-4 pr-3">
                                        <a
                                            class="dropdown-submenu-link flex items-center justify-between"
                                            target="_blank"
                                            href="https://bootstrapdemos.adminmart.com/modernize-tailwind-pro/dist/main/frontend-homepage.html"
                                        >
                                            <span
                                                class="flex gap-2 items-center"
                                            >
                                                <i
                                                    class="ti ti-circle flex-shrink-0 text-xs me-3"
                                                ></i>
                                                <span class="hide-menu"
                                                    >Homepage</span
                                                >
                                            </span>
                                            <span
                                                class="items-center gap-x-1.5 py-1 leading-3 px-2 rounded-md text-[10px] font-medium bg-secondary/30 text-secondary justify-end"
                                                >Pro</span
                                            >
                                        </a>
                                    </li>
                                    <li class="pl-4 pr-3">
                                        <a
                                            class="dropdown-submenu-link flex items-center justify-between"
                                            target="_blank"
                                            href="https://bootstrapdemos.adminmart.com/modernize-tailwind-pro/dist/main/frontend-aboutpage.html"
                                        >
                                            <span
                                                class="flex gap-2 items-center"
                                            >
                                                <i
                                                    class="ti ti-circle flex-shrink-0 text-xs me-3"
                                                ></i>
                                                <span class="hide-menu"
                                                    >About Us</span
                                                >
                                            </span>
                                            <span
                                                class="items-center gap-x-1.5 py-1 leading-3 px-2 rounded-md text-[10px] font-medium bg-secondary/30 text-secondary justify-end"
                                                >Pro</span
                                            >
                                        </a>
                                    </li>
                                    <li class="pl-4 pr-3">
                                        <a
                                            class="dropdown-submenu-link flex items-center justify-between"
                                            target="_blank"
                                            href="https://bootstrapdemos.adminmart.com/modernize-tailwind-pro/dist/main/frontend-blogpage.html"
                                        >
                                            <span
                                                class="flex gap-2 items-center"
                                            >
                                                <i
                                                    class="ti ti-circle flex-shrink-0 text-xs me-3"
                                                ></i>
                                                <span class="hide-menu"
                                                    >Blog</span
                                                >
                                            </span>
                                            <span
                                                class="items-center gap-x-1.5 py-1 leading-3 px-2 rounded-md text-[10px] font-medium bg-secondary/30 text-secondary justify-end"
                                                >Pro</span
                                            >
                                        </a>
                                    </li>
                                    <li class="pl-4 pr-3">
                                        <a
                                            class="dropdown-submenu-link flex items-center justify-between"
                                            target="_blank"
                                            href="https://bootstrapdemos.adminmart.com/modernize-tailwind-pro/dist/main/frontend-blogdetailpage.html"
                                        >
                                            <span
                                                class="flex gap-2 items-center"
                                            >
                                                <i
                                                    class="ti ti-circle flex-shrink-0 text-xs me-3"
                                                ></i>
                                                <span class="hide-menu"
                                                    >Blog Detail</span
                                                >
                                            </span>
                                            <span
                                                class="items-center gap-x-1.5 py-1 leading-3 px-2 rounded-md text-[10px] font-medium bg-secondary/30 text-secondary justify-end"
                                                >Pro</span
                                            >
                                        </a>
                                    </li>
                                    <li class="pl-4 pr-3">
                                        <a
                                            class="dropdown-submenu-link flex items-center justify-between"
                                            target="_blank"
                                            href="https://bootstrapdemos.adminmart.com/modernize-tailwind-pro/dist/main/frontend-portfoliopage.html"
                                        >
                                            <span
                                                class="flex gap-2 items-center"
                                            >
                                                <i
                                                    class="ti ti-circle flex-shrink-0 text-xs me-3"
                                                ></i>
                                                <span class="hide-menu"
                                                    >Portfolio</span
                                                >
                                            </span>
                                            <span
                                                class="items-center gap-x-1.5 py-1 leading-3 px-2 rounded-md text-[10px] font-medium bg-secondary/30 text-secondary justify-end"
                                                >Pro</span
                                            >
                                        </a>
                                    </li>
                                    <li class="pl-4 pr-3">
                                        <a
                                            class="dropdown-submenu-link flex items-center justify-between"
                                            target="_blank"
                                            href="https://bootstrapdemos.adminmart.com/modernize-tailwind-pro/dist/main/frontend-pricingpage.html"
                                        >
                                            <span
                                                class="flex gap-2 items-center"
                                            >
                                                <i
                                                    class="ti ti-circle flex-shrink-0 text-xs me-3"
                                                ></i>
                                                <span class="hide-menu"
                                                    >Pricing</span
                                                >
                                            </span>
                                            <span
                                                class="items-center gap-x-1.5 py-1 leading-3 px-2 rounded-md text-[10px] font-medium bg-secondary/30 text-secondary justify-end"
                                                >Pro</span
                                            >
                                        </a>
                                    </li>
                                    <li class="pl-4 pr-3">
                                        <a
                                            class="dropdown-submenu-link flex items-center justify-between"
                                            target="_blank"
                                            href="https://bootstrapdemos.adminmart.com/modernize-tailwind-pro/dist/main/frontend-contactpage.html"
                                        >
                                            <span
                                                class="flex gap-2 items-center"
                                            >
                                                <i
                                                    class="ti ti-circle flex-shrink-0 text-xs me-3"
                                                ></i>
                                                <span class="hide-menu"
                                                    >Contact</span
                                                >
                                            </span>
                                            <span
                                                class="items-center gap-x-1.5 py-1 leading-3 px-2 rounded-md text-[10px] font-medium bg-secondary/30 text-secondary justify-end"
                                                >Pro</span
                                            >
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                    </ul>
                </nav>
            </div>
        </div>
    </aside>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import { Component, LayoutDashboard, LeafyGreen, LeafyGreenIcon } from "lucide-vue-next";
import AdminSidebarLink from "@Components/ui/AdminSidebarLink.vue";

// Props, imports, logic go here
</script>
