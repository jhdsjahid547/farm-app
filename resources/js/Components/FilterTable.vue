<script setup>
import { useForm } from '@inertiajs/vue3';

const props = defineProps({
    filters: Object,
    type: Array,
    gender: Array,
    subsection: Array,
    breed: Array
});
const filterForm = useForm({
    type: props.filters.type ?? null,
    gender: props.filters.gender ?? null,
    subsection: props.filters.subsection ?? null,
    breed: props.filters.breed ?? null,
});
const filter = () => filterForm.get(route('cattle.index'), {
    preserveState: true,
    preserveScroll: true
});
const clear = () => {
    filterForm.type = null;
    filterForm.gender = null;
    filterForm.subsection = null;
    filterForm.breed = null;
    filter();
}
</script>

<template>
    <form @submit.prevent="filter">
        <div class="d-flex flex-wrap mt-4 ga-2">
            <div class="d-flex flex-nowrap align-center">
                <v-select
                    v-model.number="filterForm.type"
                    width="100"
                    placeholder="Select"
                    label="Type"
                    variant="outlined"
                    density="compact"
                    item-title="name"
                    item-value="id"
                    :items="type"
                ></v-select>
                <v-select
                    v-model.number="filterForm.gender"
                    width="115"
                    placeholder="Select"
                    label="Gender"
                    variant="outlined"
                    density="compact"
                    item-title="name"
                    item-value="id"
                    :items="gender"
                ></v-select>
            </div>
            <div class="d-flex flex-nowrap align-center">
                <v-select
                    v-model.number="filterForm.subsection"
                    width="150"
                    placeholder="Select"
                    label="Subsection"
                    variant="outlined"
                    density="compact"
                    item-title="name"
                    item-value="id"
                    :items="subsection"
                ></v-select>
                <v-select
                    v-model.number="filterForm.breed"
                    width="105"
                    placeholder="Select"
                    label="Breed"
                    variant="outlined"
                    density="compact"
                    item-title="name"
                    item-value="id"
                    :items="breed"
                ></v-select>
            </div>
            <v-btn type="submit" variant="tonal" color="green">filter</v-btn>
            <v-btn type="reset" variant="tonal" color="red" @click="clear">reset</v-btn>
        </div>
    </form>
</template>
