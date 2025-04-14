<h1>Atividade A1 | Programação Campus Videira</h1>

Acadêmico: João Victor Surdi de Melo | Turma: Ciência da Computação 2023 (Campus Videira)


<h2>Proposta do Projeto</h2>

Desenvolver uma aplicação web utilizando apenas PHP puro, estruturada com orientação
a objetos (POO), que permita o registro e autenticação de usuários com persistência de
sessão e cookies, utilizando boas práticas de programação e organização de código.

Esse sistema deverá conter:

  • Cadastro de usuários (nome, e-mail e senha).
  
  • Login com validação de e-mail e senha.
  
  • Exibição de uma área restrita com saudação personalizada.
  
  • Armazenamento do e-mail em cookie, se o usuário optar.
  
  • Logout com destruição da sessão.

<h3>Requisitos Funcionais</h3>

1. Cadastro:

  • Formulário para nome, e-mail e senha.

  • Validação e sanitização dos dados.
  
  • Instanciação de um objeto da classe Usuário.

3. Login:
  
  • Verificação de credenciais em uma estrutura simulada (array).
  
  • Caso sucesso, iniciar sessão e redirecionar.
  
  • Criar cookie se o checkbox “Lembrar e-mail” estiver marcado.

4. Dashboard:

  • Exibir nome do usuário da sessão.

  • Mostrar e-mail salvo no cookie (se existir).

5. Logout:

  • Encerrar sessão e redirecionar para tela de login.

<h4>Estrutura do Projeto</h4>

Estrutura mínima de diretórios esperada:

/classes
  
  - Usuario.php<br>
  
  - Sessao.php<br>
  
  - Autenticador.php<br>

/index.php

/cadastro.php

/processa_cadastro.php

/login.php

/processa_login.php

/dashboard.php

/logout.php

<h5> Orientações para executar localmente </h5>

<p>Requisitos:</p>

 - Php (V. 7.2 ou superior)
 
 - Servidor web compatível (Apache, Nginx ou semelhantes)
 
 - Navegador Web (qualquer)

<p>Como Executar</p>

 - Clone o repositório no localhost do servidor (Exemplo: pasta 'htdocs' no XAMPP | pasta 'www' no Wamp)
 - acesse seu caminho especificado, algo como: localhost/prog3-a1-poo-JoaoVictorSurdi/login.php
 - Cadastre seu usuário com as informações do formulário (deve-se clicar no botão de registrar usuário)
 - Clique em "Voltar para o login" e passe as credênciais que acabou de criar
 - Voilà, se tudo ocorrer como o programado, seu nome e email (caso tenha marcado em lembrar email) estarão informados na tela, com uma mensagem de saudação 
