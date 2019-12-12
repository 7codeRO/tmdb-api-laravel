# Introduction
This project is a showcase of an API implementation on top of `php-tmdb/laravel` package, for managing a list of favorite movies.

# Routes
```
+--------+-----------+-----------------------------+-------------------+----------------------------------------------------------+---------------------+
| Domain | Method    | URI                         | Name              | Action                                                   | Middleware          |
+--------+-----------+-----------------------------+-------------------+----------------------------------------------------------+---------------------+
|        | GET|HEAD  | /                           |                   | Closure                                                  | web                 |
|        | POST      | api/v1/favorites            | favorites.store   | App\Http\Controllers\API\FavoriteMovieController@store   | api,auth.basic.once |
|        | GET|HEAD  | api/v1/favorites            | favorites.index   | App\Http\Controllers\API\FavoriteMovieController@index   | api,auth.basic.once |
|        | GET|HEAD  | api/v1/favorites/{favorite} | favorites.show    | App\Http\Controllers\API\FavoriteMovieController@show    | api,auth.basic.once |
|        | PUT|PATCH | api/v1/favorites/{favorite} | favorites.update  | App\Http\Controllers\API\FavoriteMovieController@update  | api,auth.basic.once |
|        | DELETE    | api/v1/favorites/{favorite} | favorites.destroy | App\Http\Controllers\API\FavoriteMovieController@destroy | api,auth.basic.once |
|        | GET|HEAD  | api/v1/movie                | movie.index       | App\Http\Controllers\API\MovieController@index           | api,auth.basic.once |
|        | POST      | api/v1/movie                | movie.store       | App\Http\Controllers\API\MovieController@store           | api,auth.basic.once |
|        | GET|HEAD  | api/v1/movie/{movie}        | movie.show        | App\Http\Controllers\API\MovieController@show            | api,auth.basic.once |
|        | PUT|PATCH | api/v1/movie/{movie}        | movie.update      | App\Http\Controllers\API\MovieController@update          | api,auth.basic.once |
|        | DELETE    | api/v1/movie/{movie}        | movie.destroy     | App\Http\Controllers\API\MovieController@destroy         | api,auth.basic.once |
|        | GET|HEAD  | api/v1/user                 |                   | Closure                                                  | api,auth.basic.once |
+--------+-----------+-----------------------------+-------------------+----------------------------------------------------------+---------------------+

```
