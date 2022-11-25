{% extends "template.html.twig" %}


{% block page %}
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ path }}">Acceuil</a></li>
    <li class="breadcrumb-item active" aria-current="page">Livres</li>
  </ol>
</nav>
<h2 class="text-center p-2">Repertoire de livres</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Auteur</th>
    </tr>
  </thead>
  <tbody>
{% for livre in livres %}

    <tr>
      <td>{{livre.titre}}</td>
      <td>{{livre.edition}}</td>
      <td>{{livre.nom_auteur}}</td>
      <td>{{livre.nom_maison_edition}}</td>
    </tr>

{% endfor %}  
</tbody>
</table>
{% endblock %}
    
