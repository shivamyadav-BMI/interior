<template>
  <div class="mb-4">
    <label :for="id" class="block mb-1 font-medium">{{ label }}</label>
    <select
      :id="id"
      :value="modelValue"
      @change="e => { $emit('update:modelValue', e.target.value); onChange?.() }"
      class="w-full px-3 py-2 rounded border focus:ring-0 bg-white/20 dark:bg-neutral-400/40"
      :class="{ 'border-red-500': invalid }"
    >
      <option v-for="(option, index) in options" :key="index" :value="option.value">
        {{ option.label }}
      </option>
    </select>
    <p v-if="error" class="text-sm text-red-600 mt-1">{{ error }}</p>
  </div>

   <BaseSelect
      id="category"
      label="Category"
      v-model="form.category"
      :options="[
        { label: 'Support', value: 'support' },
        { label: 'Sales', value: 'sales' },
      ]"
      :error="form.errors.category"
      :invalid="form.invalid('category')"
      :onChange="() => form.validate('category')"
    />
</template>

<script setup>
defineProps({
  id: String,
  label: String,
  modelValue: [String, Number],
  error: String,
  invalid: Boolean,
  options: Array,
  onChange: Function,
})
defineEmits(['update:modelValue'])
</script>
