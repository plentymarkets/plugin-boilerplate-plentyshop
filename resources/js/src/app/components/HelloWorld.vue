<template>
    <div>
        <p>{{ computedText }}</p>
    </div>
</template>

<script>
/*
    This is a Hello World component for demonstration purposes.
    Take a look at HelloWorldWidget.twig to see, how it is used in the DOM.
    It is also used to showcase the VueX store - when the useStore prop is true, the text prop is ignored and the text
    is fetched from the store. The text in the store can be modified via the WhoToGreet.vue component.
    For more information about Single File Components, please refer to https://vuejs.org/v2/guide/single-file-components.html
 */
import registerStore from "../mixins/registerStore";

export default {
    // The name of the component
    name: "hello-world",

    // The mixin is used to register our VueX store
    mixins: [registerStore],

    // Props are input parameters for the component
    props: {
        text: String,
        useStore: Boolean
    },

    // Computed properties automatically update, when one of it's constituents changes.
    computed:
    {
        computedText()
        {
            // Fetch the computedText from the VueX Store
            if(this.useStore)
            {
                return this.$store.getters['computedText'];
            }

            return "Hello " + this.text + "!";
        }
    }
}
</script>
