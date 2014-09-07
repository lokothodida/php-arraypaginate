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
  public function __construct($items) {
    $this->items = $items;
  }

  // Paginate
  public function paginate($options) {
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
    // ...
  }

  // Put the default options in
  private function setDefaultOptions($options) {
    // ...
  }

  // Set the current page and slice the array
  private function selectCurrentPage() {
    // ...
  }

  // Build up the navigation html
  private function buildNavigation() {
    // ...
  }
}

?>
