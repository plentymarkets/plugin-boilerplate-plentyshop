<template>
    <div>
        <input v-model="text">
    </div>
</template>

<script>
/*
    This is an example component for showcasing the VueX store.
    Take a look at WhoToGreetWidget.twig to see, how it is used in the DOM.
    For more information about Single File Components, please refer to https://vuejs.org/v2/guide/single-file-components.html
 */
export default {
    // The name of the component
    name: "who-to-greet",

    // The data on
    data() {
        return {
            text: "World"
        }
    },

    watch: {
        // Whenever text changes, this function will runs
        text()
        {
            // We want to run a mutation to write our input into the store
            this.$store.commit("setHelloWorldText", this.text);
        }
    }
}
</script>
