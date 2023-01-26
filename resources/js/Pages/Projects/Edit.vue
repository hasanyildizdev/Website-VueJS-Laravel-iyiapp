<template>

    <Head title="Edit Project" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Project</h2>
        </template>

        <div class="py-12">
            <div class="max-w-md mx-auto sm:px-6 lg:px-8 bg-white">
                <form @submit.prevent="submit" class="p-4">
                    <div>
                        <InputLabel for="name" value="Name" />
                        <TextInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" autofocus autocomplete="username" />
                        <InputError class="mt-2" :message="$page.props.errors.name" />
                    </div>
                    <div>
                        <InputLabel for="url" value="URL" />
                        <TextInput id="url" type="text" class="mt-1 block w-full" v-model="form.url" autofocus autocomplete="url" />
                        <InputError class="mt-2" :message="$page.props.errors.url" />
                    </div>
                    <div class="mt-2">
                        <InputLabel for="image" value="Image" />
                        <TextInput id="image" type="file" class="mt-1 block w-full" @input="form.image=$event.target.files[0]"/>
                        <InputError class="mt-2" :message="$page.props.errors.image" />
                    </div>

                    <div class="flex items-center justify-end mt-4 ">
                        <PrimaryButton class="ml-4 text-white bg-black rounded-full hover:bg-red" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Update
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/inertia-vue3';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Inertia } from '@inertiajs/inertia';

const props = defineProps({
    project: Object,
})

const form = useForm({
    name: props.project?.name,
    url: props.project?.url,
    image: null,
});

const submit = () => {
 Inertia.post(`/projects/${props.project.id}`,{
    _method:"put",
    name: form.name,
    url: form.url,
    image:form.image,
 });
};
</script>