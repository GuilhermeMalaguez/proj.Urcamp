# Projeto VarzeaCup
![varzeacup](/readme/varzeacup.png)
desafio feito pela Urcamp para testar nosso conhecimentos.

## Indice
- <a href="#funcionalidades-do-projeto"> funcionalidades do projeto</a>
- <a href="#layout"> Layout</a>
- <a href="#tecnologias-usadas"> tecnologias usadas</a>
- <a href="#-como-rodar-o-projeto"> Como rodar o projeto</a>
- <a href="#-Proximos passos"> Proximos passos</a>

## Funcionalidades do Projeto
- [x] Ter telas para listagem, cadastro, edição e exclusão de times e partidas. Deve conter regras de validação
para campos que forem requeridos.
- [ ] Ter uma tela que mostra a classificação atual do campeonato. Onde deve constar a posição do time,
nome do time, pontuação, quantidade de partidas jogadas, quantidade de vitórias, empates e derrotas.

- [ ] A classificação deve ser ordenada pela maior pontuação, seguido da quantidade de partidas jogadas,
suas vitórias, empates e derrotas. Tente utilizar a montagem da mesma utilizando apenas SQL.
Observação: Vitória vale 3 pontos, empate 1 e derrota 0.

- [x] A partida deve constar a data e hora que ocorrerá e qual é a rodada da partida.

- [x] O layout da aplicação deve ser feito com HTML e CSS. Não deve ser utilizado frameworks de css (ex.:
bootstrap) e/ou pré-processadores como o sass. De preferência por um layout minimalista.

- [x] O backend da aplicação deve ser desenvolvido com PHP v7.4+, evite usar framework, se mesmo assim
quiser, de preferência pelo Laravel e justifique o porquê decidiu utilizar um.

- [x] Os dados do campeonato devem ser armazenados em um banco relacional como o MySQL e/ou
PostgreSQL.

- [ ] Adicionar tela para listagem, criação, edição e exclusão de usuários.

- [x] Criar uma tela de login para autenticação, e, as rotas da aplicação liberar apenas para usuários logados.
- [ ] A tela de classificação é a única que deve ser sempre pública (para logados e não logados). A mesma
deve ter um link na tela de login para usuários não logados terem acesso.
- [ ] Desenvolver a aplicação separando o backend como sendo uma API utilizando o framework Laravel. E
no frontend utilizar React/Vue e consumir a API com alguma library (ex.: axios) 
- [ ] Deve conter o arquivo SQL para criação do banco de dados. Caso tenha utilizado migrations o mesmo
pode ser desconsiderado.


## Layout 
![loginecadastro](/readme/loginecadastro.png)

![cadastrodetimes](/readme/cadastrodetimes.png)

![cadastrodepartidas](/readme/tabeladepartidas.png)
## Tecnologias usadas
[xampp](https://www.apachefriends.org/pt_br/index.html) => para conseguir um servidor proprio e um banco de dados MySQL

[VisualStudio](https://code.visualstudio.com/ ) => para escrever as linhas de codigo
## Como rodar o projeto
- sera necessario fazer um clone do projeto
- depois de baixar e instalar o xampp
- clique em start no apashe e no MySQL
- na barra de endereços ou barra de URL coloque o seguinte endereço (http://localhost/ProjetoURCAMP/login/index.php)

## Proximos passos
De todas as atividades propostas pelo desafio as que consegui estudar e entender efetivamente foram as que conclui como mostro na area de <a href="#funcionalidades-do-projeto"> funcionalidades do projeto</a>, porem pretendo finalizar todos os desafios.

E como este foi bem completo, pretendo seguir trabalhando nele e estudando as tecnologias que ainda não tenho o dominio para concluir as etapas. 

Posteriormente pretendo colocar este projeto no meu portfolio assim que considerar ele concluido.
