
{if isset($smarty.session.USER_ID)}
    <h1 class="title-list"> Agregar Alumno:</h1>
    <div class="form-div">
        
        <form action="addStudent" method="POST" class="my-4" id="form">
            <div class="row">
                <div class="col-9">
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input name="name" type="text" class="form-control">
                        <label>Edad:</label>
                        <input name="age" type="number" class="form-control">
                        <label>Dni:</label>
                        <input name="dni" type="number" class="form-control">
                        <label>Carrera:</label>
                        
                        <select name="SelectCareer" class="form-select">
                            {foreach from=$careers item=$career}    
                                <option value="{$career->id_carrera}">{$career->carrera}</option>               
                            {/foreach}
                        </select> 
                    </div>
                </div>

                
                    <div class="form-group">
                        
                        
                    </div>
                
            </div>  
            <button type="submit" class="btn btn-primary mt-2">Agregar</button>
        </form>
    </div>
{/if}