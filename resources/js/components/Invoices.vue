<script>
var Vue = require('vue');
var axios = require('axios');

export default {
    props: {
        initial_invoices: Array,
    },
    data() {
        return {
            baseUrl: '/invoices',
            invoices: this.initial_invoices
        }
    },
    methods: {
        getInvoices() {
            axios.get(baseUrl)
            .then( response => {
                return Promise.resolve(response)
            })
            .catch(error =>{
                return Promise.reject(error)
            })
        }
    }
}

</script>

<template>

<div class="container">
    <div class="container"><h3>Work in progress</h3></div>
    <div class="row">
        <div class="col-md-12">
            <div class="row" v-for="invoice in invoices">
                <div class="col-md-12">
                    {{invoice.created_at}} - total: ${{ invoice.total }} - <span v-for="pack in invoice.seed_packs" v-bind:key="pack">{{ pack.id}} quantity:{{pack.pivot.quantity}}</span>
                </div>
                <div class="row">
                <div class="col-md-12">
                    {{invoice}}</span>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>


