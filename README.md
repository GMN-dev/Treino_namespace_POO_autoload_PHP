# POO, Autoload e Namespace

Este exercício tem como intuito destacar a organização de projeto, de classes a serem usadas, interface e um arquivo de configuração. Exercitando tópicos do PHP como namespace, POO e Autoload.

# Arquivos e Pastas
O projeto possui em sua raiz dois arquivos, um de configuração (**config.php**) e outro de interação (onde serão feitas as requisições (**index.php**).



O arquivo de configuração possui uma função autoload para que possa verificar e permitir a necessidade de mais arquivos. Em seguida temos uma pasta de classes onde temos mais duas pastas, a pasta **baseAbstrata** contendo uma interface e uma classe abstrata implementada dessa interface no arquivo **BaseCadastro.php**, sendo base para qualquer objeto criado a partir do arquivo **index.php**.



 Outra pasta denominada **models** guardando dois arquivos cada um contendo uma classe. O arquivo Cliente.php extende da classe abstrata do arquivo **BaseCadastro**, e o arquivo ClientPremium extendendo de classe clientes caso o cadastro realizado for premium.
