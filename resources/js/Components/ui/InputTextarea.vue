<template>
  <div class="mb-4">
    <label :for="id" class="block mb-1 font-medium">{{ label }}</label>
    <textarea
      :id="id"
      :value="modelValue"
      @input="$emit('update:modelValue', $event.target.value)"
      @change="onChange?.()"
      class="w-full px-3 py-2 rounded border focus:ring-0 bg-white/20 dark:bg-neutral-400/40"
      rows="4"
      :class="{ 'border-red-500': invalid }"
    ></textarea>
    <p v-if="error" class="text-sm text-red-600 mt-1">{{ error }}</p>
  </div>
   <BaseTextarea
      id="message"
      label="Message"
      v-model="form.message"
      :error="form.errors.message"
      :invalid="form.invalid('message')"
      :onChange="() => form.validate('message')"
    />
</template>

<script setup>
defineProps({
  id: String,
  label: String,
  modelValue: String,
  error: String,
  invalid: Boolean,
  onChange: Function,
})
defineEmits(['update:modelValue'])
</script>
