### Para iniciar o servidor:
\php -S localhost:(porta desejada);

## Criação do banco de dados:
use o comando <code>Data Import/Restore</code> na aba Administration/Administração.

Para rodar no seu proprio banco de dados altere as variaveis no arquivo config.php no seu host em "$dbhost", nome de usuario em "$dbusername" e com sua senha pessoal em "$dbpassword".

# Adicionando dados:
Na pagina inicial clique em "Adicionar" e você será redirecionado a página add.php, onde é só inserir os dados de nome, matricula e cidade e clicar em enviar. Para voltar ao inicio, clique no botão "voltar ao inicio".

Caso aconteça o erro "Class MySqli not found" renomeie dentro da pasta de instalação do seu PHP procure o arquivo php.ini-development para php.ini e entre no arquivo utilizando o seu Visual Studio Code. Nas linhas 928 onde tem ";extension=mysqli" retire o ";" e na linha 934 onde tem ";extension=pdo_mysql" retire o ";", salve e rode o servidor novamente.
