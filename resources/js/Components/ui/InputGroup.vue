<template>
  <div class="mb-4">
    <label :for="id" class="mb-2 block text-sm font-medium text-gray-700 dark:text-white">
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
        'w-full px-3 py-2 rounded-sm border focus:outline-none focus:ring-0',
        'bg-white/20 dark:bg-neutral-400/40',
        'border-black/10 dark:border-white/30',
        'focus:border-purple-500 dark:focus:border-purple-300',
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
