<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>
<title>Ejercicio 6</title>
</head>
<body>
    <form method="post" action="post6.php">
        <div class="input-group" style="width: 40% ;margin-left:auto;margin-right:auto;margin-bottom:10px">
            <span class="input-group-text" style="background-color:rgb(109,13,253)">First and last name</span>
            <input type="text" name="nombre" aria-label="First name" class="form-control"required>
            <input type="text" name="apellido" aria-label="Last name" class="form-control"required>
        </div>
        <div class="input-group flex-nowrap "style="width: 40% ;margin-left:auto;margin-right:auto;margin-bottom:10px">
            <span class="input-group-text" id="addon-wrapping" style="background-color:rgb(109,13,253)">DNI</span>
            <input type="number" name="dni" class="form-control" aria-label="Username" aria-describedby="addon-wrapping"required>
        </div>
        <div class="input-group flex-nowrap "style="width: 40% ;margin-left:auto;margin-right:auto;margin-bottom:10px">
            <span class="input-group-text" id="addon-wrapping"style="background-color:rgb(109,13,253)">@</span>
            <input type="email" name="mail" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping"required>
        </div>
        <div class="form-check" style="width: 40% ;margin-left:auto;margin-right:auto;margin-bottom:10px">
            <input class="form-check-input" type="radio" name="sexo" id="exampleRadios1" value="masculino" >
            <label class="form-check-label" for="exampleRadios1">Masculino</label>
        </div>
        <div class="form-check"style="width: 40% ;margin-left:auto;margin-right:auto;margin-bottom:10px">
            <input class="form-check-input" type="radio" name="sexo" id="exampleRadios2" value="femenino">
            <label class="form-check-label" for="exampleRadios2">Femenino</label>
        </div>
        <div class="form-check"style="width: 40% ;margin-left:auto;margin-right:auto;margin-bottom:10px">
            <input class="form-check-input" type="radio" name="sexo" id="exampleRadios3" value="otro">
            <label class="form-check-label" for="exampleRadios3">Otro</label>
        </div>
        <div class="input-group" style="width: 40% ;margin-left:auto;margin-right:auto;margin-bottom:10px">
            <span class="input-group-text" style="background-color:rgb(109,13,253)">Calle y numero</span>
            <input type="text" name="calle" aria-label="Calle" class="form-control"required>
            <input type="number" name="numero" aria-label="numero" class="form-control"required>
        </div>
        <select class="form-select form-select-lg mb-3" name ="viveEn" aria-label=".form-select-lg example"style="width: 40% ;margin-left:auto;margin-right:auto;margin-bottom:10px">
            <option selected value="">Si no vive en casa..</option>
            <option value="Piso">Piso</option>
            <option value="Departamento">Departamento</option>
            <option value="Torre" >Torre</option>
        </select>
        <div class="input-group mb-3"style="width: 40% ;margin-left:auto;margin-right:auto;margin-bottom:10px">
            <span class="input-group-text" id="basic-addon1"style="background-color:rgb(109,13,253)">Pais</span>
            <input type="text" class="form-control" name="pais" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-3"style="width: 40% ;margin-left:auto;margin-right:auto;margin-bottom:10px">
            <span class="input-group-text" id="basic-addon1"style="background-color:rgb(109,13,253)">Provincia</span>
            <input type="text" class="form-control" name="provincia"  aria-describedby="basic-addon1" required>
        </div> 
        <div class="input-group mb-3"style="width: 40% ;margin-left:auto;margin-right:auto;margin-bottom:10px">
            <span class="input-group-text" id="basic-addon1"style="background-color:rgb(109,13,253)">Localidad</span>
            <input type="text" class="form-control"  name="localidad" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-3"style="width: 40% ;margin-left:auto;margin-right:auto;margin-bottom:10px">
            <span class="input-group-text" id="basic-addon1"style="background-color:rgb(109,13,253)">Edad</span>
            <input type="number" class="form-control" name="edad" aria-label="Username" aria-describedby="basic-addon1" required min="18">
        </div>
        <select class="form-select form-select-lg mb-3" name="estado" aria-label=".form-select-lg example"style="width: 40% ;margin-left:auto;margin-right:auto;margin-bottom:10px">
            <option selected>Estado civil</option>
            <option value="Soltero" >Soltero</option>
            <option value="Casado">Casado</option>
            <option value="Viudo/a">Viudo/a</option>
        </select>
        <select class="form-select form-select-lg mb-3" name = "hijos" aria-label=".form-select-lg example"style="width: 40% ;margin-left:auto;margin-right:auto;margin-bottom:10px">
            <option selected>Hijos</option>
            <option value="Ninguno">Ninguno</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="+2">+2</option>
        </select>
        
        <label for="Hobbies" style="width: 5% ;margin-left:600px;margin-right:auto;margin-bottom:20px;background-color:rgb(109,13,253);color:white">Hobbies</label> 
        
        <div class="form-check"style="width: 40% ;margin-left:auto;margin-right:auto;margin-bottom:10px">
            <input class="form-check-input" type="checkbox"  name ="hobbies" value="Gimnasio" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Gimnasio</label>
        </div>
        <div class="form-check"style="width: 40% ;margin-left:auto;margin-right:auto;margin-bottom:10px">
            <input class="form-check-input" type="checkbox" name="hobbies" value="Cocinar" id="defaultCheck2">
            <label class="form-check-label" for="defaultCheck2">Cocinar</label>
        </div>
        <div class="form-check"style="width: 40% ;margin-left:auto;margin-right:auto;margin-bottom:10px">
            <input class="form-check-input" type="checkbox" name="hobbies" value="Escuchar musica" id="defaultCheck3">
            <label class="form-check-label" for="defaultCheck3">Escuchar musica</label>
        </div>
        <div class="form-check"style="width: 40% ;margin-left:auto;margin-right:auto;margin-bottom:20px">
            <input class="form-check-input" type="checkbox"  name = "hobbies" value="Leer" id="defaultCheck4">
            <label class="form-check-label" for="defaultCheck4">Leer</label>
        </div>
        <div style="width: 40%;margin-left:600;margin-right:auto;margin-bottom:10px">
            <button class="btn btn-primary" type="submit" >Submit</button> 
        </div>   
    </form>
</body>


