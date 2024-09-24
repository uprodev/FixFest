</main>

<footer>
  <div class="content-width">
    <div class="content">

      <?php if ($field = get_field('copyright_f', 'option')): ?>
        <div class="left">
          <p><?= $field ?></p>
        </div>
      <?php endif ?>

      <?php if (($items = get_field('links_f', 'option')) && is_array($items) && checkArrayForValues($items)): ?>
      <div class="center">
        <ul>

          <?php foreach ($items as $item): ?>
            <?php if ($item['link']): ?>
              <li>
                <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= $item['link']['title'] ?></a>
              </li>
            <?php endif ?>
          <?php endforeach ?>

        </ul>
      </div>
    <?php endif ?>


    <?php if (($items = get_field('socials_h', 'option')) && is_array($items) && checkArrayForValues($items)): ?>
    <div class="right">
      <ul>

        <?php foreach ($items as $item): ?>
          <?php if ($item['link']): ?>
            <li>
              <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><i class="<?= $item['link']['title'] ?>"></i></a>
            </li>
          <?php endif ?>
        <?php endforeach ?>
        
      </ul>
    </div>
  <?php endif ?>

</div>
</div>
</footer>

<?php wp_footer() ?>
</body>
</html>