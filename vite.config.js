// vite.config.js

import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import laravel from 'laravel-vite-plugin'
import path from 'path'

export default defineConfig({
  plugins: [
    laravel({
      input: 'resources/js/app.js',
      refresh: true,
    }),
    vue(),
  ],
  resolve: {
    alias: {
      '@': path.resolve(__dirname, 'resources/js'),
      '@pages': path.resolve(__dirname, 'resources/js/Pages'),
      '@components': path.resolve(__dirname, 'resources/js/Components'),
    },
  },
})
