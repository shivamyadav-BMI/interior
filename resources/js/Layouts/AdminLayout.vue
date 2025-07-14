<template>
    <main>
        <!--start the project-->
        <div id="main-wrapper" class="flex">
            <AdminSidebar />
            <div class="w-full page-wrapper overflow-hidden">
                <!--  Header Start -->

                <AdminHeader />

                <!--  Header End -->

                <!-- Main Content -->
                <main class="h-full overflow-y-auto max-w-full pt-4">
                    <div
                        class="container full-container py-5 flex flex-col gap-6"
                    >
                        <slot></slot>
                    </div>
                </main>
                <!-- Main Content End -->
            </div>
        </div>
        <!--end of project-->
    </main>
</template>

<script setup>
// Props, imports, logic go here
import AdminHeader from "@Components/AdminHeader.vue";
import AdminSidebar from "@Components/AdminSidebar.vue";
</script>
