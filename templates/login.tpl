{include file="header.tpl"}


<div>
    <h1>Ingresá</h1>
    <form method="POST" action="validate">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" required name="email" aria-describedby="emailHelp" placeholder="email">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" required name="password" placeholder="password" >
        </div>

        {if $error} 
            <div>
                {$error}
            </div>
        {/if}
        <button type="submit">Enviar</button>
    </form>
</div>
{include file="footer.tpl"}
