<template>
  <div class="mb-4">
    <label :for="id" class="block mb-1 font-medium">{{ label }}</label>
    <input
      :id="id"
      type="file"
      @change="e => { $emit('update:modelValue', e.target.files[0]); onChange?.() }"
      class="w-full px-3 py-2 rounded border focus:ring-0 bg-white/20 dark:bg-neutral-400/40"
    />
    <p v-if="error" class="text-sm text-red-600 mt-1">{{ error }}</p>
  </div>
   <BaseFile
      id="attachment"
      label="Attachment"
      :error="form.errors.attachment"
      :onChange="() => form.validate('attachment')"
    />
</template>

<script setup>
defineProps({
  id: String,
  label: String,
  error: String,
  onChange: Function,
})
defineEmits(['update:modelValue'])
</script>
