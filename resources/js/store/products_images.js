import 'vue-resource';
import Vue from 'vue';
import CONFIG from '../services/indexConfig'


const state ={
    customers: [],
};

const mutations = {
     set(state, customers){
         state.customers = customers;
     },

}

const actions = {
      query(context){
          Vue.http.get(`${CONFIG.API_URL}/home`).then(response => {
                context.commit('set',response.data);
          });
      },
}

const module = {
    namespaced: true,
    state,mutations,actions
};

export default module;
