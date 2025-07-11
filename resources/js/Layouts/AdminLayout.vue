<template>
    <AdminHeader />
    <AdminSidebar />
    <main
        class="content-compact z-10 relative mt-[6.25rem] lg:ms-[240px] transition-all duration-500 ease-in-out overflow-y-auto uajskeiolksb lg:dkslaoeyhnmj">
        <slot></slot>
    </main>
</template>

<script setup>
// Props, imports, logic go here
import AdminHeader from '@components/AdminHeader.vue'
import AdminSidebar from '@components/AdminSidebar.vue'

</script>
