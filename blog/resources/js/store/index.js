
import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
  // Basically the `data` in your component but for the whole app.
  state: {
    links: [
      {
        title: 'first',
        content: 'http://google.com',
        active: false
      },
      {
        title: 'second',
        content: 'http://kiva.org',
        active: false
      }
    ]
  },
  // Basically `computed` values shared across components.
  getters: {
  },
  // Synchronous methods for modifying the values in the state.
  // They are handed a `state` from the store, and an optional `payload` value you pass in.
  mutations: {
    activateLink: function (state, payload) {
      state.links.forEach(function (link) {
        link.active = false;
      });
      state.links[payload.index].active = true;
    },
    addNewObj: function (state, payload) {
    	state.links.push({
    		title: payload.title,
    		content: payload.content,
    		active: false,
    	});
    },
    updateInfo: function (state, payload) {
    	console.log(payload);
    	state.links[payload.index].title= payload.title;
    	state.links[payload.index].content=payload.content;
    }
  },
  // Asynchronous methods that can call mutation methods to mutate the state via commits.
  // They are handed a context of the `store`, and an optional `payload` object you pass in.
  actions: {
    activateLink: function (store, payload) {
      store.commit('activateLink', payload);
    },
    newLink: function (store, payload) {
    	store.commit('addNewObj',payload);
    },
    updateLink: function (store, payload) {
    	console.log("updated");
    	store.commit('updateInfo',payload);

    }
  }
});
