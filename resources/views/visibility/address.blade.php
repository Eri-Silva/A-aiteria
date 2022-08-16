<!DOCTYPE html>
<html lang="en">
<head>
	<title>Endereço</title>
</head>
<body>
    <h1>Forneça seu endereço</h1>
    <form action="{{url('/datasheet')}}" method="POST">
        @csrf
        <div class="row m-3">
            <label for="task" class="label">Nome Completo</label>
            <div class="col">
                <input class="form-control" type="text" name="task" id="task">
            </div> 
            <div class="row m-3">
                <label for="task" class="label">Bairro</label>
                <div class="col">
                    <input class="form-control" type="text" name="task" id="task">
                </div>  
                <div class="row m-3">
                    <label for="task" class="label">Rua ou Logradouro</label>
                    <div class="col">
                        <input class="form-control" type="text" name="task" id="task">
                    </div>                                                      
                </div>
                <div class="row m-3">
                    <label for="task" class="label">Número da Residência</label>
                    <div class="col">
                        <input class="form-control" type="text" name="task" id="task">
                    </div> 
                    <div class="row m-3">
                        <label for="task" class="label">Celular</label>
                        <div class="col">
                            <input class="form-control" type="text" name="task" id="task">
                        </div> 
                        
                        <div class="row m-3">
                            <div class="d-grid justify-content-end">
                                <button type="submit" class="btn btn-success btn-sm btn-block">Enviar</button>
                            </div>
                        </div> 
                    </form>

                    
                </body>
                </html>