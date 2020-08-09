<main>
    <div class="searchWrapper">
        <form name="search" id="search-input" on:submit|preventDefault={search}>
            <input bind:value={query} style="font-size:18px;" type="search" class="form-input" placeholder="search..." on:keyup="{search}"><button on:click="{clear}">clear</button>
        </form>
    </div>
    {#if results}
        <div class="block" id="results">
            <ul style="padding-left:0;">
                {#each results as result}                
                <li class="block w-100 align-center" style="border-bottom:1px solid #c5c7ca;">
                        <div class="w-20 inline-block align-center"> 
                            <a href="{result.link}">
                                <img src="{result.image}" alt="{result.name}">
                            </a>
                        </div>
                    
                        <div class="m-4 w-80 inline-block align-top">
                            <a href="{result.link}">
                                <p>{result.name}</p>
                            </a>
                            <p>{result.type}</p>
                        </div>
                </li>
                {/each}
            </ul>
        </div>
    {/if}
</main>

<script>
    export let query = '';
    export let results = null;
    export let isLoading = false

    function search() {
        isLoading = true;
        fetch('/api/search?query=' + query.trim())
        .then(response => response.json())
        .then(data => results = data)
        .then(console.log(results))
        }

    function clear() {
        this.query = ''
        this.results = []
        return 'results cleared'
    }
</script>
<style>

</style>