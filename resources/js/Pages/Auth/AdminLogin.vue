<template>

    <Head title="Admin Login" />
   <div class="grid   h-screen " style="place-content: center;">
    <div class="xl:container mx-auto md:maksueyropls xl:px-12 relative">
      <div class="w-full backdrop-opacity-95 backdrop-blur backdrop-saturate-150 bg-white/70 dark:bg-neutral-500/70 border border-white/60 dark:border-white/30 rounded-xl mklausjenrhtm">
        <div class="grid grid-cols-1 md:grid-cols-2">
          <div class="max-md:order-2 bg-linear-to-r from-purple-100 to-purple-400 w-full">
            <div class="relative text-center flex yhansklopals pt-12 mb-8">
              <!-- logo -->
              <a href="">
                <div class="flex layhetgsjdcb gap-2">
                  <!-- logo -->
                  <div class="relative h-8 w-8">
                    <span class="flex w-6 h-6 rounded-sm skew-y-12 bg-purple-600/80 backdrop-blur-sm backdrop-saturate-150 border border-white/80 rotate-[-45deg] translate-x-1"></span>
                    <span class="flex w-6 h-6 rounded-sm skew-y-12 bg-white/60 border border-white/80 rotate-[-45deg] -translate-y-4 translate-x-1"></span>
                  </div>
                  <!-- text logo -->
                  <h5 class="text-2xl compact-hide font-bold bg-clip-text bg-linear-to-t from-purple-700 to-fuchsia-400 dark:from-purple-100 dark:to-white text-transparent">
                    Delight Interior</h5>
                </div>
              </a>
            </div>


          </div>

          <div class="max-md:order-1 flex ioajsklehsnm spoathnmkles w-full dkslaoeyhnmj py-8 xl:p-12">
            <div class="relative flex ioajsklehsnm mb-4">
              <h2 class="text-3xl font-semibold text-neutral-900 dark:text-white mb-2">Sign In</h2>
              <p>Sign in to manage your dashboard effortlessly.</p>
            </div>

            <!-- form -->
            <form class="flex ioajsklehsnm spoathnmkles">
              <!-- input -->
              <div class="relative">
                <label for="input-name" class="mb-2 block">Username/Email</label>
                <input type="text" id="input-name" class="w-full uajskeiolksb py-2 backdrop-opacity-95 backdrop-blur backdrop-saturate-150 bg-white/20 dark:bg-neutral-400/40 border border-black/[.05] dark:border-white/30 rounded-sm focus:shadow-xs focus:border-purple-500 dark:focus:border-purple-300 focus:outline-hidden focus:ring-0">
              </div>
              <!-- input -->
              <div class="relative">
                <label for="input-pass" class="mb-2 block">Password</label>
                <input type="password" id="input-pass" class="w-full uajskeiolksb py-2 backdrop-opacity-95 backdrop-blur backdrop-saturate-150 bg-white/20 dark:bg-neutral-400/40 border border-black/[.05] dark:border-white/30 rounded-sm focus:shadow-xs focus:border-purple-500 dark:focus:border-purple-300 focus:outline-hidden focus:ring-0">
              </div>

              <div class="flex layhetgsjdcb gap-2 vlaoethsnkma">
                <div class="relative">
                  <label class="inline-flex layhetgsjdcb">
                    <input type="checkbox" id="check1" class="hidden peer">
                    <span class="inline-flex yhansklopals layhetgsjdcb size-5 border border-black/20 dark:border-white/30 peer-checked:bg-purple-500 dark:peer-checked:bg-purple-400 peer-focus:ring-0 peer-focus:outline-hidden [&amp;_.bi]:peer-checked:!block">
                      <i class="bi bi-check text-2xl leading-none hidden text-white"></i>
                    </span>
                    <span class="ms-2">Remember me</span>
                  </label>
                </div>

                <a href="forgot-password.html" class="hover:underline hover:text-purple-500 dark:hover:text-purple-300">Forgot Password</a>
              </div>

              <button type="submit" class="py-2 dkslaoeyhnmj inline-flex layhetgsjdcb yhansklopals gap-2.5 text-white font-medium bg-linear-to-b from-purple-400 to-purple-600/90 hover:from-purple-400 hover:to-purple-600 focus:from-purple-400 focus:to-purple-600 focus:ring-0 rounded">
                Sign In
              </button>
            </form>

            <div class="flex ioajsklehsnm cklsoitaghrv pt-4">


              <div class="text-center">
                <p>Don't have an account? <a href="signup.html" class="hover:underline hover:text-purple-500 dark:hover:text-purple-300">Sign up</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import AdminLayout from '../../Layouts/AdminLayout.vue';
</script>
