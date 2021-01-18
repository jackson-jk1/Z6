
<template>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4-sm-6">
                <div>
                    <select id="target" class="form-control w-100" name="ELO1" @change="onChange($event)" >
                        <option v-for="customer in customers[0]" v-bind:value="customer" >
                            {{ customer }}
                        </option>
                    </select>

                        <div>
                            <img id="image_to" class=" w-100" src="http://localhost:8000/storage/elos/iron_iv.png">
                        </div>

                    <select id="target2" class="form-control w-100" name="DV1" @change="onChange($event)">
                        <option v-for="customer in customers[1]" v-bind:value="customer">
                            {{ customer }}
                        </option>
                    </select>
                </div>
            </div>
                <div class="col-md-4-sm-6">
                    <div>
                    <select id="target3" class="form-control w-100" name="ELO2" @change="onChange($event)" >
                        <option v-for="customer in customers[0]" v-bind:value="customer" >
                            {{ customer }}
                        </option>
                    </select>
                        <div>
                            <img id="image_from" class=" w-100" src="http://localhost:8000/storage/elos/iron_iv.png">
                        </div>
                    <select id="target4" class="form-control w-100" name="DV2" @change="onChange($event)">
                        <option v-for="customer in customers[1]" v-bind:value="customer">
                            {{ customer }}
                        </option>
                    </select>
                    </div>
                </div>
            </div>
        <div class="row justify-content-center mt-5">
            <h3><span id="mensagem"> R$ : 0.00 </span></h3>
        </div>
    </div>

</template>

<style>
#target, #target2,#target3,#target4{   -webkit-appearance: none;
    margin-top: 40px;
    -moz-appearance: none;
    appearance: none;
    border:1px solid #ddd;
    font-size: 1.2em;
    height: 40px;
}
#image_to,#image_from{
    height: 240px;
}
#mensagem{
    padding: 5px;
    font-size: 2em;
    text-align: center;
}
</style>
<script>

import store from "../../store/store";
import CONFIG from "../../services/indexConfig";
export default {
    props: ['products'],


    computed: {

        customers() {

            return store.state.products_images.customers
        },
    },
        mounted() {
            store.dispatch('products_images/query');

        },

    methods: {
        onChange(event) {
            var ELO1 = $("#target option:selected").val();
            var DV1 = $("#target2 option:selected").val();
            var ELO2 = $("#target3 option:selected").val();
            var DV2 = $("#target4 option:selected").val();
                $.ajax({
                method: "GET",
                url: "home/sum",
                data:{
                    ELO1,DV1,ELO2,DV2
                },
                success: function(data){
                    if (data == 0) {
                        $("span#mensagem").html('');
                        $("span#mensagem").css('background', '#fff');
                        $("span#mensagem").css('color', 'red');
                        $("span#mensagem").html('Selecione Um Elo Valido');

                    }else{
                    $("h3#alert").html('');
                    $("span#mensagem").css('background', '#1d643b','color', '#fff');
                    $("span#mensagem").css('color', '#fff');
                    $("span#mensagem").html('R$: ' + data.sum);
                    $("img#image_to").attr('src', `${CONFIG.API_URL}` + '/storage/' + data.image_to);
                    $("img#image_from").attr('src', `${CONFIG.API_URL}` + '/storage/' + data.image_from);
                    $("input#modal_to").attr('value', ELO1 + ' ' + DV1);
                    $("input#modal_from").attr('value', ELO2 + ' ' + DV2);}}
            })
        }
    },
}
</script>

