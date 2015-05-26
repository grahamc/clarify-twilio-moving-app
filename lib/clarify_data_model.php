<?php

class ClarifyDataModel {
  function __construct($clarify_bundle) {
    $this->bundle = $clarify_bundle;
  }

  function saveBoxIDWithMedia($boxID, $url) {
    return $this->bundle->create('#' . (int)$boxID, $url);
  }

  function searchForBoxes($query) {
    $page = $this->bundle->search($query);

    return $this->extractBoxNamesFromSearchResults($page);
  }

  protected function extractBoxNamesFromSearchResults($results) {
    $names = [];

    foreach ($results['_links']['items'] as $index => $item) {
      $_bundle = $this->bundle->load($item['href']);
      $names[] = $_bundle['name'];
    }

    return $names;
  }
}

