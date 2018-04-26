		<section id="email.php">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Agendamentos de Serviços</h2>
            <h3 class="section-subheading text-muted">Agradecemos por você querer fazer parte do nosso time de cliente, em breve entraremos em contato com você.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="Agendamento realizado, em breve entraremos em contato com você." action="email.php" method="POST" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" name="nome" placeholder="Nome Completo" required data-validation-required-message="Por Favor insira o seu nome completo.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" name="email" placeholder="E-mail" required data-validation-required-message="Por Favor insira o seu  e-mail.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" name="whatsapp" placeholder="WhatsApp - (81) 98877-1710" required data-validation-required-message="Por Favor insira o seu WhatsApp">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" name="mensagem" placeholder="Descreva seu problema no seu Desktop." required data-validation-required-message="Campo em branco, por favor informe seu problema."></textarea>
                    <p class="help-block text-danger"></p>

                    <input type="submit" value="Agenda Serviço">
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
</div>
</div>
</form>
</div>
</div>
</div>
</section>



