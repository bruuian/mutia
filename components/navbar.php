<?php if ($pTitle == 'Home'): ?>
<div class="navbar-overlay">
<?php endif; ?>

<nav class="level">
  <p class="level-item item has-text-centered">
    <a class="link is-info" href="/mutia/discover">Discover Mutia</a>
  </p>
  <p class="level-item item has-text-centered">
    <a class="link is-info" href="/mutia/explore">Explore & Experience</a>
  </p>
  <p class="level-item has-text-centered">
    <a class="project-title" href="/mutia" style="<?= $pTitle == 'Home' ? 'color: #ffffff; text-shadow: 0.3px 0.3px 1px rgb(0, 0, 0);' : 'color:rgb(0, 0, 0); text-shadow: 0.3px 0.3px 1px rgb(0,rgb(255, 255, 255)'?>">Mutia</a>
  </p>
  <p class="level-item item has-text-centered">
    <a class="link is-info" href="https://www.facebook.com/groups/1814206105385044/">Community</a>
  </p>
  <p class="level-item item has-text-centered">
    <a class="link is-info" href="https://www.facebook.com/mutia.municipality">News & Events</a>
  </p>
</nav>

<?php if ($pTitle == 'Home'): ?>
</div> <!-- Close navbar-overlay -->
<?php endif; ?>
