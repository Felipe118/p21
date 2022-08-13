<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>All Black</title>
    <style>
        .image{
            width: 70px;
            height: 70px;
        }
        .header{
            background-color: black;
            padding: 10px;
        }
        .mensagem{
            font-size:1.2rem;
            font-weight:bold;
        }
        .form{
            box-shadow: 5px 5px gray;
            padding: 1.2rem;
            margin:100px auto;
            background-color:#CBC0BE;
            border-radius:10px;
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
                    <li><a href="/P21/list" class="nav-link px-2 text-white">Torcedores </a></li>
                </ul>
            </div>
        </div>
    </header> 
    
    <section>
        <form action="/P21/store" class="col-7 form" method="POST" enctype="multipart/form-data">
            <div class="form-group col-10 mb-3 ">
                <label class="form-label" for="">Upload Arquivo XML</label>
                <input type="file" name="arquivo" class="form-control">
            </div>  
            
            {% if mensagem is defined %}
            <div class="mb-4 mensagem">
                {{mensagem}}
            </div>
             
            {% endif %}
            <br>
            <button class="btn btn-primary">Salvar</button>
           
        </form>
    </section>
</body>
</html>