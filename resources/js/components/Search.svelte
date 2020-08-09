<script>
    import { fade, fly } from 'svelte/transition'
    export let query = '';
    export let results = [];
    
    function search() {
        fetch('/api/search?query=' + query.trim())
        .then(response => response.json())
        .then(data => results = data)
        }

    function clear() {
        query = ''
        results = []
    }
</script>

<main>
    <div class="searchWrapper flex flex-row">
        <div class="flex-1">
            <form  name="search" style="" id="search-input" on:submit|preventDefault={search}>
                <input style="font-size:18px; border-top-right-radius:0; border-bottom-right-radius:0;" 
                    name="search" 
                    bind:value={query} 
                    type="search" class="form-input" 
                    placeholder="search..." on:update="{search}" on:keyup="{search}" autofocus
                    >
                <label class="my-2" for="search">&nbsp;</label>
            </form>
        </div>
        <div class="flex-1">
            <button style="border-top-left-radius:0; border-bottom-left-radius:0;" class="btn-blue" on:click="{clear}">clear</button>
        </div>  
    </div>
    {#if results.length > 0}
        <div class="block" id="results">
            <ul style="padding-left:0;">
                {#each results as result}                
                <li in:fly="{{ x: 200, duration: 400 }}" out:fade class="block w-100 align-center" style="border-bottom:1px solid #c5c7ca;">
                        <div class="m-2 w-20 inline-block align-center"> 
                            <a href="{result.link}">
                                <img class="rounded-sm" src="{result.image}" alt="{result.name}">
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
    {:else if query.length > 2 && results.length === 0}
    <div class="block" id="results">
        We did not find a damn thing. Check your spelling, or check my head?
    </div>
    {:else}
    <div class="block" id="results">
      Try searching for stuff!
    </div>
    {/if}
</main>

<style>

</style>