<script>
import players from '../players';
</script>


<main>
    <div class="m-4">
        <div class="bg-red-100 border-1 border-solid border-red-800 p-2 m-4 rounded-sm">
            <h1 class="pb-2">Start a New Game</h1>
            <button class="btn-blue" onclick="{() => {window.location.href = '/potluck';}}">Start!</button>
        </div>
        <div class="block">
            <form class="w-full m-4 max-w-sm">
                <select name="activePlayers">
                    {#each players as player }
                    <option value={player}> {player.name} </option>                            
                    {/each}
                </select>
                {#each players as player }
                <div class="flex items-center border-b border-b-2 border-blue-500 py-2 mb-1">
                    <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Player Name" aria-label="Full name" />
                    <button class="flex-shrink-0 bg-blue-500 hover:bg-blue-700 border-blue-500 hover:border-blue-700 text-sm border-4 text-white py-1 px-2 rounded" type="button">
                    Sign Up
                    </button>
                    <button class="flex-shrink-0 border-transparent border-4 text-blue-500 hover:text-blue-800 text-sm py-1 px-2 rounded" type="button">
                    Cancel
                    </button>
                </div>
                <div class="block relative w-60">
                    <input type="radio"  name="playerType"  id="playerTypeBot"
                    value="small"  checked="checked" />
                        <label for="bot">Bot</label>                           
                        <input type="radio"  name="playerType"  id="playerTypeHuman"
                    value="medium" />
                        <label for="human">Human</label>
                </div>
                {/each}
            </form>    
        </div>  
    </div>
</main>