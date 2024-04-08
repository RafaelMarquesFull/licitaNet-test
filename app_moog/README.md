# Case Moog store


O projeto MOOG Store é uma plataforma de comércio eletrônico que utiliza Laravel e Inertia.js como base tecnológica. Ele adota os padrões de design Parceiro DTO, Repositório e Serviço, juntamente com os princípios SOLID, para promover uma arquitetura de código limpa, modular e escalável.

Laravel e Inertia.js: O backend é construído com Laravel, oferecendo uma estrutura robusta para desenvolvimento rápido e seguro. O frontend é baseado em Inertia.js, permitindo a criação de interfaces de usuário dinâmicas sem a necessidade de uma API JSON separada.

Padrão Parceiro DTO: Para transferência eficiente de dados entre as camadas do aplicativo, o projeto utiliza o padrão Parceiro DTO, garantindo coesão e segurança na manipulação de informações.

Padrão Repositório e Inversão de Controle (IoC): O acesso aos dados do banco de dados é abstraído por meio do padrão Repositório, juntamente com o gerenciamento de imagens acompanhado da inversão de controle (IoC), que facilita a manutenção, teste e extensão do sistema.

API REST: Embora a comunicação entre frontend e backend possa ser feita diretamente via Inertia.js, o projeto oferece uma API REST opcional para integração com outros sistemas e serviços externos.

## 🚀 Começando

Essas instruções permitirão que você obtenha uma cópia do projeto em operação na sua máquina local para fins de desenvolvimento e teste.

Consulte **[Implantação](#-implanta%C3%A7%C3%A3o)** para saber como implantar o projeto.

### 📋 Pré-requisitos

De que coisas você precisa para instalar o software e como instalá-lo?

```
composer | nodejsˆ18 | Msql
```

### 🔧 Instalação

Uma série de exemplos passo-a-passo que informam o que você deve executar para ter um ambiente de desenvolvimento em execução.

Clonando Projeto:

```
https://github.com/RafaelMarquesFull/licitaNet-test.git
```

Instalando projeto

```
compose install 
```
```
npm install
```
```
php artisan migrate
```
```
php artisan db:seed
```
  certifique-se de possuir uma versão do node js 18+ 

Termine com um exemplo de como obter dados do sistema ou como usá-los para uma pequena demonstração.

## ⚙️ Informaçoes uteis
- Iniciando o projeto:
```
npm run dev
```
```
php artisan serve
```
- Você pode encontrar uma colection do postman com todas as rotas API Restna pasta WORKSPACE.
- Você também encotrará um modelo entidade relacional do banco de dados EER na pasta WORKSPACE.


```
app_moog/workspace
```

## 🛠️ Construído com

Mencione as ferramentas que você usou para criar seu projeto

* [Laravel 11](https://laravel.com/docs/11.x/) - O framework web usado
* [Inertia React]() - Template
* [Tailwind-CSS]() - estilizaçao
* [MySql]() - banco de dados

## 📌 Versão

Utilizo [GitHub]() para controle de versão. Para as versões disponíveis, observe as [tags neste repositório](https://github.com/RafaelMarquesFull/licitaNet-test). 

## ✒️ Autores
Todos os envolvidos neste projeto:

* **Rafael da silva marques** - *Desenvolvimento* - [RafaelMarquesFull](https://github.com/RafaelMarquesFull)



## 🎁 Expressão de gratidão

* Obrigado pela oportunidade de desmontrar meus conhecimentos e em desenvolvimento embora este projeto ainda não tenha atingido o meu objetivo ainda vou continuamente melhora-lo no decorrer do tempo. 📢;



---