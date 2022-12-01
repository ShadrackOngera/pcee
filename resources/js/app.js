/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
import VehicleVitalsComponent from './components/VehicleVitalsComponent.vue';
import DashboardComponent from './components/DashboardComponent.vue';
import HomePageComponent from './components/HomePageComponent.vue';
import SettingsComponent from './components/SettingsComponent.vue';
import MileageComponent from './components/MileageComponent.vue';
import ConfigComponent from './components/ConfigComponent.vue';
import OverviewComponent from './components/OverviewComponent.vue';


app.component('example-component', ExampleComponent);
app.component('vehicle-vitals-component', VehicleVitalsComponent);
app.component('dashboard-component', DashboardComponent);
app.component('home-page-component', HomePageComponent);
app.component('settings-component', SettingsComponent);
app.component('mileage-component', MileageComponent);
app.component('config-component', ConfigComponent);
app.component('overview-component', OverviewComponent);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');
