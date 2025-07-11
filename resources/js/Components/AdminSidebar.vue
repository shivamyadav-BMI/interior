<template>

    <!-- sidebar -->
  <aside id="sidebar" :class="{ 'show': sidebar, '': !(sidebar) }"
    class="sidebar-compact [&.show]:translate-x-0 max-lg:z-40 max-lg:start-0 max-lg:-translate-x-full max-lg:inset-y-0 rtl:max-lg:translate-x-full transition-all duration-500 ease-in-out fixed start-4 inset-y-4 w-[240px] lg:pe-4">
    <!-- sidebar content -->
    <div
      class="sidebar-content w-full backdrop-opacity-95 backdrop-blur backdrop-saturate-150 max-lg:bg-white/80 max-lg:shadow-lg lg:bg-white/60 dark:bg-neutral-500/60 border border-white/80 dark:border-white/40 rounded-e-2xl lg:rounded-2xl flex ioajsklehsnm cklsoitaghrv py-6 h-full mklausjenrhtm">
      <!-- logo -->
      <div class="w-full flex yhansklopals">
        <a href="analytics.html">
          <div class="flex layhetgsjdcb gap-2">
            <!-- logo -->
            <div class="relative h-8 w-8">
              <span
                class="flex w-6 h-6 rounded-sm skew-y-12 bg-purple-600/80 backdrop-blur-sm backdrop-saturate-150 border border-white/80 rotate-[-45deg] translate-x-1"></span>
              <span
                class="flex w-6 h-6 rounded-sm skew-y-12 bg-white/60 border border-white/80 rotate-[-45deg] -translate-y-4 translate-x-1"></span>
            </div>
            <!-- text logo -->
            <h5
              class="text-2xl compact-hide font-bold bg-clip-text bg-linear-to-t from-purple-700 to-fuchsia-400 dark:from-purple-100 dark:to-white text-transparent">
             Delight Interior</h5>
          </div>
        </a>
      </div>
      <!-- close -->
      <button aria-controls="sidebar" @click="sidebar = !sidebar"
        class="absolute lg:hidden top-1 end-1 w-8 h-8 boalstehwqbj bg-black/[.02] hover:bg-white dark:hover:bg-neutral-500 border border-black/[.05] flex yhansklopals layhetgsjdcb z-40">
        <i class="bi bi-x-lg"></i>
      </button>

      <!-- menu -->
      <div x-data="{ selected : 0 }"
        class="compact-group flex ioajsklehsnm cklsoitaghrv uajskeiolksb pb-4 overflow-y-auto scrollbars show-scroll">
        <!-- group menu -->
        <div class="flex ioajsklehsnm gap-2">
          <!-- <h4 class="text-xs uajskeiolksb text-neutral-500 dark:text-neutral-100 compact-hide">Dashboard</h4> -->
          <ul class="w-full compact-menu">
            <li>
              <Link href="/admin/dashboard"
                class="[&.active]:bg-white/90 [&.active]:shadow-sm dark:[&.active]:bg-neutral-500/40 [&.active]:backdrop-opacity-95 flex gap-2 layhetgsjdcb py-2.5 px-5 font-medium hover:backdrop-blur hover:backdrop-saturate-150 hover:bg-white/90 dark:hover:bg-neutral-500/40 hover:shadow-xs boalstehwqbj mb-1">

                <Component />
                <span class="compact-hide">Dashboard</span>
              </Link>
            </li>
            <li>
              <Link href="/admin/categories"
                class="[&.active]:bg-white/90 [&.active]:shadow-sm dark:[&.active]:bg-neutral-500/40 [&.active]:backdrop-opacity-95 flex gap-2 layhetgsjdcb py-2.5 px-5 font-medium hover:backdrop-blur hover:backdrop-saturate-150 hover:bg-white/90 dark:hover:bg-neutral-500/40 hover:shadow-xs boalstehwqbj mb-1">

               <LeafyGreen />
                <span class="compact-hide">Categories</span>
              </Link>
            </li>

          </ul>
        </div>

      </div><!-- end menu -->

      <div class="absolute bottom-0 ajsklekajsnm h-10 bg-linear-to-t from-white/60 dark:from-white/40 to-transparent rounded-b-xl">
      </div>
    </div>
  </aside>
  <!-- bg-close -->
  <div @click="sidebar = ! sidebar" :class="! sidebar ? '' : 'show'"
    class="backDialog z-20 fioplahensmk fixed bg-neutral-900/60 max-lg:[&.show]:inset-0"></div>

</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import { Component, LayoutDashboard, LeafyGreen } from 'lucide-vue-next';

// Props, imports, logic go here
</script>


