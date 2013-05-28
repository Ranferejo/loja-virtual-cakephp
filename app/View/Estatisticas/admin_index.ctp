<?php ?>

<h1>Detalhes técnicos</h1>
<p><strong>Já configurado:</strong></p>
<p>
<ul>
	<li>Cache usa Apc caso esteja disponivel, se não usa File</li>
    <li>Session usa cache em vez de php com checkAgent ligado</li>
    <li>Todos os campos datetime são convertidos par o padrão 'Terça-feira, 21 de Maio de 2013, 11h:21m'.</li>
    <li>Eav pronto para ser usado</li>
</ul>
</p>
<p><strong>Ainda falta:</strong></p>
<p>
<ul>
	<li>Criar um sistema de lembrar senhas!</li>
    <li>Criar configuração de email via banco de dados, ver com o Thiago</li>
	<li>Criar um component de exportação de dados em csv, excel e pdf. Assim vou poder usar em qualquer lugar</li>
    <li>Criar um component de importação de cvs e excel para o banco de dados, o mais genérico possível, para usar em qualquer lugar</li>
    <li>Pensar em um sistema de cadastro de Produtos com campos para personalizar o produto.</li>
</ul>
</p>

<h1>Frontend e renderização CakePHP</h1>
<h2>Frontend</h2>
<p>Essa é minha sugestão para frontend, estou usando Twitter Bootstrap como base, mas sem os icones, estes troquei pelo Font Awesome que traz os icones do bootstrap em versão fonte e ainda muito mais, com o acréscimo de ser uma fonte, ou seja, podemos alterar a cor e não nos limitarmos ao preto padrão.</p>
<p>Também estou usando o Jquery e bootstrap.js, para mantermos um padrão de desenvolvimento acho essencial usar frameworks.</p>

<h2>Renderização</h2>
<p>Para renderizar as páginas estou usando prefixos. Acontece que quando se usa o prefixo admin ele redireciona para o tema da administração (addp/View/Layout/default.ctp), quando se usa o prefixo ajax ele envia para o layout ajax (add/View/Layout/ajax.ctp) ou seja usnado simpelsmente prefixos podemos decidir se ele vai puxar uma informação em ajax, ou se vai ser adminsitração, ou se omitir o prefixo ele vai decidir que é um tema (no caso tema defalt, que fica em app/View/Themed/default/).</p>
<p>Posteriormente quando já tivermos em um estágio mais avançado do sistema, vai ficar fácil localizar as actions que são pertencentes a administração, requisições ajax ou ao frontend da loja.</p>

<h1>Backend</h1>
<p>Note que está primeira página do backend é a Action admin_index do Controller Estatísticas, já que é o que devemos mostrar aqui, junto com uma requisição ajax que traga as atualizações de um rss, para podermos postar novidades para os usuário.s</p>
<p>Vou tentar descrever um pouco sobre cada link do menu acima.</p>
<p>Um detalhe aqui é que teremos que criar um router especial para o frontend, já que não vamos poder usar o formato padrão do cake, o cliente temque ter liberdade de montar seu próprio router através do painel, sendo que /minha-empresa vai para um controller Paginas, /notebook-asus-8gb-memoria-1tb-de-hd para para um controller /Produtos e /notebooks vai para um controller Categorias, não para por ai, ainda podemos ter /notebooks/asus ou seja duas categorias, ou /notebooks/notebook-asus-8gb-memoria-1tb-de-hd uma categoria e um produto, isso vai dar trabalho...kkkk....</p>

<h2>Catálogo</h2>

<h3>Produtos</h3>
<p>Penso em criar um formulário dividido em categorias, não um passo a passo, apenas um divisão de frontend, com css ou javascript ainda vai ser um unico formulário usualmente, mas teremos que criar:</p>
<p>
    <ul>
        <li>Cadastro rápido de categorias</li>
        <li>Cadastro de campos para personalizar o produto</li>
        <li>Separar os produtos por tipo (produto virtual, produto padrão, serviços com cobrança mensal, grupo de produtos...)</li>
        <li>Regras de preço para compras em quantidade</li>
        <li>Regras de preço para grupos de usuários(um atalho para Descontos->clientes)</li>
    </ul>
</p>
<p>Claro que ainda temos os campos padrão, como galeria, nome, peso, seo... mas não preciso citar tudo né</p>

<h3>Categorias</h3>
<p>Aqui é bem simples, um cadastro de categorias com subcategorias infinitas, algumas opções de seo, descrição e imagem de ilustração.</p>

<h3>Fornecedores e fabricantes</h3>
<p>Também bem simples, com seo, descrição, imagem, sei lá...</p>

<h2>Páginas</h2>
<p>Aqui ta todo mundo carimbado de fazer, um sisteminha que crie as páginas e o menu automaticamente, com opção de reordenar.</p>

<h2>Compras</h2>
<p>Aqui fica fácil, um controle do que foi comprado, já foi liberado, já foi pago, se devolvido um controle do valor a ser creditado uma opção de gerar relatórios em pdf, impressão e outros formatos.</p>
<p>Também tem uma sação de mensagens que seria algo como atendimento ao cliente após a compra, sabe, acompanhar as dúvidas do cliente.</p>

<h2>Envio</h2>
<h3>Envio</h3>
<p>Controle do que ainda vai ser enviado, do que foi enviado e alertar o cliente sempre que ouver uma alteração.</p>

<h3>Transportadoras</h3>
<p>Lista das transportadoras e também cadastro de novas, com regras de calculo de valor de acordo com localidade de entrega, peso, tamanho... essas coisas</p>
<p>Também tem que ter uma integração com APIS, como a dos correios, para ser fácil fazer esse tipo de integração, de repente módulos a parte, como em outras lojas.</p>

<h2>Clientes</h2>

<h3>Clientes</h3>
<p>Lista completa com todas as opções de alteração dos dados dos clientes, assim como bloqueio de conta, ips acessados, produtos que mais visitou e comprou e tudo mais</p>

<h3>Endereços</h3>
<p>O cadastro de endereços de clientes, sabe cada cliente pode ter vários endereços, aqui ficará o nosso gerenciamento disso, assim como as opções de exportar</p>

<h3>Grupos</h3>
<p>Aqui será cadastrodo os grupos de clintes como visitantes, cadastros, vips...</p>

<h3>Carrinhos de compra</h3>
<p>Um controle mais refinado do que os clientes compraram, se concretizaram a venda e em que passo pararam...</p>

<h3>Atendimento ao cliente</h3>
<p>aqui ficam todas as mensagens de atendimento que forame enviadas através do site...</p>

<h3>Contatos</h3>
<p>Lista de clientes com suas respectivas formas de contato para ser editada ou exportada...</p>

<h2>Descontos</h2>
<h3>Cumpom</h3>
<p>Cadastro de cupons de desconto</p>

<h3>Carrinho</h3>
<p>Regras de desconto para o carrinho de compra</p>

<h3>Catálodo</h3>
<p>Regras de desconto no catálogo</p>

<h3>Cliente</h3>
<p>Regras de desconto para clientes e grupos de clientes</p>

<h2>Configurar e Estatísticas</h2>
<p>Sem observações aqui ainda, acho que preciso estudar mais para ver esses itens, principalmente estatisticas.</p>
