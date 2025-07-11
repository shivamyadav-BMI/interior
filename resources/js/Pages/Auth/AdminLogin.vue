<template>
    <Head title="Admin Login" />
    <div class="grid h-screen" style="place-content: center">
        <div class="xl:container mx-auto md:maksueyropls xl:px-12 relative">
            <div
                class="w-full backdrop-opacity-95 backdrop-blur backdrop-saturate-150 bg-white/70 dark:bg-neutral-500/70 border border-white/60 dark:border-white/30 rounded-xl mklausjenrhtm"
            >
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div
                        class="max-md:order-2 bg-linear-to-r from-purple-100 to-purple-400 w-full"
                    >
                        <div
                            class="relative text-center flex yhansklopals pt-12 mb-8"
                        >
                            <!-- logo -->
                            <a href="">
                                <div class="flex layhetgsjdcb gap-2">
                                    <!-- logo -->
                                    <div class="relative h-8 w-8">
                                        <span
                                            class="flex w-6 h-6 rounded-sm skew-y-12 bg-purple-600/80 backdrop-blur-sm backdrop-saturate-150 border border-white/80 rotate-[-45deg] translate-x-1"
                                        ></span>
                                        <span
                                            class="flex w-6 h-6 rounded-sm skew-y-12 bg-white/60 border border-white/80 rotate-[-45deg] -translate-y-4 translate-x-1"
                                        ></span>
                                    </div>
                                    <!-- text logo -->
                                    <h5
                                        class="text-2xl compact-hide font-bold bg-clip-text bg-linear-to-t from-purple-700 to-fuchsia-400 dark:from-purple-100 dark:to-white text-transparent"
                                    >
                                        Delight Interior
                                    </h5>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div
                        class="max-md:order-1 flex ioajsklehsnm spoathnmkles w-full dkslaoeyhnmj py-8 xl:p-12"
                    >
                        <div class="relative flex ioajsklehsnm mb-4">
                            <h2
                                class="text-3xl font-semibold text-neutral-900 dark:text-white mb-2"
                            >
                                Welcome back!
                            </h2>
                            <p>
                                Sign in to manage your dashboard effortlessly.
                            </p>
                        </div>

                        <!-- form -->
                        <form
                            class="flex ioajsklehsnm spoathnmkles"
                            @submit.prevent="login"
                        >
                            <!-- input -->
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
                            <div
                                class="flex layhetgsjdcb gap-2 vlaoethsnkma items-center"
                            >
                                <InputCheckbox
                                    class="flex flex-col items-center"
                                    v-model="form.remember"
                                    label="I agree to terms"
                                    :error="form.errors.terms"
                                    :onChange="() => form.validate('terms')"
                                />

                                <a
                                    href="forgot-password.html"
                                    class="hover:underline hover:text-purple-500 dark:hover:text-purple-300"
                                    >Forgot Password</a
                                >
                            </div>

                            <Button class="mt-5"> Sign in </Button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
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
        onError: () => form.reset('password'),
        onSuccess: () => form.reset(),
    });
</script>
