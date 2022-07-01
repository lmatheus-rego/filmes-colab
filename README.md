# filmes-colab
A aplicação é uma mini plataforma colaborativa de catálogo de filmes, permitindo ao usuário visualizar os filmes adicionados, cadastrar novos filmes (Titulo, Sinópse e Imagem) bem como visualizar detalhes destes.

Foi desenvolvida seguindo os padrões de projetos de Design Pattern Singleton e Data Access Object - DAO, em PHP 7.4.26, MYSQL 8.0.27 utilizando Bootstrap v5.2.0 para o CSS e JS;

Obs: Para o devido funcionamento da aplicação é necessário: 

* Alterar o valor da variavel "$caminho" no arquivo "config.php", para o diretorio local correspondente;
* Redefinir as credenciais de conexão ao banco de dados na classe "conexão.php" na pasta "routes", para as credenciais locais correspondentes;
* Recomenda-se alterar o valor do upload_max_filesize do PHP para 4M ou mais para não haver problemas no upload de imagens à aplicação

Alguns prints da aplicação:

Index:
![Captura de tela 2022-07-01 151144](https://user-images.githubusercontent.com/56084002/176956141-1e4d2899-8eea-4593-a1ac-4b411bb0a791.png)
![mousehouver](https://user-images.githubusercontent.com/56084002/176956764-a3def8aa-30de-4f5f-8561-f69eb0d7cecf.jpg)


Adicionar Filme:

![Captura de tela 2022-07-01 151259](https://user-images.githubusercontent.com/56084002/176956427-96057232-e090-4fbe-9c47-5b30b67ca102.png)
![Captura de tela 2022-07-01 151351](https://user-images.githubusercontent.com/56084002/176956432-ccb3a6e2-a4c0-4edc-8480-ba21a42cc899.png)

Detalhes do filme:

![Captura de tela 2022-07-01 151425](https://user-images.githubusercontent.com/56084002/176956450-d1c5b405-ff67-48cc-8f01-a7b49e5e0099.png)
