
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    data : {
        massage :  '',
        massageLists : []
    },
    methods : {
        onMessageSend(event) {
            if(this.massage === "") return false;
            axios.post(event.target.action, {
                massage: this.massage
            })
            .then(function (response) {
                app.massage = "";
            })
            .catch(function (error) {
                console.log(error);
            });
        }
    }
});

    
Echo.private('message')
    .listen('MessageStored', (e) => {
        app.massageLists.push(e.message);
    });
  

