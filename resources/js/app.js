require('./bootstrap');

import Vue from 'vue';

import Project from './Components/Project.vue'

new Vue({
    el: '#app',
    components:{
        'project': Project
    }
})
