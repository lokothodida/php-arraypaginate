# PHP ArrayPaginate
Paginate arrays in PHP.

## Features
* Clean HTML markup for navigation
* Set the maximum number of navigation links to show
* Slices array for you
* Easy to integrate

```php
$items = array(/* */);
$ap    = new ArrayPaginate($items);

// get the results
$results = $ap->paginate( array('itemsPerPage' => 5, /* and other settings ... */) );

// output the pagination
echo $results['navigation'];

// display your results
foreach ($results['results'] as $result) {
  // ...
}
```

## Getting started
Check out the [wiki](//github.com/lokothodida/php-arraypaginate/wiki) for information on starting up *PHP ArrayPaginate*.

## API
Full API and examples are available on the [wiki](//github.com/lokothodida/php-arraypaginate/wiki).

## License
*PHP ArrayPaginate* is licensed under [MIT](http://www.opensource.org/licenses/MIT).

## Copright
&copy Lawrence Okoth-Odida. All rights reserved.
