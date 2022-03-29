# CRUD API feito em laravel manipulando dados/registros de produtos.
- Criar um banco de dados chamado <code>laravel_api</code> utf8mb4_unicode_ci
- Baixe o composer
- Puxe o projeto laravel_api do provedor git.
- Renomeie o arquivo <code>.env.example</code> para <code>.env</code> dentro da raiz do seu projeto e preencha as informações do banco de dados. (o Windows não permite que você faça isso, então você deve abrir seu console cd no diretório raiz do projeto e executar <code>mv .env.example .env</code>)
- Abra o console e use o comando cd na pasta raiz do projeto.
- Execute <code>composer install</code> ou <code>php composer.phar install</code>
- Execute <code>php artisan key:generate</code>
- Execute <code>php artisan migrate</code>
- Execute <code>php artisan db:seed</code>
- Execute <code>php artisan serve</code> 

<h2>Se houver algum problema no projeto, tente esses comandos</h2>

- <code>composer install</code>
- <code>php artisan migrate</code>

<h3>Utilizando</h3>

- Use o Postman para testar a API.
- Header (KEY = Accept , Value = application/json)

1. Pegar registros
    - URL: http://127.0.0.1:8000/api/products/   pode ou não especificar o id no final para pegar o registro especifico
    - Method: GET

2. Inserir registros
    - URL: http://127.0.0.1:8000/api/products/
    - Method: POST
    - Na aba body coloque as chaves a seguir, e os valores na frente. 
      - name
      - description
      - price

3. Atualizando registros
    - URL: http://127.0.0.1:8000/api/products/1  Coloque o id desejado no final, aqui como exemplo esta o id 1
    - Method: PUT
    - Especifique as modificações na aba body

4. Deleção de registros
    - URL: http://127.0.0.1:8000/api/products/2  Coloque o id desejado no final, aqui como exemplo esta o id 2
    - Method: DELETE
