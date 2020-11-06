<template>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form @submit="sendMessage" class="was-validated"> 
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input @keyup="buttonText = name" v-model="name" type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input v-model="email" type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea v-model="message" class="form-control" id="message" placeholder="Enter you message here" name="message" required></textarea>
                        </div>
                        <button v-if="formSending == false" type="submit" class="btn btn-primary">Submit</button>
                        <div>
                            <button v-if="formSending" type="submit" class="btn btn-info">Submitting</button>
                        </div>
                    </form> 
                </div>
            </div>
        </div>

</template>

<script>
export default {
    data(){
        return{
            loaded: false,
            formSending: false,
            name: null,
            email: null,
            message: null,
            buttonText: 'primarty',
        }
    },
    mounted(){

    },
    methods:{

        sendMessage(e){

            e.preventDefault();

            const self = this;

            self.formSending = true;

            Vue.axios.post('/contact-us/sendmessage/ajax',{
                name: self.name,
                email: self.email,
                message: self.message
            }).then(response=>{

                // alert('thank you! message has been sent!')
                alert(respons.data.message);

                self.formSending = false;
                self.name = null;
                self.email = null;
                self.message = null;
            
            }).catch(error => {

                alert('failed');

                self.formSending = false;
                self.name = null;
                self.email = null;
                self.message = null;
                
            })
        }

    }
}
</script>