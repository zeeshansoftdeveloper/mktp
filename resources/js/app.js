require('./bootstrap');
// import Vue from 'vue/dist/vue.common.js';

// const app = new Vue({
//     el: '#app',

//     data: {
//         messages: [],
//         newMessage: ''
//     },

//     created() {
//         this.fetchMessages();

//     Echo.private('/chat')
//             .listen('MessageSentEvent', (e) => {
//                 this.messages.push({
//                     message: e.message.message,
//                     user: e.user
//                 });
//             });
//     },

//     methods: {
//         fetchMessages() {
//             axios.get('/mktp/messages').then(response => {
//                 this.messages = response.data;
//             });
//         },

//         addMessage(message) {
//             axios.post('/mktp/messages', {
//                 message
//             }).then(response => {
//                 this.messages.push({
//                     message: response.data.message.message,
//                     user: response.data.user
//                 });
//             });
//         },

//         sendMessage() {
//             this.addMessage(this.newMessage);
//             this.newMessage = '';
//         }
//     }
// });