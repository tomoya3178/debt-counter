<template>
    <p>{{ debt }}</p>
</template>

<script>
const axios = require('axios');

export default {
    mounted: function() {
        this.debtCount();
        setInterval(this.debtCount, 1000);
    },
    data: function() {
        return {
            debt: '',
        };
    },
    methods: {
        debtCount: function() {
            axios.get('/index/debtCount')
                .then(re => {
                    console.log(re.debt);
                    this.debt = re.debt;
                }).catch( error => { console.log(error); });
        }
    }
}
</script>