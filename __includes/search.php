<div class="container mt-5">
  <div class="text-left">
  </div>
  <?php if ($user_loggedin == true): ?>
    <div class="mb-5 text-right align-middle">
      <a href="?q=new_article">
        <svg class="bi bi-file-plus" width="1em" height="1em" viewBox="0 2 16 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M9 1H4a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V8h-1v5a1 1 0 01-1 1H4a1 1 0 01-1-1V3a1 1 0 011-1h5V1z"/>
          <path fill-rule="evenodd" d="M13.5 1a.5.5 0 01.5.5v2a.5.5 0 01-.5.5h-2a.5.5 0 010-1H13V1.5a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
          <path fill-rule="evenodd" d="M13 3.5a.5.5 0 01.5-.5h2a.5.5 0 010 1H14v1.5a.5.5 0 01-1 0v-2z" clip-rule="evenodd"/>
        </svg>
        Add article
      </a>
    </div>
  <?php endif; ?>
  <div class="row row-cols-1 row-cols-md-3">
    <?php echo search($db, $q); ?>
  </div>
</div>