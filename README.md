# Website-Creator

Opa, meu nome é Pablo e você provavelmente está aqui por causa do vídeo que você viu no meu canal. Então aqui eu vou te pegar pela mão e te explicar passo a passo o que você tem que fazer para rodar esse criador de sites em sua máquina.

# Sobre o Website-Creator

Esse projeto tem a finalidade de criar um site com apenas 1 clique. Basta colocar as informações do site e pronto, seu site está criado. 
Por enquanto só tem a opção de criar blogs com só 1 tema. Mas como eu falei no vídeo, em um futuro próximo eu irei adicionar as opções de criar e-commerce, portfólios e etc. Também irei adicionar a escolha de vários temas para cada tipo de site.

# Como usar

Primeiro, baixe o projeto aqui mesmo no github como arquivo .ZIP

Então você vai precisar baixar o Xampp. Que é um programa para você hospedar o site em seu computador. Você pode baixar o xampp aqui -> https://www.apachefriends.org/index.html

Depois de baixado, basta você ir na pasta onde está localizado o Xampp(No meu é no Disco Local C:), abir a pasta htdocs, criar uma pasta chamada "Website-Creator" e jogar os arquivos lá.

Agora abra o xampp-control e ative o apache e o MySql.

Abra o google e digite "http://localhost/phpmyadmin/". Se aparecer para adicionar nome de usuário e senha coloque: Usuário: root e deixe a senha VAZIA

Clique em "new" no menu à esquerda e coloque o nome do DB de builder_db e clique em "Criar".
Coloque o nome da tabela de "website", deixe em 4 colunas e clique em "Go".

Na primeira coluna você vai deixar o nome "id" e deixe no tipo "int" com 11 de length, na segunda deixe o nome "title" com o tipo "varchar" com 250 de lenght, na terceira deixe o nome "content" do tipo "text" e na quarta deixe o nome "author" do tipo "varchar" com 250 de lenght. 
Agora clique em "Save"

Pronto. Agora basta digitar no google "http://localhost/Website%20builder/" e usar o site.
