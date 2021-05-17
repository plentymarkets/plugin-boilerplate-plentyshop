/*
 * This is our clientside javascript entry point
 */

// The public path allows us to load vue components as asynchronous chunks.
import "./app/publicPath";

// The Ceres bundle provides Vue, we do not need to bundle it ourself
const Vue = window.Vue;

// Register our components (asynchronously)
Vue.component("hello-world", () => import('./app/components/HelloWorld.vue'));
Vue.component("who-to-greet", () => import('./app/components/WhoToGreet.vue'));



