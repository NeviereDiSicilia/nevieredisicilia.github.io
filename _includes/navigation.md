<nav>
  {% for item in site.data.navigation %}
    <a href="{{ item.link }}"
       {% if item.highlight %}style="background-color: yellow;"{% endif %}
       {% if item.link == page.url %}class="active"{% endif %}>
       {{ item.name }}
    </a>
  {% endfor %}
</nav>
