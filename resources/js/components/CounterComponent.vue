<template>
    <p>借金額：{{ debt }}</p>
</template>

<style>
p {
    text-align: center;
    font-size: 50px;
}
</style>

<script>
const axios = require('axios');

export default {
    name: "CounterCompornent",
    data: function() {
        return {
            debt: 'loading...'
        }
    },
    mounted: function() {
        let that = this;
        setInterval(function() {
            axios
                .get('/index/debtCount')
                .then(response => {
                    console.log(response);
                    console.log(response.data);
                    that.debt = response.data + '円';
                })
                .catch(error => {
                    console.log(error);
                });
        }, 1000);
    },
}
</script>