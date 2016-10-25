#lumen-crud-restfull

To setup this CRUD at your local you need to run the migrate command of laravel after setting up the .env file. You can change the urls below as per your development environment.

GET
http://localhost/blog/public/user

GET
http://localhost/blog/public/user/1

POST
http://localhost/blog/public/user

{
	"name" : "john5",
	"email" : "johqn5@email.com"
}

PUT
http://localhost/blog/public/user/1

{
	"name" : "john5",
	"email" : "johqn5@email.com"
}

DELETE
http://localhost/blog/public/user/1