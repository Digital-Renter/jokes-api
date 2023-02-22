# Jokes API 

## Routes 
*Generated from `php artisan route:list`*
```
GET|HEAD   / ............................................................................................................................ 
POST       _ignition/execute-solution ..................... ignition.executeSolution › Spatie\LaravelIgnition › ExecuteSolutionController
GET|HEAD   _ignition/health-check ................................. ignition.healthCheck › Spatie\LaravelIgnition › HealthCheckController
POST       _ignition/update-config .............................. ignition.updateConfig › Spatie\LaravelIgnition › UpdateConfigController
GET|HEAD   api/comments ........................................................................ comments.index › CommentController@index
POST       api/comments ........................................................................ comments.store › CommentController@store
GET|HEAD   api/jokes ................................................................................. jokes.index › JokeController@index
POST       api/jokes ................................................................................. jokes.store › JokeController@store
GET|HEAD   api/user ..................................................................................................................... 
GET|HEAD   sanctum/csrf-cookie ........................................ sanctum.csrf-cookie › Laravel\Sanctum › CsrfCookieController@show
```

## Contribution
Found a bug? Create an issue, fork the repo, make changes and make a PR. 

## Devs
https://tech.digitalrenter.com