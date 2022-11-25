{% extends "template.html.twig" %}


{% block page %}
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ path }}">Acceuil</a></li>
    <li class="breadcrumb-item active" aria-current="page">Inscription</li>
  </ol>
</nav>

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Formulaire d'inscription</h3>
            <form action="{{ path }}client/store" method="post">

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" class="form-control form-control-lg" name="nom_client" />
                    <label class="form-label" for="firstName">Nom</label>
                  </div>                
                </div>  
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="date" class="form-control form-control-lg" id="anniversaire" name="date_de_naissance"/>
                    <label for="birthdayDate" class="form-label">Anniversaire</label>
                  </div>

                </div>

              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="courriel" class="form-control form-control-lg" name="client_courriel" />
                    <label class="form-label" for="courriel">Courriel</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="telephone" class="form-control form-control-lg" name="telephone"/>
                    <label class="form-label" for="phoneNumber">Téléphone</label>
                  </div>

                </div>

                <div class="col-md-6 mb-4 pb-2">

                    <div class="form-outline">
                        <input type="text" id="adresse" class="form-control form-control-lg" name="adresse"/>
                        <label class="form-label" for="phoneNumber">Adresse</label>
                    </div>

                </div>
              </div>

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Enregistrer" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{% endblock %}        
