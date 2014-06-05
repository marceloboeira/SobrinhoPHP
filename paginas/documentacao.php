<style>
    table tr,
    table td
    {
        border: 0px !important;
    }
    .comentario-tabela{
        color:rgb(155,155,155);
    }
</style>
<div class="well row">
    <div class="container">
        <div class="col-xs-2">
            <img class="col-xs-12" src="<?php echo IMG_PATH . 'logo.png'; ?>"/>
        </div>
        <div class="col-xs-10">
            <h1>Sobrinho PHP
                <br />
                <small>Um framework baseado em bootstrap.</small>
            </h1>
            <p>
                Visite o nosso projeto no <a href="https://github.com/marvin52/SobrinhoPHP" target="_blank">Github</a>
            </p>
        </div>

    </div>
</div>
<div class="container">

    <div class="row">
        <h2>Documentação
            <br />
            <small>Guia para o usuário de primeira viagem</small>
        </h2>
        <br />
        <hr />
        <h3>Estrutura de arquivos</h3>
        <div class="col-xs-12 well">
            <table class="table table-condensed table-hover">
                <tbody>
                <tr><td width="300px">
                <span><i class="fa fa-folder"></i> arquivos </span><br />
                </td><td>
                <spam class="comentario-tabela" >// Pasta contendo arquivos estáticos</spam>
                </td></tr><tr><td>
                <span style="margin-left:20px"><i class="fa fa-folder"></i> css </span><br /></td><td>
                <spam class="comentario-tabela" >// Pasta com arquivos .css</spam>
                </td></tr>
                <tr><td><span style="margin-left:40px"><i class="fa fa-file-o"></i> bootstrap.min.css </span><br /></td><td>
                <spam class="comentario-tabela" >// Biblioteca CSS bootstrap padrão</spam>
                </td></tr>
                <tr><td><span style="margin-left:40px"><i class="fa fa-file-o"></i> animate.css </span><br /></td><td>
                <spam class="comentario-tabela" >// Biblioteca CSS de animação #Daneden Animate</spam>
                </td></tr>
                <tr><td><span style="margin-left:40px"><i class="fa fa-file-o"></i> font-awesome.min.css </span><br /></td><td>
                <spam class="comentario-tabela" >// Biblioteca de ícones #Fontawesome</spam>
                </td></tr>
                <tr><td><span style="margin-left:20px"><i class="fa fa-folder"></i> fonts </span><br /></td><td>
                <spam class="comentario-tabela" >// Pasta com arquivos fonte</spam>
                </td></tr>
                <tr><td><span style="margin-left:40px"><i class="fa fa-file-o"></i> FontAwesome.otf </span><br /></td><td>
                <spam class="comentario-tabela" >// Ícones e outras fontes #FontAwesome</spam>
                </td></tr>
                <tr><td><span style="margin-left:20px"><i class="fa fa-folder"></i> img </span><br /></td><td>
                <spam class="comentario-tabela" >// Pasta contendo imagens</spam>
                </td></tr>
                <tr><td><span style="margin-left:20px"><i class="fa fa-folder"></i> js </span><br /></td><td>
                <spam class="comentario-tabela" >// Pasta contendo arquivos javascript</spam>
                </td></tr>
                <tr><td> <span style="margin-left:40px"><i class="fa fa-file-o"></i> jquery.min.js </span><br /></td><td>
                <spam class="comentario-tabela" >// Biblioteca Jquery</spam>
                </td></tr>
                <tr><td><span style="margin-left:40px"><i class="fa fa-file-o"></i> bootstrap.min.js </span><br /></td><td>
                <spam class="comentario-tabela" >// Biblioteca bootstrap</spam>
                </td></tr>
                <tr><td><span style="margin-left:20px"><i class="fa fa-folder"></i> less </span><br /></td><td>
                <spam class="comentario-tabela" >// Pasta para arquivos .less</spam>
                </td></tr>
                <tr><td><span style="margin-left:20px"><i class="fa fa-folder"></i> scss </span><br /></td><td>
                <spam class="comentario-tabela" >// Pasta para arquivos .scss</spam>
                </td></tr>
                <tr><td><span style="margin-left:20px"><i class="fa fa-folder"></i> uploads </span><br /></td><td>
                <spam class="comentario-tabela" >// Pasta para uploads</spam>
                </td></tr>
                <tr><td> <span style="margin-left:20px"><i class="fa fa-folder"></i> videos </span><br /></td><td>
                <spam class="comentario-tabela" >// Pasta para vídeos</spam>
                </td></tr>
                <tr><td> <span><i class="fa fa-folder"></i> biblioteca </span><br /></td><td>
                <spam class="comentario-tabela" >// Classes e funções</spam>
                </td></tr>
                <tr><td><span style="margin-left:20px"><i class="fa fa-file-o"></i> bancodedados.php </span><br /></td><td>
                <spam class="comentario-tabela" >// Conecta banco de dados mysql</spam>
                </td></tr>
                <tr><td><span style="margin-left:20px"><i class="fa fa-file-o"></i> configura.php </span><br /></td><td>
                <spam class="comentario-tabela" >// Configurações padrão</spam>
                </td></tr>
                <tr><td><span style="margin-left:20px"><i class="fa fa-file-o"></i> funcoes.php </span><br /></td><td>
                <spam class="comentario-tabela" >// Funções</spam>
                </td></tr>
                <tr><td><span><i class="fa fa-folder"></i> paginas </span><br /></td><td>
                <spam class="comentario-tabela" >// Pasta contendo principais páginas do sistema</spam>
                </td></tr>
                <tr><td><span style="margin-left:20px"><i class="fa fa-file-o"></i> documentacao.php </span><br /></td><td>
                <spam class="comentario-tabela" >// Arquivo exemplo</spam>
                </td></tr>
                <tr><td> <span><i class="fa fa-file-o"></i> index.php </span><br />
                    </td><td>
                <spam class="comentario-tabela" >// Arquivo principal do sistema</spam>
                </td></tr>



                </tbody>
            </table>





        </div>
        <br />
        <br />
        <hr />
        <h3> Funções 
            <br />
            <small>Funções e sua aplicação</small>
        </h3>
        <br />
        <h4>cria_galeria()</h4>
        <p>Esta função recebe como parametro o(s) nome(s) da(s) imagem(s) que você deseja colocar na sua galeria carousel. Aceita uma ou mais imagens como parametro.</p>
        <p>As imagens escolhidas deverão estar dentro da pasta <b>arquivos/img/</b>, caso contrário elas não serão encontradas pela função. Exemplo:</p>
        <pre>
            <b> &lt;?php</b>
                       <b> cria_galeria(</b>'1.jpg','2.jpg','3.jpg'<b>);</b>
                <b>?&gt;</b>
        </pre>
        <div>
           <?php
                        cria_galeria('1.jpg','2.jpg','3.jpg');   
            ?>
        </div>
    </div>

</div>
