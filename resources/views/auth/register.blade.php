<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Page</title>
</head>
<body>
    <h1>Faça seu registro</h1>

    <form action="{{url('/register')}}" method="POST">
       @csrf
       <div class="row mb-3">
        <label for="email" class="label">Email</label>
        <div class="col">
            <input type="email" class="form-control" placeholder="Digite seu email" id="email" name="email">
        </div>
    </div>
    <div class="row mb-3">
        <label for="password" class="label">Senha</label>
        <div class="col">
            <input type="password" class="form-control" placeholder="Digite seu email" id="password" name="password">
        </div>
    </div>                    
    <div class="row mb-3">
        <div class="d-grid justify-content-end">
            <button type="submit" class="btn btn-success btn-sm btn-block">Entrar</button>
        </div>
    </div>
</form>
</body>
</html>