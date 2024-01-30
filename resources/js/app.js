import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';

createInertiaApp({
    title: title => `${title} - Laracamp App`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue', { eager: true })),
    setup({ el, App, props, plugin }) {

        const VueApp = createApp({ render: () => h(App, props) });

        VueApp.config.globalProperties.$route = route;

        VueApp.config.errorHandler = (err) => {
            console.log(err);
        }

        return VueApp.use(plugin).mount(el)

        // return createApp({ render: () => h(App, props) })
        //     .use(plugin)
        //     .mount(el)
    },
});

// createInertiaApp({
//     title: (title) => `${title} - ${appName}`,
//     resolve: (name) => require(`./Pages/${name}.vue`),
//     setup({ el, app, props, plugin }) {
//         const VueApp = createApp({ render: () => h(app, props) });

//         VueApp.config.globalProperties.$date = dayjs;

//         VueApp.use(plugin)
//             .use(PrimeVue)
//             .mixin({ methods: { route } })
//             .mount(el);
//     },
// });