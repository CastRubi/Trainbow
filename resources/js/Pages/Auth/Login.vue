<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <GuestLayout >

        <Head title="Log in" />
        
      
        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">



            <div>
                <InputLabel for="email" value="Correo electrónico" />

                <TextInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus
                    autocomplete="username" />

                <InputError class="mt-2" :message="form.errors.email" />

            </div>



            <div class="mt-8">
                <InputLabel for="password" value="Contraseña" />

                <TextInput id="password"  type="password" class="mt-1 block w-full" v-model="form.password" required=""
                    autocomplete="current-password" />

                   <InputError class="mt-2" :message="form.errors.password" />
            </div>
          
            

            <div class="block mt-8 flex items-center justify-between">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ml-2 text-sm text-gray-600">Recordar Contraseña</span>
                </label>

                <div class="text-sm text-right">
                    <Link v-if="canResetPassword" :href="route('password.request')"
                        class="font-semibold text-cyan-600 hover:text-cyan-700">
                    Olvidastes tu contraseña?
                    </Link>
                </div>
            </div>


            

            <div class="flex items-center justify-end mt-8">

                <PrimaryButton  className="flex w-full justify-center rounded-md bg-cyan-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-rose-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-Fuchsia-600"
              >
                Iniciar Sesion

                </PrimaryButton>
            </div>
        </form>
        <p className="mt-10 text-center text-sm text-gray-500">
            ¿Aún no tienes una cuenta? 
            <a href="register" className="font-semibold leading-6 text-cyan-600 hover:text-cyan-700">
               Únete
            </a>
          </p>
    </GuestLayout>
</template>