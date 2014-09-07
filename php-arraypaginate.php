<?php

/**
 * Title:         PHP ArrayPaginate
 * Version:       0.1
 * Description:   Paginate PHP arrays with markup for navigation
 * Author:        Lawrence Okoth-Odida
 * Documentation: https://github.com/lokothodida/php-arraypaginate/wiki/
 */
class ArrayPaginate {
  /** constants*/

  /** properties */
  private $options,
          $items,
          $results,
          $totalPages,
          $navigation;

  /** public methods */
  // Constructor
  public function __construct(array $items) {
    $this->items = $items;
  }

  // Paginate
  public function paginate(array $options) {
    $this->resetPagination();
    $this->setDefaultOptions($options);
    $this->selectCurrentPage();
    $this->buildNavigation();

    return array(
      'results'    => $this->results,
      'totalPages' => $this->totalPages,
      'navigation' => $this->navigation,
    );
  }

  /* private methods */
  // Reset the current pagination fields
  private function resetPagination() {
    $this->options    = array();
    $this->results    = array();
    $this->totalPages = null;
    $this->navigation = null;
  }

  // Put the default options in
  private function setDefaultOptions($options) {
    // items per page
    if (!isset($options['itemsPerPage'])) {
      $options['itemsPerPage'] = 5;
    }

    // current page
    if (!isset($options['currentPage'])) {
      $options['currentPage'] = 1;
    }

    // url
    if (!isset($options['url'])) {
      $options['url'] = '?p=%page%';
    }

    // labels
    if (!isset($options['labels']['first'])) {
      $options['labels']['first'] = '&lt;&lt;';
    }
    if (!isset($options['labels']['prev'])) {
      $options['labels']['prev'] = '&lt;';
    }
    if (!isset($options['labels']['next'])) {
      $options['labels']['next'] = '&gt;';
    }
    if (!isset($options['labels']['last'])) {
      $options['labels']['last'] = '&gt;&gt;';
    }

    // maximum number of navigation links
    if (!isset($options['maxNavLinks'])) {
      $options['maxNavLinks'] = 0;
    }

    $this->options = $options;
  }

  // Set the current page and slice the array
  private function selectCurrentPage() {
    $currentPage   = $this->options['currentPage'];
    $itemsPerPage  = $this->options['itemsPerPage'];
    $start         = ($currentPage - 1) * $itemsPerPage;
    $this->results = array_slice($this->items, $start, $itemsPerPage);
  }

  // Build up the navigation html
  private function buildNavigation() {
    // ...
  }
}

?>
