<select name="carreraEdit">
    {foreach from=$careers item=$career}    
        <option value="{$career->id}">{$career->carrera}</option>               
    {/foreach}
</select> 
    <input type="submit">
</form>