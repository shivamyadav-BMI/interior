<template>
  <div class="mb-4">
    <label :for="id" class="mb-2 block text-sm font-medium text-gray-700 dark:text-white uppercase">
      {{ label }}
    </label>

    <input
      :id="id"
      :type="type"
      :name="name"
      :value="modelValue"
      @input="$emit('update:modelValue', $event.target.value)"
      @change="onChange"
      :class="[
        'py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-600 focus:ring-0',
        invalid ? 'border-red-500' : '',
      ]"
    />

    <p v-if="invalid" class="mt-1 text-sm text-red-600">
      {{ error }}
    </p>
  </div>
</template>

<script setup>
defineProps({
  id: String,
  label: String,
  name: String,
  type: {
    type: String,
    default: 'text',
  },
  modelValue: String,
  error: String,
  invalid: Boolean,
  onChange: Function,
})

defineEmits(['update:modelValue'])
</script>
