<script setup>
import { ref } from "vue";
import PaginateTable from "@/Components/PaginateTable.vue";
import { InfoCircleIcon } from 'vue-tabler-icons';
import FilterTable from "@/Components/FilterTable.vue";
/*const headers = ref([
    { title: 'Tag', align: 'start', key: 'tag' },
    { title: 'Type', align: 'start', key: 'type' },
    { title: 'Gender', align: 'start', key: 'gender' },
    { title: 'Breed', align: 'start', key: 'breed' },
    { title: 'Subsection', align: 'start', key: 'subsection' },
    { title: 'Status', align: 'start', key: 'status' },
])*/
const props = defineProps({
    cattles: Object,
    filters: Object,
    type: Array,
    gender: Array,
    subsection: Array,
    breed: Array,
})
</script>
<template>
    <section>
        <filter-table :type="type" :gender="gender" :subsection="subsection" :breed="breed" :filters="filters"></filter-table>
    </section>
    <v-table>
        <thead>
        <tr>
            <th class="font-weight-bold text-left">Sl.</th>
            <th class="font-weight-bold text-left">Tag</th>
            <th class="font-weight-bold text-left">Type</th>
            <th class="font-weight-bold text-left">Gender</th>
            <th class="font-weight-bold text-left">Breed</th>
            <th class="font-weight-bold text-left">Subsection</th>
            <th class="font-weight-bold text-left">Status</th>
            <th class="font-weight-bold text-left">Action</th>
        </tr>
        </thead>
        <tbody>
        <tr
            v-for="(cattle, i) in cattles.data"
            :key="cattle.id"
        >
            <td>{{ i + 1 }}</td>
            <td>{{ cattle.tag }}</td>
            <td>{{ cattle.type.name }}</td>
            <td>{{ cattle.gender.name }}</td>
            <td>{{ cattle.breed.name }}</td>
            <td>{{ cattle.subsection.name }}</td>
            <td>
                <div v-if="cattle.status">
                    <v-badge
                        color="success"
                        content="In my farm"
                        inline
                    ></v-badge>
                </div>
                <div v-else>
                    <v-badge
                        color="error"
                        content="Not in farm"
                        inline
                    ></v-badge>
                </div>
            </td>
            <td>
                <v-btn :prepend-icon="InfoCircleIcon" color="info" variant="outlined">Details</v-btn>
            </td>
        </tr>
        </tbody>
    </v-table>
    <section v-if="cattles.data.length">
        <div class="d-flex align-center flex-column">
            <paginate-table :links="cattles.links"></paginate-table>
        </div>
    </section>
<!--    <v-data-table-server
        :headers="headers"
        :items-length="cattles.data.length"
        :items="cattles.data"
        item-key="id"
        hide-default-footer
    ></v-data-table-server>-->
</template>
