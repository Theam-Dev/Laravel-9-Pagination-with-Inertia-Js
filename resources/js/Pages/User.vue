<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import Pagination from "@/Components/Pagination.vue";
const props = defineProps({
  user: {
    type: Object,
    default: () => ({}),
  },
});
</script>
<template>
  <Head title="InertiaPagination" />
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                  <th scope="col" class="px-6 py-3">Id</th>
                  <th scope="col" class="px-6 py-3">Username</th>
                  <th scope="col" class="px-6 py-3">email</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="data in user.data" :key="data.id"
                  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                    {{ data.id }}
                  </th>
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                    {{ data.name }}
                  </th>
                  <td class="px-6 py-4">{{ data.email }}</td>
                </tr>
              </tbody>
            </table>
          </div>
          <Pagination :data="user" />
        </div>
      </div>
    </div>
  </div>
</template>