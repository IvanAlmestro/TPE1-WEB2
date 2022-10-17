{if isset($smarty.session.USER_ID)}
<h1>Agregar Carrera</h1>
<form action="addCareer" method="POST" class="my-4" id="form">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Carrera:</label>
                <input name="career" type="text" class="form-control">
                <label>Duracion</label>
                <input name="duration" type="text" class="form-control">
                <label>Sede</label>
                <input name="sede" type="text" class="form-control">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Agregar</button>
</form>
{/if}