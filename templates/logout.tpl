{if !isset($smarty.session.USER_ID)}
    <div>
        <a aria-current="page" href="login">Login</a>
    </div>
{else} 
    <div>
        <a aria-current="page" href="logout">Logout ({$smarty.session.USER_MAIL})</a>
    </div>
{/if}