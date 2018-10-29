<template>
<div class="dark">
    <div class="block">
        <p class="digit">{{ days | two_digits }}</p>
        <p class="text">Days</p>
    </div>
    <div class="block">
        <p class="digit">{{ hours | two_digits }}</p>
        <p class="text">Hours</p>
    </div>
    <div class="block">
        <p class="digit">{{ minutes | two_digits }}</p>
        <p class="text">Minutes</p>
    </div>
    <div class="block">
        <p class="digit">{{ seconds | two_digits }}</p>
        <p class="text">Seconds</p>
    </div>
</div>
</template>

<script>
    export default {
        mounted() {
            window.setInterval(() => {
                this.now = Math.trunc((new Date()).getTime() / 1000);
        },1000);
        },

        props : {
            initial_expiration: {
                type: Number,
                coerce: str => Math.trunc(Date.parse(str) / 1000)
        }
    },

    data() {
        return {
            expiration: this.initial_expiration,
            now: Math.trunc((new Date()).getTime() / 1000)
        }
    },
    computed: {
        seconds() {
            return (this.expiration - this.now) % 60;
        },

        minutes() {
            return Math.trunc((this.expiration - this.now) / 60) % 60;
        },

        hours() {
            return Math.trunc((this.expiration - this.now) / 60 / 60) % 24;
        },

        days() {
            return Math.trunc((this.expiration - this.now) / 60 / 60 / 24);
        }
    }
    }

</script>
<style>
    .block {
        display: inline-block;
        flex-direction: column;
        margin: 20px;
        background-color:#343a40;
    }

    .text {
        color: #1abc9c;
        font-size: 20px;
        font-weight: 600;
        text-align: center;
    }

    .digit {
        color: #ecf0f1;
        font-size: 40px;
        font-weight: 100;
        margin: 10px;
        text-align: center;
    }
</style>