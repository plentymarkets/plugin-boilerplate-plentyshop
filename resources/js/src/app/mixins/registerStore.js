import HelloWorldModule from '../store/HelloWorldModule'

/*
    This is a mixin used to register our VueX module into the VueX store.
    A mixin is a way to reuse code by "mixing it in" into a component.
 */
export default {
    // The mixins created lifecycle runs before the component lifecycle.
    created () {
        // We check if the module is not yet registered
        if (!this.$store.hasModule('helloWorld')) {
            // preserveState is used for literally preserving the already existing state
            this.$store.registerModule('helloWorld', HelloWorldModule, { preserveState: !!this.$store.state.helloWorld })
        }
    }
}
