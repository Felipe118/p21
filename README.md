# TESTE P21 - All Balck

## Instruções para instalar na sua maquina

1 - Faça clone do projeto git clone https://github.com/Felipe118/p21.git <br>
2 - Renomeio o arquivo .enx-example para .env e dentro dele coloque as credencias do seu banco de dados MySQL <br>
2 - verifique no php.ini se as extensões extension=fileinfo extension=gd2 estão habilitadas no caso do windows <br>
3 - caso for linux instalar ```sudo apt-get install php7.4-gd sudo apt-get install php7.4-intl sudo apt-get install php7.4-xsl``` <br>
4 - execulte o comando ``` composer install ```
5 - abra projeto na pasta raiz utilizando servidor embutido do PHP ``` php -S localhost:8080 ```;