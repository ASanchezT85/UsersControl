<!-- BEGIN PLUGINS JS -->
<script src="{{ asset('vendor/particles/particles.js') }}"></script>
<script>
  /**
   * Keep in mind that your scripts may not always be executed after the theme is completely ready,
   * you might need to observe the `theme:load` event to make sure your scripts are executed after the theme is ready.
   */
  $(document).on('theme:init', () =>
  {
    /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
      particlesJS.load('auth-header', 'vendor/particles/demo/particles.json');
  })
</script> <!-- END PLUGINS JS -->