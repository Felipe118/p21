<?php
    namespace App\Controller;

    use App\Config\Container;
    use App\Config\Controller;

    class XmlController extends Controller
    {
        public function index()
        {
            return $this->view('index.xmlupload');
        }

        public function store()
        {
         
            $xmlModel = Container::getModel('Xml');
          
            
            if($_FILES['arquivo']['type'] == 'text/xml'){
                $path = $_FILES['arquivo']['tmp_name'];
                $xml = simplexml_load_file($path);
                $xmlModel->saveXml($xml);
                $mensagem = 'Arquivo Salvo com sucesso';
            }else{
                $mensagem = 'Erro arquivo precisa ser do tipo XML';
            }

            return  $this->view('index.xmlupload',[
                'mensagem' => $mensagem
            ]);
            
        }

        public function list()
        {
            $torcedores = Container::getModel('Torcedores');
            $fans = $torcedores->listFans();

            return  $this->view('index.listFans',[
                'torcedores' => $fans
            ]);
        }
    }


?>