<template>
    <div class="columns">
        <div class="column"></div>
        <div class="column">


            <div class="field">
                <label class="label">Modelo</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Text input" v-model="vehicle.model">
                </div>

            </div>
            <div class="field">
                <label class="label">Potencia</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Text input" v-model="vehicle.power">
                </div>

            </div>
            <div class="field">
                <label class="label">Numero de Llantas</label>
                <div class="control">
                    <select v-model="vehicle.wheels">
                        <option disabled value="">Seleccione un elemento</option>
                        <option>2</option>
                        <option>4</option>

                    </select>
                </div>

            </div>
            <button class="button pull-right is-success m-t-20" @click="save" :disabled="disabledButton">
				<span class="icon">
			      <i class="fa fa-save"></i>
			    </span>
                <span>Guardar</span>
            </button>

        </div>
        <div class="column">


        </div>

    </div>
</template>

<script>



    export default {
        data(){
            return {
                events: [],
                vehicle: {
                    model: '',
                    power:'',
                    wheels:0

                },
                disabledButton: false,

            }

        },
        mounted () {


        },
        methods:{

            save () {
                return this.axios.post('/vehicle', this.vehicle).then(response => {

                    window.location.href = "/";
                })
            },

        }

    }
</script>

<style scoped>

</style>
