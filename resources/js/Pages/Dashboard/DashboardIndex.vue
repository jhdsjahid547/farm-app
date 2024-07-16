<script setup>
import iconCard from '@/assets/images/icons/icon-card.svg';
</script>

<template>
    <v-row>
        <v-col cols="6" md="4">
            <v-card elevation="0" class="bg-secondary overflow-hidden bubble-shape bubble-secondary-shape">
                <v-card-text>
                    <div class="d-flex align-start mb-6">
                        <v-btn icon rounded="sm" color="darksecondary" variant="flat">
                            <img :src="iconCard" width="25" />
                        </v-btn>
                        <div class="ml-auto z-1">
                            <v-menu :close-on-content-click="false">
                                <template v-slot:activator="{ props }">
                                    <v-btn icon rounded="sm" color="secondary" variant="flat" size="small" v-bind="props">
                                        <DotsIcon stroke-width="1.5" width="20" />
                                    </v-btn>
                                </template>
                                <v-sheet rounded="md" width="150" class="elevation-10">
                                    <v-list density="compact">
                                        <v-list-item v-for="(item, index) in items" :key="index" :value="index">
                                            <template v-slot:prepend>
                                                <component :is="item.icon" stroke-width="1.5" size="20" />
                                            </template>
                                            <v-list-item-title class="ml-2">{{ item.title }}</v-list-item-title>
                                        </v-list-item>
                                    </v-list>
                                </v-sheet>
                            </v-menu>
                        </div>
                    </div>
                    <h2 class="text-h1 font-weight-medium">
                        $500.00 <a href="#"><CircleArrowUpRightIcon stroke-width="1.5" width="28" class="text-white" /> </a>
                    </h2>
                    <span class="text-subtitle-1 text-medium-emphasis text-white">Total Expense</span>
                </v-card-text>
            </v-card>
        </v-col>
        <v-col cols="6" md="4">
            <v-card elevation="0" class="bg-primary overflow-hidden bubble-shape bubble-primary-shape">
                <v-card-text>
                    <div class="d-flex align-start mb-6">
                        <v-btn icon rounded="sm" color="darkprimary" variant="flat">
                            <img :src="iconCard" width="25" />
                        </v-btn>
                        <div class="ml-auto z-1">
                            <v-menu :close-on-content-click="false">
                                <template v-slot:activator="{ props }">
                                    <v-btn icon rounded="sm" color="primary" variant="flat" size="small" v-bind="props">
                                        <DotsIcon stroke-width="1.5" width="20" />
                                    </v-btn>
                                </template>
                                <v-sheet rounded="md" width="150" class="elevation-10">
                                    <v-list density="compact">
                                        <v-list-item v-for="(item, index) in items" :key="index" :value="index">
                                            <template v-slot:prepend>
                                                <component :is="item.icon" stroke-width="1.5" size="20" />
                                            </template>
                                            <v-list-item-title class="ml-2">{{ item.title }}</v-list-item-title>
                                        </v-list-item>
                                    </v-list>
                                </v-sheet>
                            </v-menu>
                        </div>
                    </div>
                    <h2 class="text-h1 font-weight-medium">
                        $400.00 <a href="#"><CircleArrowUpRightIcon stroke-width="1.5" width="28" class="text-white" /> </a>
                    </h2>
                    <span class="text-subtitle-1 text-medium-emphasis text-white">Total Sell</span>
                </v-card-text>
            </v-card>
        </v-col>
        <v-col cols="6" md="4">
            <v-card elevation="0" class="bg-info overflow-hidden bubble-shape bubble-info-shape">
                <v-card-text>
                    <div class="d-flex align-start mb-6">
                        <v-btn icon rounded="sm" color="darkinfo" variant="flat">
                            <img :src="iconCard" width="25" />
                        </v-btn>
                        <div class="ml-auto z-1">
                            <v-menu :close-on-content-click="false">
                                <template v-slot:activator="{ props }">
                                    <v-btn icon rounded="sm" color="info" variant="flat" size="small" v-bind="props">
                                        <DotsIcon stroke-width="1.5" width="20" />
                                    </v-btn>
                                </template>
                                <v-sheet rounded="md" width="150" class="elevation-10">
                                    <v-list density="compact">
                                        <v-list-item v-for="(item, index) in items" :key="index" :value="index">
                                            <template v-slot:prepend>
                                                <component :is="item.icon" stroke-width="1.5" size="20" />
                                            </template>
                                            <v-list-item-title class="ml-2">{{ item.title }}</v-list-item-title>
                                        </v-list-item>
                                    </v-list>
                                </v-sheet>
                            </v-menu>
                        </div>
                    </div>
                    <h2 class="text-h1 font-weight-medium">
                        $600.00 <a href="#"><CircleArrowUpRightIcon stroke-width="1.5" width="28" class="text-white" /> </a>
                    </h2>
                    <span class="text-subtitle-1 text-medium-emphasis text-white">Total Earning</span>
                </v-card-text>
            </v-card>
        </v-col>
    </v-row>
</template>

