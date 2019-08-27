<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

//adicionado para corrigir o erro ## SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long ##
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //adicionado para corrigir o erro ## SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long ##
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

/*
sobre o erro 1071:

Laravel usa o conjunto de caracteres utf8mb4 por padrão, que inclui suporte para armazenar "emojis" no banco de dados. Se você estiver executando uma versão do MySQL mais antiga do que a versão 5.7.7 ou MariaDB anterior à versão 10.2.2, talvez seja necessário configurar manualmente o comprimento da string padrão gerado pelas migrações para que o MySQL crie índices para elas. Você pode configurar isso chamando o método Schema::defaultStringLength no AppServiceProvider:

 */