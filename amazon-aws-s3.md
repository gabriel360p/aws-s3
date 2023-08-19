feito em laravel 9.

Dependências:

serviço amazon-aws-s3 (página oficial do serviço da amazon)
link:
https://us-east-1.console.aws.amazon.com/console/home?region=us-east-1
deve-se criar uma conta (é preciso inserir catão de crédito, por mais que o serviço básico de 5gb seja gratuito)
cria-se um usuário com acesso total (indica-se pela polítca)
desse usuário devemos obter a chave de acesso e chave secreta de acesso.
deve-se criar um bucket que será usado para armazenar
no fim, teremos os dados:
chave de acesso;
chave secreta de acesso;
nome do balde;
essas informações serão colocadas no arquivo .env 
nas linhas 40, 41 (42 só muda se mudar a região do bucket) e 43 serão colocadas informações (AWS_ACCESS_KEY_ID = chave de acesso, = chave secreta de acesso, AWS_BUCKET = nome do balde)

flysystem 3.0 (versão que foi utilzada na hora)
link do repositório:
https://github.com/thephpleague/flysystem-aws-s3-v3
comando a ser dado dentro da pasta do projeto
composer require league/flysystem-aws-s3-v3
em config/app.php
importa-se o provider do aws: Aws\Laravel\AwsServiceProvider::class;
importa-se o aliase: 'AWS' => Aws\Laravel\AwsFacade::class


aws-sdk-php (pacote oficial da amazon)
link do repositório:
https://github.com/aws/aws-sdk-php-laravel
comando a ser dado dentro da pasta do projeto:
composer require aws/aws-sdk-php-laravel
é utilizado para se comunicar com o serviço

certificado ssl curl (certificado de vericação ssl)
link da página de download do certificado
https://curl.se/docs/caextract.html
deve-se baixar e adicionar dentro da pasta php.
é preciso configurar o arquivo php.ini também
procura-se por ;curl.cainfo
deve-se retirar o ;, e especificar o caminho até o certificado ssl, exemplo:
curl.cainfo="C:\Program Files\php-8.2.6\cacert.pem"
