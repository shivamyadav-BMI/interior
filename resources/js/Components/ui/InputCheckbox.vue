<template>
  <div class="">
    <label class="inline-flex items-center gap-2 cursor-pointer">
      <input
        type="checkbox"
        class="hidden peer"
        :checked="modelValue"
        @change="$emit('update:modelValue', $event.target.checked); onChange?.()"
      />
      <span class="w-5 h-5 flex items-center justify-center border border-black/20 dark:border-white/30 peer-checked:bg-purple-500 dark:peer-checked:bg-purple-400">
        <i class="bi bi-check text-white hidden peer-checked:block"></i>
      </span>
      <span class="text-sm">{{ label }}</span>
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
})
defineEmits(['update:modelValue'])
</script>
