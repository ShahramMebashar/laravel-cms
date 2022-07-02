import '../css/app.css';

import { createApp, h, type DefineComponent } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { Ziggy } from './ziggy';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'LaraCMS';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => {
        return resolvePageComponent<DefineComponent>(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue')
        )
            .then(page => {
                // page.default
                return page;
            });
    },
    setup({ el, app, props, plugin }) {
        createApp({ render: () => h(app, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });

