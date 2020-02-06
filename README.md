## Laravel Fundamentals

## Migrations

* Migrations mean insert a table inside a database by command.
* First of all have to create table by command... syntex "php artisan make:migration create_tableName_table --create=tableName"
* Then a file will be create database>migrations folder as like "2020_01_09_070723_create_tableName_table.php"
* Now open that file to get more instruction. 
* After configure the table column write command "php artisan migrate".

## Make  Controller 

* php artisan make:controller controllerName

## Make Resource Controller 

* php artisan make:controller controllerName --resource 

## Make Model

* php artisan make:model modelName
* php artisan make:model folderName/modelName

## Make "Model", "Resource controller" and "Migration File" by One command

* php atrisan make:model -mrc ModelName

## Resource Route

* Route::resource('routeName', 'controllerName');
* {{url('routeName')}} //index method
* {{url('routeName/create')}} //create method
* {{url('routeName')}} //store method if form method 'post'
* {{url('routeName/id')}} //update method if form method 'put or patch'
* {{url('routeName/id')}} //show method
* {{url('routeName/id/edit')}} //edit method
* {{url('routeName/id')}} //distroy method if form method 'delete'
