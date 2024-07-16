<script setup>
import { computed } from 'vue'
import { usePage } from '@inertiajs/vue3'
import VerticalSidebarVue from '@/Layouts/vertical-sidebar/VerticalSidebar.vue'
import VerticalHeaderVue from '@/Layouts/vertical-header/VerticalHeader.vue'
import FooterPanel from '@/Layouts/footer/FooterPanel.vue'
import { useCustomizerStore } from '@/stores/customizer.js'

const customizer = useCustomizerStore()
const user = computed(() => usePage().props.user)
</script>
<template>
	<section v-if="user">
	  <v-locale-provider>
		<v-app
		  theme="PurpleTheme"
		  :class="[customizer.mini_sidebar ? 'mini-sidebar' : '']"
		>
		  <VerticalSidebarVue />
		  <VerticalHeaderVue />

		  <v-main>
			<v-container fluid class="page-wrapper">
            <div>
                <slot></slot>
            </div>
			</v-container>
			<v-container fluid class="pt-0">
			  <div>
				<FooterPanel />
			  </div>
			</v-container>
		  </v-main>
		</v-app>
	  </v-locale-provider>
	</section>
    <section v-else>
        <div>
            <slot></slot>
        </div>
    </section>
</template>
