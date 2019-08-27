URL do projeto no virtualhost: http://laravel-carrinho-compras.com/carrinho

no arquivo da migration de password reset o item "token" está como index no projeto "deles"


como corrigir erro 1071 de base de dados:

Laravel usa o conjunto de caracteres utf8mb4 por padrão, que inclui suporte para armazenar "emojis" no banco de dados. Se você estiver executando uma versão do MySQL mais antiga do que a versão 5.7.7 ou MariaDB anterior à versão 10.2.2, talvez seja necessário configurar manualmente o comprimento da string padrão gerado pelas migrações para que o MySQL crie índices para elas. Você pode configurar isso chamando o método Schema::defaultStringLength no AppServiceProvider:

Edite o arquivo app\Providers\AppServiceProvider.php
Adicione o namespace use Illuminate\Support\Facades\Schema;
Dentro do método boot adicione Schema::defaultStringLength(191);

para utilizar o seeder:

adicionar $this->call(QuotationTableSeeder::class); dentro de run

ou informar a classe

php artisan db:seed --class="QuotationTableSeeder"