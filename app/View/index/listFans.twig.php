<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
         .image{
            width: 70px;
            height: 70px;
        }
        .header{
            background-color: black;
            padding: 10px;
        }
        .tabela{
            margin: 70px auto;
        }
    </style>
</head>
<body>
    <header class="p-3 header text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img class="image" src="https://seeklogo.com/images/A/all-blacks-logo-AD5CB3EDA3-seeklogo.com.png" alt="">
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
                    <li><a href="/" class="nav-link px-2 text-white">XML </a></li>
                </ul>
            </div>
        </div>
    </header> 

        <div class="card-body p-0 col-md-10 tabela">
            <div style="float:right" class="mb-2">
                <a href="/export"><button class="btn btn-success">Exportar Planilha</button></a>
            </div>
            <table class="table">
                <thead>
                <tr >
                    <th><strong>Nome</strong></th>
                    <th><strong>E-mail</strong></th>
                    <th><strong>Documento</strong></th>
                    <th><strong>CEP</strong></th>
                    <th><strong>Endereco</strong></th>
                    <th><strong>UF</strong></th>
                    <th><strong>Telefone</strong></th>
                </tr>
                </thead>
                <tbody>
                {% for fan in torcedores %}
                <tr class="table-secondary">
                    <td>{{fan.nome}}</td>
                    <td>{{fan.email}}</td>
                    <td>{{fan.documento}}</td>
                    <td>{{fan.cep}}</td>
                    <td>{{fan.endereco}}</td>
                    <td>{{fan.uf}}</td>
                    <td>{{fan.telefone}}</td>
                <tr>
                {% endfor %}
                </tbody>
            </table>
            
        </div>

</body>
</html>