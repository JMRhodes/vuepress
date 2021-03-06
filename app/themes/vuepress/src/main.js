import Vue from 'vue'
import App from './App.vue'
import router from './router'
import '../assets/scss/main.scss';

new Vue({
  el: '#app',
  router,
  template: '<App/>',
  components: {App}
});
