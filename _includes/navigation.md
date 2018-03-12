<nav>
  {% for item in site.data.navigation %}
    <a href="{{ item.link }}"
       {% if item.highlight %}style="border: 1px solid green;"{% endif %}
       {% if item.link == page.url %}class="active"{% endif %}>
       {{ item.name }}
    </a>
  {% endfor %}
</nav>
