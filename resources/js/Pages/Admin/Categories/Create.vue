<template>
    <AdminLayout>
        <Head title="Admin Categories" />
        <main>
            <!-- Main Content -->
            <div
                class="flex  w-full overflow-hidden relative justify-center  g-0 px-4"
            >
                <div
                    class="justify-center items-center w-full card lg:flex max-w-3xl"
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
                        <form @submit.prevent="store">
                            <InputGroup
                                id="name"
                                label="name"
                                name="name"
                                v-model="form.name"
                                :error="form.errors.name"
                                :invalid="form.invalid('name')"
                                :onChange="() => form.validate('name')"
                            />


                            <Button class="w-full mt-8"> Create </Button>

                            <!-- </div> -->
                        </form>
                    </div>
                </div>
            </div>
            <!--end of project-->
        </main>
    </AdminLayout>
</template>

<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import { useForm } from "laravel-precognition-vue-inertia";
import InputGroup from "@Components/ui/InputGroup.vue";
import InputCheckbox from "@Components/ui/InputCheckbox.vue";
import Button from "@Components/ui/Button.vue";
import AdminLayout from "../../../Layouts/AdminLayout.vue";

const form = useForm("post", "/admin/categories", {
    name: "",

});

const store = () =>
    form.submit({
        // preserveScroll: true,
        onSuccess: () => form.reset(),
    });
</script>
