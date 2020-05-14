<?php

  function create_article($db, $d, $t, $c)
  {
    $query = "INSERT INTO articles(date_created, title, contents, url) VALUES('$d', '$t', '$c', '$t')";
    return $db->query($query);
  }

  function retrieve_articles_list($db)
  {
    $query = "SELECT * FROM articles";
    $ret = $db->query($query);

    while ($row = $ret->fetchArray()) {
      $article_id = $row['id'];
      $article_date_created = $row['date_created'];
      $article_title = $row['title'];
      $article_contents = $row['contents'];

      // Create a list to show in sidebar
      $article_item .= "<a class='content-table-item' href='?a=$article_id'>
                          <svg class='bi bi-file-earmark-text' width='1em' height='1em' viewBox='0 0 16 16' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                            <path d='M4 1h5v1H4a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V6h1v7a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2z'/>
                            <path d='M9 4.5V1l5 5h-3.5A1.5 1.5 0 019 4.5z'/>
                            <path fill-rule='evenodd' d='M5 11.5a.5.5 0 01.5-.5h2a.5.5 0 010 1h-2a.5.5 0 01-.5-.5zm0-2a.5.5 0 01.5-.5h5a.5.5 0 010 1h-5a.5.5 0 01-.5-.5zm0-2a.5.5 0 01.5-.5h5a.5.5 0 010 1h-5a.5.5 0 01-.5-.5z' clip-rule='evenodd'/>
                          </svg>
                          $article_title
                        </a>";
    }
    return $article_item;
  }

  function retrieve_articles_cards($db)
  {
    $query = "SELECT * FROM articles";
    $ret = $db->query($query);

    while ($row = $ret->fetchArray()) {
      $article_id = $row['id'];
      $article_date_created = $row['date_created'];
      $article_title = $row['title'];
      $article_contents = $row['contents'];

      // Create a list to show in sidebar
      $article_item .= "<div class='col mb-4'>
                          <a class='card tile-link' href='?a=$article_id'>
                            <div class='card-body'>
                              <h5 class='card-text'>$article_title</h5>
                            </div>
                          </a>
                        </div>";
    }
    return $article_item;
  }

  function retrieve_single_article($db, $a)
  {
    $query = "SELECT * FROM articles WHERE id = $a";
    $ret = $db->query($query);
    $row = $ret->fetchArray();

    $article_date_created = $row['date_created'];
    $article_title = $row['title'];
    $article_contents = $row['contents'];

    $article_single = array($article_date_created, $article_title, $article_contents);

    return $article_single;
  }

  function update_article($db, $id, $d, $t, $c)
  {
    $query = "UPDATE
                articles
              SET
                date_created = '$d',
                title = '$t',
                contents = '$c',
                url = '$t'
              WHERE
                id = $id";
    return $db->query($query);
  }

  function delete_article($db, $id)
  {
    $query = "DELETE FROM articles WHERE id = $id";
    return $db->query($query);
  }
