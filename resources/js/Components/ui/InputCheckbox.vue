<template>
    <div class="">
        <label class="inline-flex items-center gap-2 cursor-pointer">
            <input
                type="checkbox"
                class="shrink-0 mt-0.5 border-gray-200 rounded-[4px] text-blue-600 focus:ring-blue-500"
                :checked="modelValue"
                @change="
                    $emit('update:modelValue', $event.target.checked);
                    onChange?.();
                "
            />
            <label for="hs-default-checkbox" class="text-sm text-dark ms-3"
                >{{ label }}</label
            >
            
        </label>
        <p v-if="error" class="text-sm text-red-600 mt-1">{{ error }}</p>
    </div>
</template>

<script setup>
defineProps({
    modelValue: Boolean,
    label: String,
    error: String,
    onChange: Function,
});
defineEmits(["update:modelValue"]);
</script>
