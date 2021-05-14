/*
    This is an example VueX store. It allows us to share state between multiple components.
    Please refer to https://vuex.vuejs.org/ for more information.
 */

// The state of the VueX store.
const state = () => ({
    text: "World"
});

// Mutations can change the state
const mutations =
    {
        setHelloWorldText(state, newText)
        {
            state.text = newText;
        }
    };

// Actions are potentially asynchronous functions (REST calls for example)
const actions =
    {
        // We have no need for any actions in this store, so we leave this empty.
        // You can also omit the actions variable in your module, if you don't need it.
    };

// Getters behave similar to computed properties of components
const getters =
    {
        computedText(state)
        {
            return "Hello " + state.text + "!"
        }
    };

export default {
    state,
    mutations,
    actions,
    getters
};
