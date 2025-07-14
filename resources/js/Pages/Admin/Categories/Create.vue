<template>
    <AdminLayout>
        <Head title="Admin Categories" />
        
    </AdminLayout>
</template>

<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import { useForm } from "laravel-precognition-vue-inertia";
import InputGroup from "@Components/ui/InputGroup.vue";
import InputCheckbox from "@Components/ui/InputCheckbox.vue";
import Button from "@Components/ui/Button.vue";
import AdminLayout from "../../../Layouts/AdminLayout.vue";

const form = useForm("post", "/admin/login", {
    email: "",
    password: "",
    remember: false,
});

const login = () =>
    form.submit({
        preserveScroll: true,
        onError: () => form.reset('password'),
        onSuccess: () => form.reset(),
    });
</script>
