<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';
import logo from '@/Components/logo.vue';
const showingNavigationDropdown = ref(false);

const toggleDropdown = () => {
   showingNavigationDropdown.value = !showingNavigationDropdown.value;
};

const closeSidebar = () => {
   showingNavigationDropdown.value = false;
};

</script>

<template>
   <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16">
      <div class="flex justify-between h-7">
         <div class="flex">
         </div>


         <!-- Primary Navigation Menu -->

         <div class="hidden sm:flex sm:items-center sm:ms-6">
            <!-- Settings Dropdown -->
            <div class="ms-3 relative">

            </div>
         </div>

         <!-- Botón del sidebard -->
         <button @click="toggleDropdown" data-drawer-target="separator-sidebar" data-drawer-toggle="separator-sidebar"
            aria-controls="separator-sidebar" type="button"
            class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-red-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
               xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd"
                  d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
               </path>
            </svg>
         </button>

      </div>



      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">



         <!-- elementos del sidebard -->
         <aside id="separator-sidebar"
            :class="{ 'translate-x-0': showingNavigationDropdown, '-translate-x-full': !showingNavigationDropdown }"
            
  class="fixed top-0 left-0 z-40 w-64 h-full transition-transform sm:translate-x-0 bg-red-50 dark:bg-red-800"
      aria-label="Sidebar"> 

            <div class="h-full px-3 py-4 overflow-y-auto bg-zinc-950 dark:bg-zinc-950">
               <center>
                  <logo class="block h-9 w-auto fill-current text-gray-800" />
               </center>
               <ul class="space-y-2 font-medium">
                  <li>

                     <ResponsiveNavLink href='/dashboard'
                        class="flex items-center mt-20 p-2 text-neutral-50 rounded-lg dark:text-white hover:bg-neutral-50 dark:hover:bg-neutral-50 group">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 576 512" fill="orange">
                           <!-- Cambiar el color a amarillo -->
                           <path
                              d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                        </svg>
                        <span class="ms-10">Inicio</span>
                     </ResponsiveNavLink>
                  </li>

                  <li>
                     <ResponsiveNavLink href='/agenda'
                        class="flex items-center mt-8 p-2 text-neutral-50 rounded-lg dark:text-white hover:bg-neutral-50 dark:hover:bg-neutral-50 group">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512" fill="orange">
                           <path
                              d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z" />
                           <!-- Cambiar el color a amarillo -->
                        </svg>
                        <span class=" ms-10 ">Agendas</span>
                     </ResponsiveNavLink>
                  </li>
                  
                  <li>
                     <ResponsiveNavLink href="/servicios"
                        class="flex items-center mt-8 p-2 text-neutral-50 rounded-lg dark:text-white hover:bg-neutral-50 dark:hover:bg-neutral-50 group">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" fill="orange" viewBox="0 0 18 20">
                           <path
                              d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                        </svg>
                        <span class=" ms-10 ">Servicios</span>
                     </ResponsiveNavLink>
                  </li>
                  <li>
                     <ResponsiveNavLink href='/soporte'
                        class="flex items-center mt-8 p-2 text-neutral-50 rounded-lg dark:text-white hover:bg-neutral-50 dark:hover:bg-neutral-50 group">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" fill="orange" viewBox="0 0 20 18">
                           <path
                              d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <span class=" ms-10">Soporte</span>
                     </ResponsiveNavLink>
                     <!--************* AGREGUE PARA LA VISTA DE ROLES ************* -->
                    
                  </li>
               </ul>
               <div class=" mt-8">
                  <Dropdown align="right" width="48">
                     <template #trigger>
                        <span class="inline-flex rounded-md">
                           <button type="button"
                              class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                              {{ $page.props.auth.user.name }}

                              <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor">
                                 <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                              </svg>
                           </button>
                        </span>
                     </template>

                     <template #content>
                        <DropdownLink :href="route('profile.edit')"> Profile </DropdownLink>
                        <DropdownLink :href="route('logout')" method="post" as="button">
                           Log Out
                        </DropdownLink>
                     </template>
                  </Dropdown>
               </div>

            </div>

         </aside>
      </div>



      <!-- àqui estoy poniendo los slot -->
      <div class="flex items-center justify-center min-h-screen">

         <div class="p-4 sm:ml-64">

            <!-- Page Heading -->
            <header
               class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-slate-50 md:text-5xl lg:text-6xl dark:text-white"
               style="background-color: rgba(255, 255, 255, 0.594);" v-if="$slots.header">
               <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                  <slot name="header" />

               </div></header>
               <!-- Page Content -->
               <main>
                  <div class="flex  justify-center min-h-screen">
                  <slot />
                  <slot name="table-content" />
                  <slot name="table-content-Roles" />
                  <slot name="table-content-Inventarios" />
                  <slot name="content-Agregar" />

                  <div class=" text-right">
                     <slot name="inicio" />

                  </div>
                  
                 </div> 

               </main>   

         </div>

      </div>
   </div>
</template>
