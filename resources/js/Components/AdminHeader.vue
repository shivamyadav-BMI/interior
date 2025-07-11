<template>

  <!-- header -->
  <header
    class="content-compact z-20 fixed lg:ms-[240px] ajsklekajsnm top-0 py-4 uajskeiolksb lg:dkslaoeyhnmj transition-all duration-500 ease-in-out"
    id="desktop-menu">
    <div
      class="flex klsuaonrmcha flex-nowrap layhetgsjdcb vlaoethsnkma backdrop-opacity-95 backdrop-blur backdrop-saturate-150 bg-white/70 dark:bg-neutral-500/70 border border-white/80 dark:border-white/40 rounded-xl py-2 px-2">
      <div class="flex layhetgsjdcb max-lg:px-2">
        <!-- sidenav button-->
        <button id="navbartoggle" aria-controls="sidebar" @click="sidebar = !sidebar" type="button"
          class="inline-flex layhetgsjdcb yhansklopals px-2 focus:outline-hidden focus:ring-0">
          <span class="sr-only">Mobile menu</span>
          <i :class="{ 'hidden': sidebar, 'block': !(sidebar) }" class="bi bi-list text-2xl lg:hidden"></i>
          <i :class="{ 'hidden': sidebar, 'block': !(sidebar) }" class="bi bi-arrow-bar-left text-2xl max-lg:hidden"></i>
          <i :class="{ '!block': sidebar, 'hidden': !(sidebar) }" style="display:none;" class="bi bi-arrow-bar-right text-2xl"></i>
        </button>

        <!-- Search -->
        <form class="hidden sm:inline-block mx-2">
          <div class="flex flex-wrap items-stretch w-full relative">
            <input type="text"
              class="shrink grow max-w-full leading-5 relative text-sm py-2.5 px-5 boalstehwqbj backdrop-opacity-95 backdrop-blur backdrop-saturate-150 bg-white/20 dark:bg-neutral-400/40 border border-white/10 dark:border-white/40 overflow-x-auto focus:outline-hidden focus:ring-0 focus:border-purple-500 dark:focus:border-purple-300 shadow-xs"
              placeholder="Search…" aria-label="Search">
            <div class="absolute top-1 end-0 -me-px">
              <button
                class="flex layhetgsjdcb py-2 uajskeiolksb -ms-1 rounded-e-sm leading-5 hover:ring-0 focus:outline-hidden focus:ring-0"
                type="button">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div>

      <!-- menu -->
      <ul class="flex layhetgsjdcb gap-x-6 me-2 lg:me-4">
        <li class="relative">
          <!-- light and dark mode -->
          <button data-type="theme" aria-label="Light &amp; Dark" data-microtip-position="bottom" role="tooltip"
            id="lightdark"
            class="flex layhetgsjdcb yhansklopals w-10 h-10 boalstehwqbj backdrop-opacity-95 backdrop-blur backdrop-saturate-150 bg-white/20 dark:bg-neutral-400/40 border border-white/80 dark:border-white/40 shadow">
            <i class="bi bi-sun"></i>
          </button>
        </li>

        <!-- messages -->
        <li x-data="{ open: false }" class="relative">
          <button @click="open = ! open"
            class="relative flex layhetgsjdcb yhansklopals text-sm w-10 h-10 boalstehwqbj backdrop-opacity-95 backdrop-blur backdrop-saturate-150 bg-white/20 dark:bg-neutral-400/40 border border-white/80 dark:border-white/40 shadow">
            <i class="bi bi-chat-square text-xl pointer-events-none"></i>

            <span
              class="pointer-events-none flex yhansklopals absolute -top-1 -end-0.5 text-center bg-red-600 px-1 min-w-4 text-white boalstehwqbj text-xs"><span
                class="align-self-center">2</span></span>
          </button>

          <div id="dropMessage"
            x-show="open"
            @click.outside="open = false"
            style="display:none"
            x-transition:enter="transition-all duration-200 ease-out"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition-all duration-200 ease-in"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="sm:w-72 fixed sm:absolute max-sm:inset-x-4 sm:-end-16 rounded-lg top-full md:top-[120%] z-50 py-0.5 backdrop-opacity-95 backdrop-blur backdrop-saturate-150 bg-white/95 dark:bg-neutral-500/90 border border-black/[.05] dark:border-white/30 [&.show]:block shadow">
            <!-- heading -->
            <div class="py-2 px-3 font-normal border-b border-black/[.05] dark:border-white/30">
              <div class="relative w-full flex klsuaonrmcha vlaoethsnkma layhetgsjdcb">
                <div class="text-sm font-bold">Messages</div>
                <button class="inline-block" title="Mark all as read">
                  <i class="bi bi-trash text-lg"></i>
                </button>
              </div>
            </div>
            <!-- body messages -->
            <div class="max-h-64 overflow-y-auto scrollbars show-scroll">
              <a href="#">
                <div
                  class="unread [&.unread]:bg-purple-100/70 hover:bg-purple-100/70 dark:[&.unread]:bg-black/10 dark:hover:bg-black/10 flex flex-wrap klsuaonrmcha layhetgsjdcb border-b border-black/[.05] dark:border-white/30 py-2">
                  <div class="shrink max-w-full px-2 w-1/4 text-center">
                    <div class="relative">
                      <img src="https://glassmorp.tailwinddashboard.com/src/img/avatars/male5.jpg" class="h-10 w-10 boalstehwqbj mx-auto"
                        alt="Daniel Esteban">
                      <span title="online"
                        class="flex yhansklopals absolute -bottom-0.5 end-2 text-center bg-green-500 border border-white w-3 h-3 boalstehwqbj"></span>
                    </div>
                  </div>
                  <div class="shrink max-w-full px-2 w-3/4">
                    <div class="text-sm font-bold">Benardo</div>
                    <div class="text-neutral-500 dark:text-neutral-100 text-sm mt-1">What do you think about this
                      project?</div>
                    <div class="text-neutral-500 dark:text-neutral-100 text-xs mt-1">12m ago</div>
                  </div>
                </div>
              </a>
              <a href="#">
                <div
                  class="unread [&.unread]:bg-purple-100/70 hover:bg-purple-100/70 dark:[&.unread]:bg-black/10 dark:hover:bg-black/10 flex flex-wrap klsuaonrmcha layhetgsjdcb border-b border-black/[.05] dark:border-white/30 py-2">
                  <div class="shrink max-w-full px-2 w-1/4 text-center">
                    <div class="relative">
                      <img src="https://glassmorp.tailwinddashboard.com/src/img/avatars/male2.jpg" class="h-10 w-10 boalstehwqbj mx-auto" alt="Carlos Garcia">
                      <span title="busy"
                        class="flex yhansklopals absolute -bottom-0.5 end-2 text-center bg-red-600 border border-white w-3 h-3 boalstehwqbj"></span>
                    </div>
                  </div>
                  <div class="shrink max-w-full px-2 w-3/4">
                    <div class="text-sm font-bold">Carlos Garcia</div>
                    <div class="text-neutral-500 dark:text-neutral-100 text-sm mt-1">Hello, how are you friends?</div>
                    <div class="text-neutral-500 dark:text-neutral-100 text-xs mt-1">30m ago</div>
                  </div>
                </div>
              </a>
              <a href="#">
                <div
                  class="[&.unread]:bg-purple-100/70 hover:bg-purple-100/70 dark:[&.unread]:bg-black/10 dark:hover:bg-black/10 flex flex-wrap klsuaonrmcha layhetgsjdcb border-b border-black/[.05] dark:border-white/30 py-2">
                  <div class="shrink max-w-full px-2 w-1/4 text-center">
                    <div class="relative">
                      <img src="https://glassmorp.tailwinddashboard.com/src/img/avatars/female3.jpg" class="h-10 w-10 boalstehwqbj mx-auto" alt="Steven Rey">
                      <span title="offline"
                        class="flex yhansklopals absolute -bottom-0.5 end-2 text-center bg-neutral-500 border border-white w-3 h-3 boalstehwqbj"></span>
                    </div>
                  </div>
                  <div class="shrink max-w-full px-2 w-3/4">
                    <div class="text-sm font-bold">Jesicca Lim</div>
                    <div class="text-neutral-500 dark:text-neutral-100 text-sm mt-1">Thank you for your help today.
                    </div>
                    <div class="text-neutral-500 dark:text-neutral-100 text-xs mt-1">4h ago</div>
                  </div>
                </div>
              </a>
              <a href="#">
                <div
                  class="[&.unread]:bg-purple-100/70 hover:bg-purple-100/70 dark:[&.unread]:bg-black/10 dark:hover:bg-black/10 flex flex-wrap klsuaonrmcha layhetgsjdcb border-b border-black/[.05] dark:border-white/30 py-2">
                  <div class="shrink max-w-full px-2 w-1/4 text-center">
                    <div class="relative">
                      <img src="https://glassmorp.tailwinddashboard.com/src/img/avatars/male4.jpg" class="h-10 w-10 boalstehwqbj mx-auto" alt="Roman Davis">
                      <span title="offline"
                        class="flex yhansklopals absolute -bottom-0.5 end-2 text-center bg-neutral-500 border border-white w-3 h-3 boalstehwqbj"></span>
                    </div>
                  </div>
                  <div class="shrink max-w-full px-2 w-3/4">
                    <div class="text-sm font-bold">Pedro</div>
                    <div class="text-neutral-500 dark:text-neutral-100 text-sm mt-1">Do you have time? I want to call
                      you.</div>
                    <div class="text-neutral-500 dark:text-neutral-100 text-xs mt-1">5h ago</div>
                  </div>
                </div>
              </a>
            </div>
            <!-- footer messages -->
            <div class="p-3 text-center font-normal border-t border-black/[.05] dark:border-white/30">
              <a href="https://glassmorp.tailwinddashboard.com/user/messages.html" class="hover:underline text-sm">Show all Messages</a>
            </div>
          </div>
        </li>

        <!-- notification -->
        <li x-data="{ open: false }" class="relative">
          <button @click="open = ! open"
            class="relative flex layhetgsjdcb yhansklopals text-sm w-10 h-10 boalstehwqbj backdrop-opacity-95 backdrop-blur backdrop-saturate-150 bg-white/20 dark:bg-neutral-400/40 border border-white/80 dark:border-white/40 shadow">
            <i class="bi bi-bell text-xl pointer-events-none"></i>

            <span
              class="flex yhansklopals absolute -top-1 -end-0.5 text-center bg-red-600 px-1 min-w-4 text-white boalstehwqbj text-xs pointer-events-none"><span
                class="align-self-center">1</span></span>
          </button>

          <div id="dropNotif" x-show="open" @click.outside="open = false" style="display:none"
            x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition-all duration-200 ease-in"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
            class="sm:w-72 fixed sm:absolute max-sm:inset-x-4 sm:-end-16 rounded-lg top-full md:top-[120%] z-50 py-0.5 backdrop-opacity-95 backdrop-blur backdrop-saturate-150 bg-white/95 dark:bg-neutral-500/90 border border-black/[.05] dark:border-white/30 [&.show]:block shadow">
            <!-- heading -->
            <div class="py-2 px-3 font-normal border-b border-black/[.05] dark:border-white/30">
              <div class="relative w-full flex klsuaonrmcha vlaoethsnkma layhetgsjdcb">
                <div class="text-sm font-bold">Notifications</div>
                <button class="inline-block" title="Mark all as read">
                  <i class="bi bi-trash text-lg"></i>
                </button>
              </div>
            </div>
            <!-- body notif -->
            <div class="max-h-64 overflow-y-auto scrollbars show-scroll">
              <a class="relative" href="#">
                <div
                  class="unread [&.unread]:bg-purple-100/70 hover:bg-purple-100/70 dark:[&.unread]:bg-black/10 dark:hover:bg-black/10 flex flex-wrap klsuaonrmcha layhetgsjdcb border-b border-black/[.05] dark:border-white/30 py-2">
                  <div class="shrink max-w-full px-2 w-1/4 text-center">
                    <div class="flex yhansklopals layhetgsjdcb mx-auto w-8 h-8 boalstehwqbj bg-purple-600 text-white">
                      <i class="self-center bi bi-calendar"></i>
                    </div>
                  </div>
                  <div class="shrink max-w-full px-2 w-3/4">
                    <div class="text-sm font-bold">Event will coming</div>
                    <div class="text-neutral-500 dark:text-neutral-100 text-sm mt-1">Meeting with Mr.John Navas
                      at:10.00Am</div>
                    <div class="text-neutral-500 dark:text-neutral-100 text-xs mt-1">1h ago</div>
                  </div>
                </div>
              </a>
              <a class="relative" href="#">
                <div
                  class="[&.unread]:bg-purple-100/70 hover:bg-purple-100/70 dark:[&.unread]:bg-black/10 dark:hover:bg-black/10 flex flex-wrap klsuaonrmcha layhetgsjdcb border-b border-black/[.05] dark:border-white/30 py-2">
                  <div class="shrink max-w-full px-2 w-1/4 text-center">
                    <div class="flex yhansklopals layhetgsjdcb mx-auto w-8 h-8 boalstehwqbj bg-purple-600 text-white">
                      <i class="self-center bi bi-heart"></i>
                    </div>
                  </div>
                  <div class="shrink max-w-full px-2 w-3/4">
                    <div class="text-neutral-500 dark:text-neutral-100 text-sm mt-1"><b
                        class="text-neutral-600 dark:text-neutral-200">Daniel</b> like your post: <b
                        class="text-neutral-600 dark:text-neutral-200">Hello World!</b></div>
                    <div class="text-neutral-500 dark:text-neutral-100 text-xs mt-1">3h ago</div>
                  </div>
                </div>
              </a>
              <a class="relative" href="#">
                <div
                  class="[&.unread]:bg-purple-100/70 hover:bg-purple-100/70 dark:[&.unread]:bg-black/10 dark:hover:bg-black/10 flex flex-wrap klsuaonrmcha layhetgsjdcb border-b border-black/[.05] dark:border-white/30 py-2">
                  <div class="shrink max-w-full px-2 w-1/4 text-center">
                    <div class="flex yhansklopals layhetgsjdcb mx-auto w-8 h-8 boalstehwqbj bg-purple-600 text-white">
                      <i class="self-center bi bi-server"></i>
                    </div>
                  </div>
                  <div class="shrink max-w-full px-2 w-3/4">
                    <div class="text-sm font-bold">Server maintenance</div>
                    <div class="text-neutral-500 dark:text-neutral-100 text-sm mt-1">Server maintenance at:07.00Am</div>
                    <div class="text-neutral-500 dark:text-neutral-100 text-xs mt-1">8h ago</div>
                  </div>
                </div>
              </a>
              <a class="relative" href="#">
                <div
                  class="[&.unread]:bg-purple-100/70 hover:bg-purple-100/70 dark:[&.unread]:bg-black/10 dark:hover:bg-black/10 flex flex-wrap klsuaonrmcha layhetgsjdcb border-b border-black/[.05] dark:border-white/30 py-2">
                  <div class="shrink max-w-full px-2 w-1/4 text-center">
                    <div class="flex yhansklopals layhetgsjdcb mx-auto w-8 h-8 boalstehwqbj bg-purple-600 text-white">
                      <i class="self-center bi bi-chat"></i>
                    </div>
                  </div>
                  <div class="shrink max-w-full px-2 w-3/4">
                    <div class="text-neutral-500 dark:text-neutral-100 text-sm mt-1"><b
                        class="text-neutral-600 dark:text-neutral-200">Carlos</b> comment in your post: <b
                        class="text-neutral-600 dark:text-neutral-200">Hello World!</b></div>
                    <div class="text-neutral-500 dark:text-neutral-100 text-xs mt-1">1d ago</div>
                  </div>
                </div>
              </a>
            </div>
            <!-- footer notif -->
            <div class="p-3 text-sm text-center font-normal border-t border-black/[.05] dark:border-white/30">
              <a href="https://glassmorp.tailwinddashboard.com/user/notification.html" class="hover:underline">Show all Notifications</a>
            </div>
          </div>
        </li>

        <!-- profile -->
        <li x-data="{ open: false }" class="relative">
          <button @click="open = ! open" class="relative flex">
            <img class="h-10 w-10 boalstehwqbj border border-neutral-200 bg-neutral-700 pointer-events-none"
              src="https://glassmorp.tailwinddashboard.com/src/img/avatars/male1.jpg" alt="avatar">
            <span title="online"
              class="flex yhansklopals absolute -bottom-0.5 end-1 text-center bg-green-500 border border-white w-3 h-3 boalstehwqbj pointer-events-none"></span>
          </button>

          <ul id="dropUser" x-show="open" @click.outside="open = false" style="display:none"
            x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition-all duration-200 ease-in"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
            class="absolute end-0 lg:-end-4 rounded-lg top-[120%] z-50 py-0.5 backdrop-opacity-95 backdrop-blur backdrop-saturate-150 bg-white/95 dark:bg-neutral-500/90 border border-black/[.05] dark:border-white/30 [&.show]:block shadow">
            <li class="relative first:border-b last:border-t border-black/[.05] dark:border-white/30">
              <a class="block w-full py-2 dkslaoeyhnmj clear-both whitespace-nowrap hover:bg-purple-100 dark:hover:bg-black/10"
                href="https://glassmorp.tailwinddashboard.com/user/profile.html">Hi, Ari Budin
              </a>
            </li>
            <li class="relative first:border-b last:border-t border-black/[.05] dark:border-white/30">
              <a class="block w-full py-2 dkslaoeyhnmj clear-both whitespace-nowrap hover:bg-purple-100 dark:hover:bg-black/10"
                href="https://glassmorp.tailwinddashboard.com/user/setting.html">Settings &amp; Privacy
              </a>
            </li>
            <li class="relative first:border-b last:border-t border-black/[.05] dark:border-white/30">
              <a class="block w-full py-2 dkslaoeyhnmj clear-both whitespace-nowrap hover:bg-purple-100 dark:hover:bg-black/10"
                href="#">Help &amp; Support
              </a>
            </li>
            <li class="relative first:border-b last:border-t border-black/[.05] dark:border-white/30">
              <a class="block w-full py-2 dkslaoeyhnmj clear-both whitespace-nowrap hover:bg-purple-100 dark:hover:bg-black/10"
                href="#">Languages
              </a>
            </li>
            <li class="relative first:border-b last:border-t border-black/[.05] dark:border-white/30">
              <a class="block w-full py-2 dkslaoeyhnmj clear-both whitespace-nowrap hover:bg-purple-100 dark:hover:bg-black/10"
                href="https://glassmorp.tailwinddashboard.com/auth/signout.html">Sign out
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </header>
</template>
<script setup>

</script>
