{include file="header.tpl"}

    {foreach from=$students item=$student}
        <form method="POST" action="editStudent/{$student->id}">
        <label> Nombre:</label>
        <input type="text" name="nameEdit" value='{$student->nombre}' required>
        <label> Edad:</label>
        <input type="number" name="ageEdit" value='{$student->edad}' required>
        <label> Dni:</label>
        <input type="number" name="dniEdit" value='{$student->dni}' required>
    {/foreach}