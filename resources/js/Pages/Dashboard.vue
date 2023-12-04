<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>
<style scoped>

.background-container {
    position: relative;
    width: 100%;
    height:140vh; 
    background-image: url('@/img/welcome.webp');
    background-size: 100% 100%; /* Hace que la imagen ocupe todo el contenedor */
    background-position: center;
    background-repeat: no-repeat; /* Evita que la imagen se repita */
   
}
/* Media query para dispositivos más pequeños */
@media screen and (max-width: 768px) {
    .background-container {
        height: 100vh; /* Cambia la altura para dispositivos más pequeños */
        background-size: cover; /* Ajusta el tamaño de la imagen para que cubra el contenedor */
    }
}

  #miTexto {
    font-style: italic;
    font-weight: bold;
    color:#0f0f0f;
    font-size: 45px; /* Puedes ajustar el tamaño del texto según tus necesidades */
}
h2.text-4xl {
    font-size: 2.5rem; /* Ajusta el tamaño de la fuente */
    /* Otros estilos opcionales para mejorar la apariencia */
    font-weight: bold; /* Para hacerlo más audaz si lo deseas */
    color: #333; /* Cambia el color del texto si es necesario */
    /* Ajustes adicionales según tus preferencias */
}


</style>


<template>
    <Head title="Dashboard" />
     <div class="background-container">

    <AuthenticatedLayout>
        <template #header>


            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <!-- Logo -->
                    <!-- <img src="@/img/logo.svg" class="logo block h-40 w-auto fill-current text-gray-100"> -->
                </div>

                <div class="mt-16 py-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <!-- Acomoden todo a su gusto, que tenga color, estilo, etc.. -->
                        <!-- los del front: Texto de bienvenida a la izquierda -->
                        
                        <div class="md:col-span-1">
                            <div class="sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl">
                                <div style="font-size: 0.4em; color: goldenrod;">PUEDES LLEGAR A SER LA
                                </div>

                                <div class=" text-gray-900 font-extrabold italic text-5xl"
                                    style="font-family: 'Brush Script MT', cursive;">
                                    mejor
                                </div>

                                <div class="py-2" style="font-size: 0.4em; color: goldenrod;">VERSION DE TI 
                                </div>


                            </div>

                            <!-- <p class="mt-4">
                            <a href="#" class="text-red-500 hover:underline">Descubre nuestros servicios</a>
                        </p> -->
                        </div>
                    </div>
                </div>
            </div>


        </template>


    </AuthenticatedLayout>
    </div>
</template>
