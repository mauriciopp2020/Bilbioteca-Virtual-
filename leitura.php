
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html>
  <head>
<style>

/* FontAwesome for working BootSnippet :> */

@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
#team {
    background: #273457 !important;
}

.btn-primary:hover,
.btn-primary:focus {
    background-color: #108d6f;
    border-color: #108d6f;
    box-shadow: none;
    outline: none;
}

.btn-primary {
    color: #fff;
    background-color: #0c0c0c;
    border-color: #0c0c0c;
}

section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #0c0c0c;
    margin-bottom: 50px;
    text-transform: uppercase;
}

#team .card {
    border: none;
    background:#c9c9c9;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 312px;
}

.backside .card a {
    font-size: 18px;
    color: #235494 !important;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #235494 !important;
}

.frontside .card .card-body img {
    width: 200px;
    height: 310px;
    border-radius: 50%;
}
body{
 background-color: #b39037;   
}

</style>  
</head>
<body>
<!-- Team -->
<section id="team" class="pb-5">
    <div class="container">
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" rounded" src="img/Duna.png" alt="card image"></p>
                                    <h4 class="card-title">Duna</h4>
                                      <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Brévia</h4>
                                    <p class="card-text">Duna é um romance de ficção científica do escritor americano Frank Herbert, publicado originalmente pela editora Chilton Books nos Estados Unidos em 1965. Vencedor do prêmio Hugo de 1966, Duna é considerado o livro de ficção científica mais vendido de todos os tempos. </p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center"  >
                                             <a href="https://trechos.org/wp-content/uploads/2021/01/Duna-1-Frank-Herbert-www.trechos.org_.pdf" class="btn btn-success" role="button" target="_blank">Ler</a>
                                              <a href="https://mega.nz/file/OBwSWD4B#kC4B4l5oStZIZt5VYuTNQ7WRu_hYzKj3mUQJdG06aWs" class="btn btn-danger" role="button" target="_blank">Baixar</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" rounded" src="img/O contrato.png"></p>
                                    <h4 class="card-title">O contrato</h4>
          
                                    <a  href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Brévia</h4>
                                    <p class="card-text">Richard VanRyan é um playboy e executivo tirano que trabalha para uma empresa que visa apenas lucros. Após ser passado para trás por um colega de trabalho, acabou não conseguindo fazer parte da sociedade que tanto queria. Assim, com um plano de se vingar do chefe, decide trabalhar para uma empresa concorrente. </p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                    
                                            <a href="https://trechos.org/wp-content/uploads/2021/09/Livro-%E2%80%98O-Contrato-por-Melanie-Moreland.pdf" class="btn btn-success" role="button" target="_blank">Ler</a>
                                              <a href="https://mega.nz/file/jdgSARxC#hZNjpSE6yfIeLrWoIxetLsuCg6VRlN7aFhTuTBs9zIM" class="btn btn-danger" role="button" target="_blank">Baixar</a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" rounded" src="img/Sniper.jpeg" alt="card image"></p>
                                    <h4 class="card-title">Sniper Americano</h4>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Brévia</h4>
                                    <p class="card-text">O perturbador relato autobiográfico do atirador mais letal da história das forças armadas norte-americanas.
                                     </p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">

                                                 <a href="https://www.intrinseca.com.br/upload/livros/1-%C2%A6CAP_AmericanSniper_ISSUU.pdf" class="btn btn-success" role="button" target="_blank">Ler</a>
                                              <a href="https://www.intrinseca.com.br/upload/livros/1-%C2%A6CAP_AmericanSniper_ISSUU.pdf" class="btn btn-danger" role="button" target="_blank">Baixar</a>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" rounded" src="img/Meditações.png" alt="card image"></p>
                                    <h4 class="card-title">Meditações</h4>
                                    
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Brévia</h4>
                                    <p class="card-text">Meditações é o título de uma série de escritos pessoais do imperador romano Marco Aurélio onde ele apresentou suas ideias sobre a filosofia estoica. Marco Aurélio escreveu os doze livros das Meditações em grego, como uma fonte para sua própria orientação e para se melhorar como pessoa.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                    
                                            <a href="https://teudoc.com/visualizar-livro-813302801130181221.php?p=21397" class="btn btn-success" role="button" target="_blank">Ler</a>
                                              <a href="https://mega.nz/file/nNwSUbBT#nf1ahq3Oi8OMx3YNFLowvyrIHDAD8rV3R6xD0DlIPpI" class="btn btn-danger" role="button" target="_blank">Baixar</a>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" rounded" src="img/mitologia nordica.png" alt="card image"></p>
                                    <h4 class="card-title">Mitologia Nordica</h4>
                                   
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Brévia</h4>
                                    <p class="card-text">Uma jornada da origem do universo até o fim do mundo.
                                     Quem, além de Neil Gaiman, poderia se tornar cúmplice dos deuses e usar de sua habilidade com as palavras para recontar as histórias dos mitos nórdicos? Fãs e leitores sabem que a mitologia nórdica sempre teve grande influência na obra do autor. </p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                    
                                            <a href="https://teudoc.com/visualizar-livro-813302801130181221.php?p=21484" class="btn btn-success" role="button" target="_blank">Ler</a>
                                              <a href="https://mega.nz/file/GYxEmJDR#vjuG3SLExnQS6pihbDD_8Pln9f70VIkxlfiWRsTpj28" class="btn btn-danger" role="button" target="_blank">Baixar</a>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" rounded" src="img/cinzas.jpeg" alt="card image"></p>
                                    <h4 class="card-title">Neves e cinzas</h4>
                                    
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Brévia</h4>
                                    <p class="card-text">UMA GAROTA INCOMPLETA.UMA GUERREIRA FEROZ.UMA HEROÍNA EM CONSTRUÇÃO.Será Meira capaz de salvar um mundo que jamais conheceu?"Uma sociedade inédita, uma aventura grandiosa e um primeiro amor, tudo em uma grande fantasia épica.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                        
                                                   <a href="https://teudoc.com/visualizar-livro-813302801130181221.php?p=21582" class="btn btn-success" role="button" target="_blank">Ler</a>
                                              <a href="https://mega.nz/file/zZpQmRBI#DzL4s2DGesxji1lc0G5r08ADSunD25T9V_srwKZNEgc" class="btn btn-danger" role="button" target="_blank">Baixar</a>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" rounded" src="img/Dom Quixote.png" alt="card image"></p>
                                    <h4 class="card-title">Dom Quixote</h4>
                                    
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Brévia</h4>
                                    <p class="card-text">Dom Quixote de la Mancha é um livro escrito pelo espanhol Miguel de Cervantes. O título e ortografia originais eram El ingenioso hidalgo Don Quixote de La Mancha, com sua primeira edição publicada em Madrid no ano de 1605.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                          
                                                   <a href="https://teudoc.com/visualizar-livro-813302801130181221.php?p=14588" class="btn btn-success" role="button" target="_blank">Ler</a>
                                              <a href="https://mega.nz/file/vQ5AkTSY#MunpyAyvbt4_3KKgZARuizMTVcSkrHDxy2HJpXFIqRQ" class="btn btn-danger" role="button" target="_blank">Baixar</a>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" rounded" src="img/Memórias Póstumas de Brás Cubas.png" alt="card image"></p>
                                    <h4 class="card-title">Memórias Póstumas de Brás Cubas</h4>
                                   
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Brévia</h4>
                                    <p class="card-text">1881, Machado de Assis lançou aquele que seria um divisor de águas não só em sua obra, mas na literatura brasileira: Memórias póstumas de Brás Cubas. Ao mesmo tempo em que marca a fase mais madura do autor, o livro é considerado a transição do romantismo para o realismo.  </p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                           
                                            <a href="https://teudoc.com/visualizar-livro-813302801130181221.php?p=18636" class="btn btn-success" role="button" target="_blank">Ler</a>
                                              <a href="https://mega.nz/file/LcxgRLjC#I4okAJGVLxvW8j6QgsWqufzy0vZURuMgJnb5MlhDs7c" class="btn btn-danger" role="button" target="_blank">Baixar</a
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" rounded" src="img/O Cortiço.png" alt="card image"></p>
                                    <h4 class="card-title">O Cortiço</h4>
                                    
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Brévia</h4>
                                    <p class="card-text">O Cortiço é um romance naturalista do brasileiro Aluísio Azevedo publicado em 1890 que denuncia a exploração e as péssimas condições de vida dos moradores das estalagens ou dos cortiços cariocas do final do século XIX.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                         
                                            <a href="https://teudoc.com/visualizar-livro-813302801130181221.php?p=14822" class="btn btn-success" role="button" target="_blank">Ler</a>
                                              <a href="https://mega.nz/file/HNRWGDjJ#7HMOSaYy1XlKwAyWZM8OpfIMk3PlZt2yZzrvZ4Izv-c" class="btn btn-danger" role="button" target="_blank">Baixar</a
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class="rounded" src="img/Alice no País das Maravilhas.png" alt="card image"></p>
                                    <h4 class="card-title">Alice no País das Maravilhas</h4>
                                    
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Brévia</h4>
                                    <p class="card-text">As Aventuras de Alice no País das Maravilhas, frequentemente abreviado para Alice no País das Maravilhas é a obra infantil mais conhecida de Charles Lutwidge Dodgson, publicada a 4 de julho de 1865 sob o pseudônimo de Lewis Carroll.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                          
                                            <a  href="https://teudoc.com/visualizar-livro-813302801130181221.php?p=18594" class="btn btn-success" role="button" target="_blank">Ler</a>
                                              <a href="https://mega.nz/file/CUgQDJaR#nm6ePZJVcbOWEo3-LffrezzcNnz9bzTtG59tHefxfXY" class="btn btn-danger" role="button" target="_blank">Baixar</a
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" rounded" src="img/Crime e Castigo.png" alt="card image"></p>
                                    <h4 class="card-title">Crime e Castigo</h4>
                               
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Brévia</h4>
                                    <p class="card-text">Crime e Castigo é um romance do escritor Fiódor Dostoiévski, publicado na revista literária O Mensageiro Russo durante doze edições mensais ao longo do ano de 1866. Posteriormente, foi publicado em volume único.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                         
                                            <a  href="https://teudoc.com/visualizar-livro-813302801130181221.php?p=20365" class="btn btn-success" role="button" target="_blank">Ler</a>
                                              <a href="https://mega.nz/file/mNx2mJDT#lxB0wwaTVh-RnePuEFTIVO0FXwVQM0I-rGQ6HEadriY" class="btn btn-danger" role="button" target="_blank">Baixar</a
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class="rounded" src="img/Guerra e Paz.png" alt="card image"></p>
                                    <h4 class="card-title">Guerra e Paz</h4>
                                    
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Brévia</h4>
                                    <p class="card-text">Guerra e Paz é um romance histórico escrito pelo autor russo Liev Tolstói e publicado entre 1865 e 1869 no Russkii Vestnik, um periódico da época. É uma das obras mais volumosas da história da literatura universal. </p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                          
                                            <a  href="https://teudoc.com/visualizar-livro-813302801130181221.php?p=20962" class="btn btn-success" role="button" target="_blank">Ler</a>
                                              <a href="https://mega.nz/file/GV5GUITa#N0TMto_qwaMo1bizuS9gjBBiGj3LntYSymbj81EeKUo" class="btn btn-danger" role="button" target="_blank">Baixar</a
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class="rounded" src="img/O FUTURO DA HUMANIDADE.jpg" alt="card image"></p>
                                    <h4 class="card-title">O FUTURO DA HUMANIDADE</h4>
                                    
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Brévia</h4>
                                    <p class="card-text">A primeira aventura de Marco Polo, ainda um jovem estudante, e sua luta para humanizar a medicina, quebrar preconceitos e transformar o mundo.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                           
                                            <a  href="https://teudoc.com/visualizar-livro-813302801130181221.php?p=1926" class="btn btn-success" role="button" target="_blank">Ler</a>
                                              <a href="https://mega.nz/file/OVIiXTZD#NF4ZA0s5Ke5D-0nRo2GnnvygRNyfsGDMuGm5zH3VZ1k" class="btn btn-danger" role="button" target="_blank">Baixar</a
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class="rounded" src="img/Poder Do Silencio.jpg" alt="card image"></p>
                                    <h4 class="card-title">Poder Do Silencio</h4>
                                    
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Brévia</h4>
                                    <p class="card-text">Eckhart Tolle é autor de O Poder do Agora, livro com mais de 8 milhões de exemplares vendidos.“Quando entra no Agora, você sai do conteúdo da sua mente. A incessante corrente do pensamento se desacelera. Os pensamentos não consomem mais toda a sua atenção. </p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                           
                                            <a  href="https://teudoc.com/visualizar-livro-813302801130181221.php?p=15335" class="btn btn-success" role="button" target="_blank">Ler</a>
                                              <a href="https://mega.nz/file/OVhWmTAZ#w_A56JBo4WsvKv9J5lKFEqJYiB76vN69O19f-5UIs4w" class="btn btn-danger" role="button" target="_blank">Baixar</a
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
             <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" rounded" src="img/suzane.jpg" alt="card image"></p>
                                    <h4 class="card-title">Suzane</h4>
                                  
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Brévia</h4>
                                    <p class="card-text">Suzane Louise von Richthofen é uma lenda do mundo do crime. Em 30 de outubro de 2002, ela abriu a porta de casa para guiar os matadores dos seus pais. </p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                          
                                            <a href="https://teudoc.com/visualizar-livro-813302801130181221.php?p=15342" class="btn btn-success" role="button" target="_blank">Ler</a>
                                              <a href="https://mega.nz/file/6QpiHRRK#eITq2vuMi6zofWD2_KZ38qOJILip3eat-iRcJat0VF4" class="btn btn-danger" role="button" target="_blank">Baixar</a
                                            
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class="rounded" src="img/Armadilhas da Mente.png" alt="card image"></p>
                                    <h4 class="card-title">Armadilhas da Mente</h4>
                                  
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Brévia</h4>
                                    <p class="card-text">Perito nos mistérios da psicologia, Marco Polo ajuda uma brilhante e transtornada mulher a encarar seus medos e a se libertar de seus traumas e limitações.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                          
                                            <a href="https://teudoc.com/visualizar-livro-813302801130181221.php?p=14196" class="btn btn-success" role="button" target="_blank">Ler</a>
                                              <a href="https://mega.nz/file/GExgiZQL#8ppU2L0xwUrgRBomnlAGECnInPgpXZp0EZHFitL7_rs" class="btn btn-danger" role="button" target="_blank">Baixar</a
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Team -->
</body>