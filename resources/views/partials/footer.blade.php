<footer>
  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">Acerca de nosotros</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Contactanos</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Servicios</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Fotografía Profesional</a>
            <a href="#" class="item">Desarrollo web</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Entra y conocenos</h4>
          <p>©2017 Cheesy S.A. de C.V. Todos los derechos reservados.</p>
        </div>
      </div>
    </div>
  </div>
</footer>

</div>
<script
src="https://code.jquery.com/jquery-3.1.1.min.js"
integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
crossorigin="anonymous"></script>
<script src="css/framework/dist/semantic.min.js"></script>
<script type="text/javascript">
$(document)
  .ready(function() {

    // fix menu when passed
    $('.masthead')
      .visibility({
        once: false,
        onBottomPassed: function() {
          $('.fixed.menu').transition('fade in');
        },
        onBottomPassedReverse: function() {
          $('.fixed.menu').transition('fade out');
        }
      })
    ;

    // create sidebar and attach to menu open
    $('.ui.sidebar')
      .sidebar('attach events', '.toc.item')
    ;

  })
;
</script>

</body>
</html>
