<template>
    <div>
        <button class="btn btn-primary p-1 ml-1" @click="discipleUser" v-text="buttonText">
        </button>

    </div>
</template>

<script>
    export default {

        props: ['userId','disciple'],

        mounted() {
            console.log('Component mounted.')
        },

        data: function() {
            return {
                status: this.disciple,
            }
        },

        methods: {

            discipleUser(){

                axios.post('/disciple/'+this.userId)
                    .then(response => {
                        // alert(response.data);

                        this.status = ! this.status;

                        console.log(response.data);
                    });
                    

            }
        },

        computed: {
            buttonText(){
                return(this.status) ? 'Disciple' : 'Undisciple';
            }
        }
    }
</script>
