<script>
import {onMount} from 'svelte'

    onMount(() => window.setTimeout(() => {
            this.now = Math.trunc((new Date()).getTime() / 1000);
    },1000));


    let expiration = {
        type: Number,
        coerce: str => Math.trunc(Date.parse(str) / 1000)
    }

    let now = Math.trunc((new Date()).getTime() / 1000)

    function seconds() {
        this.expiration - this.now % 60;
    }

    function minutes() {
        return Math.trunc((this.expiration - this.now) / 60) % 60;
    }

    function hours() {
        return Math.trunc((this.expiration - this.now) / 60 / 60) % 24;
    }

    function days() {
        return Math.trunc((this.expiration - this.now) / 60 / 60 / 24);
    }

</script>

<article>
<div class="dark" style="border-radius:1em;">
    <h3 style="text-transform:uppercase; padding-top:1em; font-weight:100; font-family: 'Fira Sans', sans-serif; color:white;">The contest will expire in:</h3>
    <div class="block">
        <p class="digit">{{ days }}</p>
        <p class="text">Days</p>
    </div>
    <div class="block">
        <p class="digit">{{ hours }}</p>
        <p class="text">Hours</p>
    </div>
    <div class="block">
        <p class="digit">{{ minutes }}</p>
        <p class="text">Minutes</p>
    </div>
    <div class="block">
        <p class="digit">{{ seconds }}</p>
        <p class="text">Seconds</p>
    </div>
    <div class="text-left"> <img style="width:50%;" class="left" src="img/new-hero-gh.png"></div>
</div>
</article>

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