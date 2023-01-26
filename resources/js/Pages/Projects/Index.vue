<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head,Link } from '@inertiajs/inertia-vue3';
defineProps({
    projects: Object,
})
</script>
<template>
    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-end m-2 p-2">
                        <Link :href="route('projects.create')" class="px-4 py-2 bg-black hover:bg-red text-white rounded-md">
                            New Project
                        </Link>
                </div>
                    
                <div class="overflow-x-auto relative">
                    <table class="w-full text-sm text-left text-gray-500 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    ID
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Name
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    URL
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Image
                                </th>
                                <th scope="col" class="py-3 px-6">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="projects in projects.data" :key="projects.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="py-4 px-6 font-medium text-black whitespace-nowrap ">
                                    {{projects.id}}
                                </th>
                                <td class="py-4 px-6">
                                    {{projects.name}}
                                </td>
                                <td class="py-4 px-6">
                                    {{projects.url}}
                                </td>
                                <td class="py-4 px-6">
                                    <img :src="projects.image" class="w-12 h-12 rounded-full"/>
                                </td>
                                <td class="py-4 px-6">
                                    <Link 
                                        :href="route('projects.edit',projects.id)" 
                                        class="font-medium text-blue-500 hover:text-blue-800 mr-2">Edit</Link>
                                    <Link 
                                        :href="route('projects.destroy',projects.id)"
                                        method="delete"
                                        as="button"
                                        type="button"
                                        class="font-medium text-red-500 hover:text-red-800 mr-2">Delete</Link>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                </div>
            </div>
    </AuthenticatedLayout>
</template>