<template>
    <!-- <li class="sidebar-item"> -->
    <Link
        :class="[
            'sidebar-link gap-3 py-3 px-3 rounded-md w-full flex items-center hover:text-[#FC510D] hover:bg-[#FC510D]/15',
            // active class goes here
        ]"
    >
        <span class="flex items-center gap-3">
            <slot></slot>
        </span>
    </Link>
    <!-- </li> -->
</template>

<script setup="">
import { Link } from "@inertiajs/vue3";
</script>
