<template>
    <div>
        <p>{{ now }}</p>
        <p>{{ elapsed }}</p>
        <p>{{ debt }}</p>
    </div>
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
            now: 'loading...',
            elapsed: 'loading...',
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
                    that.now = response.data.now;
                    that.elapsed = response.data.elapsed + '秒経過';
                    that.debt = response.data.debt + '円';
                })
                .catch(error => {
                    console.log(error);
                });
        }, 1000);
    },
}
</script>