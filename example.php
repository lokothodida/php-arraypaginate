<?php

/* PHP ArrayPaginate Example */
include('php-arraypaginate.php');

// setting up the items
$items = array();

for ($i = 0; $i < 40; $i++) {
  $items[] = array('id' => $i);
}

// ensuring that we have a page
if (!isset($_GET['page'])) {
  $_GET['page'] = 1;
}

// instantiate
$ap = new ArrayPaginate($items);

// 5 items per page, current page set by the url query and english labels
$results = $ap->paginate(array(
  'itemsPerPage' => 5,
  'currentPage'  => $_GET['page'],
  'url'          => '?page=%page%',
  'maxNavLinks'  => 5,
));

// output the navigation
echo $results['navigation'];

// state the total number of pages
echo '<p>Page ' . $_GET['page'] . ' of ' . $results['totalPages'] . '</p>';

// display the results for this page
foreach ($results['results'] as $result) {
  var_dump($result); echo '<br><br>';
}

// output the navigation again at the bottom
echo $results['navigation'];

?>
