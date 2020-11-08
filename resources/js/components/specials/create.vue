<template>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form @submit="storeSpecial" class="was-validated"> 
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input v-model="name" type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea v-model="description" class="form-control" id="description" placeholder="Enter you message here" name="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="was">was price:</label>
                            <input v-model="was" type="number" class="form-control" id="was" placeholder="Enter name" name="was" required>
                        </div>
                        <div class="form-group">
                            <label for="current">current price:</label>
                            <input v-model="current" type="number" class="form-control" id="current" placeholder="Enter name" name="current" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-info">Submit</button>
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
            description: null,
            was: null,
            current: null,
        }

    },
    mounted(){

    },
    methods:{

        storeSpecial(e){

            e.preventDefault();

            const self = this;

            Vue.axios.post('/admin/specials',{
                name: self.name,
                description: self.description,
                was: self.was,
                current: self.current
            }).then(response=>{

                alert('send success!');

                self.name = null;
                self.description = null;
                self.was = null;
                self.current = null;

            }).catch(error => {

                alert('send failed');

                self.name = null;
                self.description = null;
                self.was = null;
                self.current = null;
            })

        }

    }
}
</script>