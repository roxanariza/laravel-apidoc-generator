```js
$.ajax({
    url: 'https://www.domain.com' +
             '/{{ ltrim($route['boundUri'], '/') }}',
{!! json_encode($route['cleanBodyParameters'], JSON_PRETTY_PRINT) !!}
   ,
    success: function(response) {},
    error: function(response) {}
});
```