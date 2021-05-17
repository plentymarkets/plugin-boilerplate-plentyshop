/*
 * This is our serverside javascript entry point
 * We are going to bootstrap the serverside of our js code here
 */

/**
 * This hook runs before the creation of the Vue application.
 * @param context The renderers context
 */
function beforeCreate(context)
{
    Vue.component("hello-world", () => import('./app/components/HelloWorld.vue'));
    Vue.component("who-to-greet", () => import('./app/components/WhoToGreet.vue'));

}

export { beforeCreate }
