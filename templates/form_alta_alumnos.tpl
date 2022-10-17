
{if isset($smarty.session.USER_ID)}
    <h1> Agregar Alumnos </h1>
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
                </div>
            </div>

            <div class="col-3">
                <div class="form-group">
                    <label>Carrera:</label>
                    <select name="career" class="form-control">
                        <option value="1">Ingeniería En Sistemas</option>
                        <option value="2">TUDAI</option>
                        <option value="3">TUARI</option>
                        <option value="4">Prof. de Informática</option>
                        <option value="5">Prof. de Física</option>
                        <option value="6">Abogacía</option>
                    </select>
                </div>
            </div>
        </div>  
        <button type="submit" class="btn btn-primary mt-2">Agregar</button>
    </form>
{/if}