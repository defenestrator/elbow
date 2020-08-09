<main>
    <div class="searchWrapper">
        <form name="search" id="search-input" on:submit|preventDefault={search}>
            <input bind:value={query} style="font-size:18px;" type="search" class="form-input" placeholder="search..." on:keyup="{search}">
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
        if(query.length > 2) {
        fetch('/api/search?query=' + query.trim())
        .then(response => response.json())
        .then(data => results = data)
        .then(console.log(results))
        }
        
    }

    function clear() {
        this.query = ''
        this.results = []
        return 'results cleared'
    }
</script>
<style>
.search-results {
    box-shadow:0px 2px 2px #c5c7ca;
    border:1px solid #c5c7ca;
    z-index:101;
    width:96.5%;
    padding:1em;
    border-top:none;
    background:white;
    position:absolute;
    height:auto;
    top:46px;
}
.searchbar-li {
    margin:6px auto;  width:auto; padding: 0 8px;
}
.scrollable-menu .search-results {
    max-height:600px;
}
@media (min-width:768px) {
    .search-results {
        width:550px;
        max-height:750px;
    }
    .searchbar-li {
        width:200px;
    }
}
</style>