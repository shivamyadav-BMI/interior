<template>
    <Head title="Admin Login" />
    <main>
        <!-- Main Content -->
        <div
            class="flex flex-col w-full overflow-hidden relative min-h-screen radial-gradient items-center justify-center g-0 px-4"
        >
            <div
                class="justify-center items-center w-full card lg:flex max-w-md"
            >
                <div class="w-full card-body">
                    <a
                        href="https://bootstrapdemos.adminmart.com/modernize-tailwind-free/dist/"
                        class="py-4 block"
                        ><img
                            src="https://bootstrapdemos.adminmart.com/modernize-tailwind-free/dist/assets/images/logos/dark-logo.svg"
                            alt=""
                            class="mx-auto"
                    /></a>
                    <p class="mb-4 text-gray-500 text-sm text-center">
                        Your Social Campaigns
                    </p>
                    <!-- form -->
                    <form @submit.prevent="login">
                        <InputGroup
                            id="email"
                            label="Email"
                            name="email"
                            v-model="form.email"
                            :error="form.errors.email"
                            :invalid="form.invalid('email')"
                            :onChange="() => form.validate('email')"
                        />
                        <InputGroup
                            id="password"
                            type="password"
                            label="password"
                            name="password"
                            v-model="form.password"
                            :error="form.errors.password"
                            :invalid="form.invalid('password')"
                            :onChange="() => form.validate('password')"
                        />
                        <div class="flex justify-between items-center">
                            <InputCheckbox
                                class="flex flex-col items-center"
                                v-model="form.remember"
                                label="Remember me"
                                :error="form.errors.terms"
                                :onChange="() => form.validate('terms')"
                            />

                            <a
                                href="forgot-password.html"
                                class="text-sm font-medium text-blue-600 hover:text-blue-700"
                                >Forgot Password</a
                            >
                        </div>

                        <Button class="w-full mt-8"> Sign in </Button>

                        <!-- </div> -->
                    </form>
                </div>
            </div>
        </div>
        <!--end of project-->
    </main>
</template>

<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import { useForm } from "laravel-precognition-vue-inertia";
import InputGroup from "@Components/ui/InputGroup.vue";
import InputCheckbox from "@Components/ui/InputCheckbox.vue";
import Button from "@Components/ui/Button.vue";

const form = useForm("post", "/admin/login", {
    email: "",
    password: "",
    remember: false,
});

const login = () =>
    form.submit({
        preserveScroll: true,
        onError: () => form.reset("password"),
        onSuccess: () => form.reset(),
    });
</script>
