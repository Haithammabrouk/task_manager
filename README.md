after downloading the project from this rep 
using git clone https://github.com/Haithammabrouk/task_manager.git

after installing the project run 

-create the database with name task_manager

-then run composer install  (to install the package required for the project)

-php artisan migrate  (to migrate tables to the database)

-php artisan db:seed  (to run the seeders and insert data into the tables)

-php artisan test  (to run the project unit tests)

-php artisan serve (to start the project)

and in another tab run this to start the queue to excute the job

php artisan queue:work   (to run the job for the statistics bouns)
