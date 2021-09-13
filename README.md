# teleportal
Sistema de Gerenciamento de Telemarketing =.
### Disclaimer
Programa hospedado em um wordpress, devido a isso talvez não funcione fora do WP e seja necessario algumas modificações;
## Arquiteura de Pastas.
-APP - Contem as paginas acessadas pelo usuario além dos arquivos JS responsaveis pelo controle de(na maior parte) funçoes ajax
    -Agendamento => Pasta com todos os arquivos necessarios para Cadastro, Atualização e Pesquisa sobre     Agendamentos do Telemarketing.
        -js => Pasta que contem os arquivos JS que controlam os ajax de inserção e atualização de agendamentos
    
    -Contato => Pasta com todos os arquivos para Cadastro, Atualização e Pesquisa de Novos Contatos
        -js => TODO
    
    - Controle => Pasta com todos os arquivos para Cadastro, Atualização e Pesquisa de Controles
        -js => TODO

    -Retorno => Pasta com todos os arquivos para Cadastro, Atualização e Pesquisa de Retornos.

    -Vendas => Pasta com todos os arquivos para Cadastro, Atualização e Pesquisa de Novas Vendas.

-config.php => Cria uma Constante de Diretorio chamada 'PATH'
-function.js => Script Geral de Manipulção de Formulario e botoes das paginas principais.
-imports =: Arquivo com todos os imports feitos no html (JquERY, js, CSS, Bootstrap, jQueryMask, JqueruConfirm Data Table).

