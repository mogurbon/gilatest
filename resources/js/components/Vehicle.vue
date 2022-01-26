<template>
    <div class="columns">
        <div class="column"></div>
        <div class="column">
            <table class="table">
                <thead>
                <tr>
                    <th>Modelo</th>
                    <th>Potencia</th>
                    <th>Numero de llantas</th>

                </tr>
                </thead>

                <tbody>
                <tr v-for="row in events">
                    <td>{{row.model}}</td>
                    <td>{{row.power}}</td>
                    <td>{{row.wheels}}</td>



                </tr>
                </tbody>
            </table>
        </div>

        <div class="column">


        </div>

    </div>
</template>

<script>



    export default  {
        data(){
            return {
                events: [],

            }

        },
        mounted () {

            this.getvehicles();
        },
        methods:{
            getvehicles()
            {

                let url = '/get_vehicles/';
                this.axios.get(url)
                    .then(res => {
                   // console.log(res)
                    this.events = []
                for (var i = res.data.length - 1; i >= 0; i--) {
                    let vehicle = {}
                    let data = res.data[i]
                    vehicle.id = data.id
                    vehicle.model = data.model
                    vehicle.power = data.power
                    vehicle.wheels = data.wheels

                    this.events.push(vehicle)
                }




            })
            },

        }

    }
</script>

<style scoped>

</style>
