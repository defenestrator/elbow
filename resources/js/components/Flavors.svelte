<script>
    import Tags from 'Tags.svelte'
        
    // If on:tags is defined
    let tag = "";
    
    function handleTags(event) {
        tag = event.detail.tags;
    }
    
    const flavors = []
    </script>
    
    <Tags
        on:tags={handleTags}
        addKeys={[9]}
        maxTags={5}
        allowPaste={true}
        allowDrop={true}
        splitWith={"/"}
        onlyUnique={true}
        removeKeys={[27]}
        placeholder={"Flavors of gustatory ecstacy"}
        autoComplete={flavors}
        name={"custom-name"}
        id={"custom-id"}
        allowBlur={true}
        disable={false}
        minChars={3}
    />
    
    <h4>
        Tags: {tag}
    </h4>
    <hr>