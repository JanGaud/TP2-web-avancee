{% extends "template.html.twig" %}


{% block page %}
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ path }}">Acceuil</a></li>
    <li class="breadcrumb-item active" aria-current="page">Connexion</li>
  </ol>
</nav>
    <h2 class="text-center p-2">Mon compte</h2>
<div class="d-flex justify-content-center">
<div class="card" style="width: 25rem;">
<div class="card-header text-center bg-primary text-white">
    Connexion
</div>
  <div class="card-body">
    <form>
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" id="form2Example1" class="form-control" />
            <label class="form-label" for="form2Example1">Courriel</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" id="form2Example2" class="form-control" />
            <label class="form-label" for="form2Example2">Mot de passe</label>
        </div>

        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
            <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                <label class="form-check-label" for="form2Example31">Souvenez-vous de moi</label>
            </div>
            </div>

            <div class="col">
            <!-- Simple link -->
            <a href="#!">Mot de passe oublié?</a>
            </div>
        </div>

        <!-- Submit button -->
        <button type="button" class="btn btn-primary btn-block mb-4">Connexion</button>

        <!-- Register buttons -->
        <div class="text-center">
            <p>Pas un membre? <a href="{{ path }}register">Creer un compte</a></p>
            <p>Abonnez-vous avec:</p>
            <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-google"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-github"></i>
            </button>
        </div>
        </form>
        </div>
        </div>
</div>
{% endblock %}