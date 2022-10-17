{include file="header.tpl"}

    {foreach from=$careers item=$career}
        <form method="POST" action="editCareers/{$career->id}">
        <label> Carrera:</label>
        <input type="text" name="career" value='{$career->carrera}' required>
        <label> Duracion:</label>
        <input type="text" name="duration" value='{$career->duracion}' required>
        <label> Sede:</label>
        <input type="text" name="sede" value='{$career->sede}' required>
        {/foreach}
    <input type="submit">
</form>