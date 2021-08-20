@extends('layouts.main')

@section('header')
<li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index/#about">Sobre nós</a></li>
          <li class="dropdown" ><a  class="nav-link scrollto" href="#services">Serviços<i class="bi bi-chevron-down"></i></a>
          <ul>
                  <li><a href="redes">Redes e Manutenção</a></li>
                  <li><a href="programacao"> Programação</a></li>
                  <li><a href="it"> IT Outsourcing Services</a></li>
                  <li><a href="bi">Business intelegence</a></li>
                  <li><a href="train">Treinamento de funcionários</a></li>
                </ul>
        </li>
          <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
          <li><a class="getstarted scrollto" href="#about">Começar</a></li>
  @endsection
@section('content')


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Gyltech a melhor solução tecnologica para os seus negócios</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Gyltech é uma empresa de prestação de serviços na area de Ti e consultoria com tecnicos qualificados para melhorar,gerenciar e garantir o melhor da tecnologia para seu negócio
            ou sua empresa </h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Começar</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>QUEM SOMOS NÓS</h3>
              <h2>Gyltech a melhor solução tecnologica para os seus negocios</h2>
              <p>
                A Gyltech é uma empresa de serviços de TI, fundada em 2019 com expertise em apoiar agências governamentais, organizações do sector público e empresas privadas a organizar, controlar e desenvolver seus negócios por meio de soluções inovadoras com custos operacionais acessiveis.
                encontra-se situada  em Luanda, a empresa fornece soluções de infra-estrutura de TI por meio de sua Fábrica de Software...
              </p>
              <div class="text-center text-lg-start">
                <a href="sobre" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>ler mais</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="img/a.jpg" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Nossos Valores</h2>
          <p>GYLTECH</p>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/values-1.png" class="img-fluid" alt="">
              <h3>Missão</h3>
              <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="400">
              <img src="assets/img/values-2.png" class="img-fluid" alt="">
              <h3>Visão</h3>
              <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="600">
              <img src="assets/img/values-3.png" class="img-fluid" alt="">
              <h3>Valores</h3>
              <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Values Section -->

    <!-- ======= Counts Section ======= -->
    <!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Serviços</h2>
          <p>O melhor para sua empresa</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <i class="ri-discuss-line icon"></i>
              <h3>Serviços de redes e Manutenção</h3>
              <p>Instalamos Redes locais de computadores em sua empresa e configuramos a segurança da rede, 
                compartilhamos suas conexões com a internet, Impressoras, Arquivos e outros computadores podendo transferir arquivos e informações com mais segurança.</p>
              <a href="redes" class="read-more"><span>Ler mais</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box orange">
              <i class="ri-discuss-line icon"></i>
              <h3>Serviços de programação</h3>
              <p>Criamos novos programas adaptados às necessidades da organização. 
                Pode ser um programa para gerenciar a equipe de trabalho ou um software para 
                monitorar e rastrear estoque. testamos e instalamos os novos programas nos computadores do cliente.</p>
              <a href="programacao" class="read-more"><span>Ler mais</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
              <i class="ri-discuss-line icon"></i>
              <h3>Design</h3>
              <p>Ajudamos os clientes e empresas a Criar a sua marca e investimos no marketing Digital da mesma.</p>
              <a href="design" class="read-more"><span>Ler mais</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box red">
              <i class="ri-discuss-line icon"></i>
              <h3> IT Outsourcing Services</h3>
              <p>A Gyltech oferece serviços Outsourcing nas áreas de
	               design do site,	configuração e gerenciamento de rede,Segurança,suporte técnico e de desktop,	desenvolvimento de aplicativos,	telecomunicações e infraestrutura.</p>
              <a href="it" class="read-more"><span>Ler mais</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-box purple">
              <i class="ri-discuss-line icon"></i>
              <h3> Business intelegence</h3>
              <p>A Gyltech usa um conjunto de técnicas e sistemas para ajudar as empresas a coletar informaçãoes e na tomada de decisões e ajudamos a mesma a tratar do seus dados de forma segura com tecnicas inovadoras</p>
              <a href="bi" class="read-more"><span>Ler mais</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box pink">
              <i class="ri-discuss-line icon"></i>
              <h3>Treinamento de funcionários</h3>
              <p>A GYLTECH fornece serviços de Treinamento aos funcionários de como usar um novo software que acaba
                 de ser introduzido na organização sendo o software feito por qualquer empresa.</p>
              <a href="train" class="read-more"><span>Ler mais</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
   <!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <!-- End F.A.Q Section -->


    <!-- ======= Testimonials Section ======= -->
    <!-- End Testimonials Section -->

    

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Nossos Clientes</h2>
          <p>GYLTECH</p>
        </header>

        <div class="clients-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section><!-- End Clients Section -->

   

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contacto</h2>
          <p>Contacte-nos </p>
        </header>

        <div class="row gy-4">

     

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Endereço</h3>
                  <p>Luanda-Rangel,<br>rua do amarantes,casa nº09 </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Contacte-nos</h3>
                  <p>(+244) 944511777<br></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email</h3>
                  <p>geral@gyltech.co.ao<br>gylmar.david@gmail.co.ao</p>
                </div>
              </div>
            
            </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->
 
@endsection