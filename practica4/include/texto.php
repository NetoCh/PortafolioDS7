<?php 

$spanish = "
    <div class='container'>
        <div class='row'>
            <div class='jumbotron text-center col-md-8 col-md-offset-2'>
                <h1>Formulario de Inscripcion</h1>
                <form action='script.php' method='post' class='row'>
                    <div class='form-group col-md-6' >
                        <label for='nombre'>Nombre:</label>
                        <input type='text' name='nombre' value='' id='nombre' class='form-control' required><br>
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='apellido'>Apellido:</label>
                        <input type='text' name='apellido' value='' id='apellido' class='form-control' required><br>
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='cedula'>Cedula:</label>
                        <input type='text' name='cedula' value='' id='cedula' placeholder='x-xxx-xxxx' class='form-control' required><br>
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='numero'>Numero:</label>
                        <input type='text' name='numero' value='' id='numero' placeholder='xxxx-xxxx' class='form-control' required><br>
                    </div>
                    <div class='form-group col-md-6'>
                        <label>   Turno: </label><br>
                        <label for='diurno' class='radio-inline'><input type='radio' name='turno' value='Diurno' id='diurno' checked>Diurno</label>

                        <label for='vespertino' class='radio-inline'><input type='radio' name='turno' value='Vespertino' id='vespertino'>Vespertino</label>

                        <label for='nocturno' class='radio-inline'><input type='radio' name='turno' value='nocturno' id='nocturno'>Nocturno</label>
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='sede'>Sede:</label>
                        <select name='sede' id='sede' class='form-control'>
                          <option value='Bocas del Toro'>Bocas del Toro  </option>
                          <option value='Coclé'>Coclé</option>
                          <option value='Colón'>Colón</option>
                          <option value='Chiriquí'>Chiriquí</option>
                          <option value='Darién'>Darién</option>
                          <option value='Herrera'>Herrera</option>
                          <option value='Los Santos'>Los Santos</option>
                          <option value='Panamá'>Panamá</option>
                          <option value='Veraguas'>Veraguas</option>
                          <option value='Panamá Oeste'>Panamá Oeste</option>
                        </select><br>
                    </div>
                    <button class='btn btn-primary col-md-4 col-md-offset-4' type='submit' name='submit'>Enviar</button>
                </form>
            </div>
        </div>
    </div>
";

$english = "
    <div class='container'>
        <div class='row'>
            <div class='jumbotron text-center col-md-8 col-md-offset-2'>
                <h1>Inscription form</h1>
                <form action='script.php' method='post' class='row'>
                    <div class='form-group col-md-6' >
                        <label for='nombre'>Name:</label>
                        <input type='text' name='nombre' value='' id='nombre' class='form-control' required><br>
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='apellido'>Last name:</label>
                        <input type='text' name='apellido' value='' id='apellido' class='form-control' required><br>
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='cedula'>ID:</label>
                        <input type='text' name='cedula' value='' id='cedula' placeholder='x-xxx-xxxx' class='form-control' required><br>
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='numero'>CellPhone:</label>
                        <input type='text' name='numero' value='' id='numero' placeholder='xxxx-xxxx' class='form-control' required><br>
                    </div>
                    <div class='form-group col-md-6'>
                        <label>   Shift: </label><br>
                        <label for='diurno' class='radio-inline'><input type='radio' name='turno' value='Diurno' id='diurno' checked>Day</label>

                        <label for='vespertino' class='radio-inline'><input type='radio' name='turno' value='Vespertino' id='vespertino'>Morning</label>

                        <label for='nocturno' class='radio-inline'><input type='radio' name='turno' value='nocturno' id='nocturno'>Night</label>
                    </div>
                    <div class='form-group col-md-6'>
                        <label for='sede'>Location:</label>
                        <select name='sede' id='sede' class='form-control'>
                          <option value='Bocas del Toro'>Bocas del Toro  </option>
                          <option value='Coclé'>Coclé</option>
                          <option value='Colón'>Colón</option>
                          <option value='Chiriquí'>Chiriquí</option>
                          <option value='Darién'>Darién</option>
                          <option value='Herrera'>Herrera</option>
                          <option value='Los Santos'>Los Santos</option>
                          <option value='Panamá'>Panamá</option>
                          <option value='Veraguas'>Veraguas</option>
                          <option value='Panamá Oeste'>Panamá Oeste</option>
                        </select><br>
                    </div>
                    <button class='btn btn-primary col-md-4 col-md-offset-4' type='submit' name='submit'>Send</button>
                </form>
            </div>
        </div>
    </div>
";