# POO, Autoload e Namespace

Este exercício tem como intuito destacar a organização de projeto, de classes a serem usadas, interface e um arquivo de configuração. Exercitando tópicos do PHP como namespace, POO e Autoload.

# Arquivos e Pastas
O projeto possui em sua raiz dois arquivos, um de configuração (**config.php**) e outro de interação (onde serão feitas as requisições (**index.php**).

![condfig](https://user-images.githubusercontent.com/84913052/155179901-d1287df7-99b3-48db-8ce9-fc06481e5331.png)
![index](https://user-images.githubusercontent.com/84913052/155179904-eeadfde8-c20b-42dd-b5a5-44ed478e5720.png)

O arquivo de configuração possui uma função autoload para que possa verificar e permitir a necessidade de mais arquivos. Em seguida temos uma pasta de classes onde temos mais duas pastas, a pasta **baseAbstrata** contendo uma interface e uma classe abstrata implementada dessa interface no arquivo **BaseCadastro.php**, sendo base para qualquer objeto criado a partir do arquivo **index.php**.

![base](https://user-images.githubusercontent.com/84913052/155179907-6c7ed618-f0e8-42bc-9991-2cf15600a3e2.png)

 Outra pasta denominada **models** guardando dois arquivos cada um contendo uma classe. O arquivo Cliente.php extende da classe abstrata do arquivo **BaseCadastro**, e o arquivo ClientPremium extendendo de classe clientes caso o cadastro realizado for premium.
 
![cliente](https://user-images.githubusercontent.com/84913052/155179897-d04e7c95-4fce-4f38-84bf-e1ba4140ebf8.png)
![premium](https://user-images.githubusercontent.com/84913052/155179906-e2298617-fbc2-4dcd-8957-94fb17a2951e.png)
