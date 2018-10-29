<template>
<div class="dark" style="border-radius:1em;">
    <h3 style="text-transform:uppercase; padding-top:1em; font-weight:100; font-family: 'Fira Sans', sans-serif; color:white;">The contest will expire in:</h3>
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
        margin: 10px;
        margin-top:0;
        background-color:#343a40;
    }

    .text {
        color: #b1ddf0;
        font-size: 20px;
        font-weight: 600;
        text-align: center;
    }

    .digit {
        color: #ecf0f1;
        font-size: 40px;
        font-weight: 100;
        margin: 12px;
        text-align: center;
    }
</style>