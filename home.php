
    <div class="hero-wrap js-fullheight" style="background-image: url('<?php echo web_root; ?>plugins/jobportal/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
            <p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Nós temos <span class="number" data-number="853615">0</span> ótimas ofertas de trabalho que você merece!</p>
            <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">O emprego <br><span>dos sonhos está esperando</span></h1>
            
            <div class="ftco-search">
              <div class="row">
                <div class="col-md-12 nav-link-wrap">
                  <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Encontre um emprego</a>  
                  </div>
                </div>
                <div class="col-md-12 tab-wrap">
                  
                  <div class="tab-content p-4" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                   
                        <form  class="search-job" action="index.php?q=result&searchfor=advancesearch" method="POST"> 
                        <div class="row">
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="icon"><span class="icon-briefcase"></span></div>
                                <input type="text"  name="SEARCH" class="form-control" placeholder="Cargo ou palavra-chave">
                              </div>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="select-wrap">
                                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                  <select name="CATEGORY" class="form-control">
                                    <option value="">Categoria</option>
                                    <?php
                                      $sql = "SELECT * FROM `tblcategory`";
                                      $mydb->setQuery($sql);
                                      $res = $mydb->loadResultList();
                                      foreach ($res as $row) { 
                                        echo '<option>'.$row->CATEGORY.'</option>';
                                      }
                                    ?>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="icon"><span class="icon-map-marker"></span></div>
                                 <select  name="COMPANY" class="form-control">
                                    <option value="">Localização</option>
                                   <?php
                                         $sql = "SELECT * FROM `cidade`";
                                      $mydb->setQuery($sql);
                                      $res = $mydb->loadResultList();
                                      foreach ($res as $row) { 
                                        echo '<option>'.$row->descricao.'</option>';
                                      }
                                    ?>
                                  </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <input type="submit" value="Buscar" class="form-control btn btn-primary">
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>

                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-resume"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Procure milhões de empregos</h3>
                <p>Um pequeno rio chamado Duden flui por sua localidade e suprimentos.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-collaboration"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Trabalhos fáceis de gerenciar</h3>
                <p>Um pequeno rio chamado Duden flui por sua localidade e suprimentos.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-promotions"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Principais carreiras</h3>
                <p>Um pequeno rio chamado Duden flui por sua localidade e suprimentos.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-employee"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Pesquisar candidatos especialistas</h3>
                <p>Um pequeno rio chamado Duden flui por sua localidade e suprimentos.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-counter">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Categorias trabalham esperando por você</span>
            <h2 class="mb-4"><span>Atual</span> Postagens de emprego</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 ftco-animate">
            <ul class="category">
              <li><a href="#"> Desenvolvimento web<span class="number" data-number="1000">0</span></a></li>
              <li><a href="#">Designer gráfico <span class="number" data-number="1000">0</span></a></li>
              <li><a href="#">Multimídia <span class="number" data-number="2000">0</span></a></li>
              <li><a href="#">Propaganda <span class="number" data-number="900">0</span></a></li>
            </ul>
          </div>
          <div class="col-md-3 ftco-animate">
            <ul class="category">
              <li><a href="#">Educação &amp; Treinamento<span class="number" data-number="3500">0</span></a></li>
              <li><a href="#">Inglês <span class="number" data-number="1560">0</span></a></li>
              <li><a href="#">Mídia Social<span class="number" data-number="1000">0</span></a></li>
              <li><a href="#">Escrevendo <span class="number" data-number="2500">0</span></a></li>
            </ul>
          </div>
          <div class="col-md-3 ftco-animate">
            <ul class="category">
              <li><a href="#">Programador PHP <span class="number" data-number="5500">0</span></a></li>
              <li><a href="#">Gerenciamento de Projetos <span class="number" data-number="2000">0</span></a></li>
              <li><a href="#">Gestão Financeira <span class="number" data-number="800">0</span></a></li>
              <li><a href="#">Escritório &amp;  Admin<span class="number" data-number="7000">0</span></a></li>
            </ul>
          </div>
          <div class="col-md-3 ftco-animate">
            <ul class="category">
              <li><a href="#">Web Designer <span><span class="number" data-number="8000">0</span></span></a></li>
              <li><a href="#">Atendimento ao Cliente<span class="number" data-number="4000">0</span></a></li>
              <li><a href="#">Marketing &amp; Vendas<span class="number" data-number="3300">0</span></a></li>
              <li><a href="#">Desenvolvimento de software<span class="number" data-number="1356">0</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Trabalhos Adicionados Recentemente</span>
            <h2 class="mb-4"><span>Empregos</span> recentes</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 ftco-animate">

            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
                <div class="job-post-item-header d-flex align-items-center">
                  <h2 class="mr-3 text-black h3">Desenvolvimento de front-end</h2>
                  <div class="badge-wrap">
                   <span class="bg-primary text-white badge py-2 px-3">Tempo integral</span>
                  </div>
                </div>
                <div class="job-post-item-body d-block d-md-flex">
                  <div class="mr-3"><span class="icon-layers"></span> <a href="#">Marry Perry Paris. Empresa de Marketing Digital e E-commerce</a></div>
                  <div><span class="icon-my_location"></span> <span>Campinas / SP</span></div>
                </div>
              </div>

              <div class="ml-auto d-flex">
                <a href="https://www.jobbol.com.br/vagas/2047407-desenvolvedor-front-end-jr-campinas-sp?utm_source=Indeed&utm_medium=organic&utm_campaign=Indeed" class="btn btn-primary py-2 mr-1">Ver Vaga</a>
                <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                  <span class="icon-heart"></span>
                </a>
              </div>
            </div>
          </div><!-- end -->

          <div class="col-md-12 ftco-animate">
            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">OPERADOR DE COBRANCA JR</h2>
                 <div class="badge-wrap">
                  <span class="bg-warning text-white badge py-2 px-3">Home office</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="icon-layers"></span> <a href="https://algartech.com/pt/">ALGAR TECH</a></div>
                 <div><span class="icon-my_location"></span> <span>Campinas, SP</span></div>
               </div>
              </div>

              <div class="ml-auto d-flex">
                <a href="https://www.portalsinergyrh.com.br/Portal/MeuPortal/VisualizarVaga?idVaga=731333" class="btn btn-primary py-2 mr-1">Ver Vaga</a>
                <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                  <span class="icon-heart"></span>
                </a>
              </div>

            </div>
          </div> <!-- end -->
          <div class="col-md-12 ftco-animate">
           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">ANALISTA ATENDIMENTO JR</h2>
                 <div class="badge-wrap">
                  <span class="bg-info text-white badge py-2 px-3">Sem Detalhes</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="icon-layers"></span> <a href="https://www.kroton.com.br/">Kroton</a></div>
                 <div><span class="icon-my_location"></span> <span>Valinhos, SP</span></div>
               </div>
              </div>
              
              <div class="ml-auto d-flex">
                <a href="https://jobs.kenoby.com/kroton/job/analista-atendimento-jr/6083084ea08de26c8e531ceb?utm_source=indeed&utm_campaign=kenoby&utm_medium=post" class="btn btn-primary py-2 mr-1">Ver Vaga</a>
                <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                  <span class="icon-heart"></span>
                </a>
              </div>
           </div>
         </div> <!-- end -->
         <div class="col-md-12 ftco-animate">

           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Analista de Suporte</h2>
                 <div class="badge-wrap">
                  <span class="bg-secondary text-white badge py-2 px-3">Home office</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="icon-layers"></span> <a href="#">Sem Detalhes</a></div>
                 <div><span class="icon-my_location"></span> <span>Campinas, SP</span></div>
               </div>
              </div>

              <div class="ml-auto d-flex">
                <a href="https://www.jobbol.com.br/vagas/2050793-analista-de-suporte-campinas-sp-3?utm_source=Indeed&utm_medium=organic&utm_campaign=Indeed" class="btn btn-primary py-2 mr-1">Ver Vaga</a>
                <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                  <span class="icon-heart"></span>
                </a>
              </div>
           </div>
         </div> <!-- end -->
         <div class="col-md-12 ftco-animate">
           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Auxiliar de Cobrança</h2>
                 <div class="badge-wrap">
                  <span class="bg-danger text-white badge py-2 px-3">Tempo Integral</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="icon-layers"></span> <a href="#">Ramo funerário</a></div>
                 <div><span class="icon-my_location"></span> <span>Campinas, SP</span></div>
               </div>
              </div>
              
              <div class="ml-auto d-flex">
                <a href="https://www.jobbol.com.br/vagas/2053195-auxiliar-de-cobranca-campinas-sp?utm_source=Indeed&utm_medium=organic&utm_campaign=Indeed" class="btn btn-primary py-2 mr-1">Ver Vaga</a>
                <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                  <span class="icon-heart"></span>
                </a>
              </div>
           </div>
         </div> <!-- end -->
         <div class="col-md-12 ftco-animate">

            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
                <div class="job-post-item-header d-flex align-items-center">
                  <h2 class="mr-3 text-black h3">Assistente de Suporte Técnico - Junior</h2>
                  <div class="badge-wrap">
                   <span class="bg-primary text-white badge py-2 px-3">Sem Detalhes</span>
                  </div>
                </div>
                <div class="job-post-item-body d-block d-md-flex">
                  <div class="mr-3"><span class="icon-layers"></span> <a href="https://www.ibm.com/br-pt">IBM</a></div>
                  <div><span class="icon-map-marker"></span> <span>Hortolândia, SP</span></div>
                </div>
              </div>

              <div class="ml-auto d-flex">
                <a href="https://careers.ibm.com/job/12388036/assistente-de-suporte-t-cnico-junior-hortol-ndia-br/?codes=JB_Indeed" class="btn btn-primary py-2 mr-1">Ver Vaga</a>
                <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                  <span class="icon-heart"></span>
                </a>
              </div>
            </div>
          </div><!-- end -->

          <div class="col-md-12 ftco-animate">
            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Auxiliar Administrativo</h2>
                 <div class="badge-wrap">
                  <span class="bg-warning text-white badge py-2 px-3">Tempo Integral, Meio Período</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="icon-layers"></span> <a href="#">Parcamp</a></div>
                 <div><span class="icon-my_location"></span> <span>Campinas, SP</span></div>
               </div>
              </div>

              <div class="ml-auto d-flex">
                <a href="https://www.jobbol.com.br/vagas/2053017-auxiliar-administrativo-campinas-sp-30?utm_source=Indeed&utm_medium=organic&utm_campaign=Indeed" class="btn btn-primary py-2 mr-1">Ver Vaga</a>
                <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                  <span class="icon-heart"></span>
                </a>
              </div>

            </div>
          </div> <!-- end -->
          <div class="col-md-12 ftco-animate">
           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Agente Júnior de Atendimento ao Cliente</h2>
                 <div class="badge-wrap">
                  <span class="bg-info text-white badge py-2 px-3">Tempo Integral, Meio Período - Home office temporário</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="icon-layers"></span> <a href="https://sencinet.com/?lang=pt-br">Sencinet Brasil</a></div>
                 <div><span class="icon-my_location"></span> <span>Hortolândia, SP</span></div>
               </div>
              </div>
              
              <div class="ml-auto d-flex">
                <a href="https://sencinetbrasil.gupy.io/job/eyJqb2JJZCI6ODM3ODI0LCJzb3VyY2UiOiJpbmRlZWQifQ==?jobBoardSource=indeed" class="btn btn-primary py-2 mr-1">Ver Vaga</a>
                <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                  <span class="icon-heart"></span>
                </a>
              </div>
           </div>
         </div> <!-- end -->
         <div class="col-md-12 ftco-animate">

           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Suporte Técnico</h2>
                 <div class="badge-wrap">
                  <span class="bg-secondary text-white badge py-2 px-3">Tempo Integral</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="icon-layers"></span> <a href="https://sysfar.com.br/">SysFar</a></div>
                 <div><span class="icon-my_location"></span> <span>Campinas, SP</span></div>
               </div>
              </div>

              <div class="ml-auto d-flex">
                <a href="https://www.jobbol.com.br/vagas/2053191-suporte-tecnico-campinas-sp-2?utm_source=Indeed&utm_medium=organic&utm_campaign=Indeed" class="btn btn-primary py-2 mr-1">Ver Vaga</a>
                <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                  <span class="icon-heart"></span>
                </a>
              </div>
           </div>
         </div> <!-- end -->
         <div class="col-md-12 ftco-animate">
           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Analista de Cobrança</h2>
                 <div class="badge-wrap">
                  <span class="bg-danger text-white badge py-2 px-3">Tempo Integral, Meio Período - Home office temporário</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="icon-layers"></span> <a href="https://www.ramoss.com.br/">Ramoss</a></div>
                 <div><span class="icon-my_location"></span> <span>Campinas, SP</span></div>
               </div>
              </div>
              
              <div class="ml-auto d-flex">
                <a href="https://www.ramoss.com.br/analista-de-atendimento" class="btn btn-primary py-2 mr-1">Ver Vaga</a>
                <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                  <span class="icon-heart"></span>
                </a>
              </div>
           </div>
         </div> <!-- end -->
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
   
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(<?php echo web_root; ?>plugins/jobportal/images/bg_1.jpg);" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="row">
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="1350000">0</strong>
                    <span>Empregos</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="40000">0</strong>
                    <span>Membros</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="10500">0</strong>
                    <span>Empresas</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Testemunhos</span>
            <h2 class="mb-4"><span>Clientes</span> Felizes</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php echo web_root; ?>plugins/jobportal/images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php echo web_root; ?>plugins/jobportal/images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php echo web_root; ?>plugins/jobportal/images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php echo web_root; ?>plugins/jobportal/images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(<?php echo web_root; ?>plugins/jobportal/images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Nosso Blog</span>
            <h2><span>Blog</span> recente</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text mt-3">
                <div class="meta mb-2">
                  <div><a href="#">2 de dezembro de 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Mesmo o todo-poderoso Pointing não tem controle sobre os textos cegos</a></h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto enim non iste maxime optio, ut com</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text mt-3">
                <div class="meta mb-2">
                  <div><a href="#">2 de dezembro de 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Mesmo o todo-poderoso Pointing não tem controle sobre os textos cegos</a></h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet nobis natus incidunt officia assumenda.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text mt-3">
                <div class="meta mb-2">
                  <div><a href="#">2 de dezembro de 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Mesmo o todo-poderoso Pointing não tem controle sobre os textos cegos</a></h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi obcaecati praesentium,</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_4.jpg');">
              </a>
              <div class="text mt-3">
                <div class="meta mb-2">
                  <div><a href="#">2 de dezembro de 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Mesmo o todo-poderoso Pointing não tem controle sobre os textos cegos</a></h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor minima, dolores quis, dolorum accusamu</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>