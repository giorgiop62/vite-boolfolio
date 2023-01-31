<script>
import axios from 'axios';
export default {
    name:'Contacts',
    data(){
        return{
            name:'',
            email:'',
            text:''
        }
    },
    methods:{
        sendForm(){
            const data =
            {
                name:  this.name,
                email: this.email,
                text:  this.text,
            }
            console.log(data);
        }
    }

}
</script>

<template>
    <h1>contatti</h1>
    <div class="container">
        <h3>Numero:3505255178</h3>
        <h3>Residenza:Napoli</h3>
        <h3>Anno di nascits: 26/12/1995</h3>
        <h3>Email:giorgiop62@gmail.com</h3>

        <form @submit.prevent="sendForm()">
            <div>
                <input v-model.trim="name" type="text" placeholder="name">
            </div>
            <div>
                <input v-model.trim="email" type="text" placeholder="email">
            </div>
            <div>
                <textarea v-model.trim="text" name="text"  cols="30" rows="10" placeholder="text"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Invia</button>

        </form>

    </div>

</template>



<style>

</style>
