<script setup>
import { computed } from 'vue'
import { Link, usePage } from '@inertiajs/vue3'
import { SettingsIcon, LogoutIcon, UserIcon } from 'vue-tabler-icons'

const user = computed(() => usePage().props.user)

/*const swt1 = ref(true)
const swt2 = ref(false)*/
</script>

<template>
  <!-- ---------------------------------------------- -->
  <!-- profile DD -->
  <!-- ---------------------------------------------- -->
  <div class="pa-4">
    <h4 class="mb-n1">Hello, <span class="font-weight-regular">{{ user.name }}</span></h4>
    <span class="text-subtitle-2 text-medium-emphasis">admin</span>

<!--<v-text-field persistent-placeholder placeholder="Search" class="my-3" color="primary" variant="outlined" hide-details>
      <template v-slot:prepend-inner>
        <SearchIcon stroke-width="1.5" size="20" class="text-lightText SearchIcon" />
      </template>
    </v-text-field>-->

    <v-divider></v-divider>
    <perfect-scrollbar style="height: calc(100vh - 300px); max-height: 170px"> <!--increase max-height when element many-->
  <!--<div class="bg-lightprimary rounded-md px-5 py-3 my-3">
        <div class="d-flex align-center justify-space-between">
          <h5 class="text-h5">Start DND Mode</h5>
          <div>
            <v-switch v-model="swt1" color="primary" hide-details></v-switch>
          </div>
        </div>
        <div class="d-flex align-center justify-space-between">
          <h5 class="text-h5">Allow Notifications</h5>
          <div>
            <v-switch v-model="swt2" color="primary" hide-details></v-switch>
          </div>
        </div>
      </div>
      <v-divider></v-divider>-->

      <v-list class="mt-3">
        <v-list-item color="secondary" rounded="md">
          <template v-slot:prepend>
            <SettingsIcon size="20" class="mr-2" />
          </template>

          <v-list-item-title class="text-subtitle-2"> Account Settings</v-list-item-title>
        </v-list-item>

        <v-list-item color="secondary" rounded="md">
          <template v-slot:prepend>
            <UserIcon size="20" class="mr-2" />
          </template>

          <v-list-item-title class="text-subtitle-2">Profile</v-list-item-title>

          <template v-slot:append>
            <v-chip color="warning" class="text-white" text="02" variant="flat" size="small" />
          </template>
        </v-list-item>

          <Link :href="route('logout')" method="DELETE" as="button">
            <v-list-item color="secondary" rounded="md">
              <template v-slot:prepend>
                <LogoutIcon size="20" class="mr-2" />
              </template>

              <v-list-item-title class="text-subtitle-2"> Logout</v-list-item-title>
            </v-list-item>
          </Link>
      </v-list>
    </perfect-scrollbar>
  </div>
</template>
