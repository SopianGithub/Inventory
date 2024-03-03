import './bootstrap';

// import * as data from '../libs/menu.json' assert { type: "json" };
import 'flowbite';
import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

// Alpine.store('toggleSidebarMobile', {
//     on: false,
 
//     toggle() {
//         this.on = ! this.on
//     }
// });

Alpine.start();
